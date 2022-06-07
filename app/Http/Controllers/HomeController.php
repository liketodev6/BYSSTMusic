<?php

namespace App\Http\Controllers;

use App\Models\DataVisualisation;
use App\Models\DataVizual;
use App\Models\Song;
use App\Models\User;
use App\Models\YoutubeContent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPageMusicList()
    {
        $songs = Song::all();
        return view('admin.home', compact('songs'));
    }

    public function getContentId()
    {
        $songs = YoutubeContent::all();
        return view('admin.contentId', compact('songs'));
    }

    public function getPageUsersList()
    {
        $users = User::query()->where('email', '!=', 'admin@admin.com')->get();
        return view('admin.user', compact('users'));
    }

    public function getPageRoyality()
    {
        $users = User::query()->where('email', '!=', 'admin@admin.com')->get();
        return view('admin.royality', compact('users'));
    }

    public function getPageMusicRoyality()
    {
        $users = User::query()->where('email', '!=', 'admin@admin.com')->get();
        return view('admin.royality', compact('users'));
    }

    public function albumAtwork($song_id, $which)
    {
        if ($which == 'song') {
            $song = Song::query()->where('id', $song_id)->get();
        } else {
            $song = YoutubeContent::query()->where('id', $song_id)->get();
        }
        return view('admin.albumAtwork', compact('song', 'which'));
    }

    public function deleteSong(Request $request)
    {
        $row = Song::query()->find($request->id);
        unlink(storage_path('app/public/uploads/cover_photos/' . $row['cover_name']));
        unlink(storage_path('app/public/uploads/music/' . $row['music_name']));
        $row->delete();
        return redirect('/admin');
    }

    public function deleteContentId(Request $request)
    {
        $row = YoutubeContent::query()->find($request->id);
        unlink(storage_path('app/public/uploads/files/' . $row['fileName']));
        $row->delete();
        return redirect('/content-id');
    }

    public function approveSong(Request $request)
    {
        if (Song::query()->where('id', $request->id)
            ->update(['status' => 'complete'])) {
            $row = Song::query()->find($request->id);
            unlink(storage_path('app/public/uploads/music/' . $row['music_name']));
            return response()->json(['message' => 'ok']);
        }
        return response()->json(['message' => 'not_ok']);
    }

    public function approveContentId(Request $request)
    {
        if (YoutubeContent::query()->where('id', $request->id)
            ->update(['status' => 'complete'])) {
            $row = YoutubeContent::query()->find($request->id);
            unlink(storage_path('app/public/uploads/files/' . $row['fileName']));
            return response()->json(['message' => 'ok']);
        }
        return response()->json(['message' => 'not_ok']);
    }

    public function addRoyality(Request $request)
    {
        $data = $request->all();
        $rules = ([
            'userId' => 'required',
            'service' => 'required',
            'file' => 'required',
        ]);
        $validator = \Illuminate\Support\Facades\Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        $data['file'] = file_get_contents($request->file('file'));
        if (DataVisualisation::query()->create($data)) {
            return redirect()->back()->with('alert', 'Updated!');
        } else {
            return response()->json(['message' => 'Something went wrong']);
        }
    }

    public function uploadContent(Request $request)
    {
        $data = $request->all();
        $rules = ([
            'userId' => 'required',
            'service' => 'required',
            'file' => 'required',
        ]);
        $validator = \Illuminate\Support\Facades\Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        $file = $request->file('file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $this->checkUploadedFileProperties($extension, $fileSize);
            $location = 'uploads';
            $file->move($location, $filename);
            $filepath = public_path($location . "/" . $filename);
            $file = fopen($filepath, "r");
            $importData_arr = array();
            $i = 0;
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading
            $j = 0;
            foreach ($importData_arr as $importData) {
                $j++;
                try {
                    DB::beginTransaction();
                    DataVizual::query()->create([
                        'userId' => $request->userId,
                        'service' => $request->service,
                        'reportingMonth' => $importData[1],
                        'trackName' => $importData[2],
                        'artistName' => $importData[3],
                        'transuctionMediaIsrc' => $importData[4],
                        'albumName' => $importData[5],
                        'transuctionMediaUpc' => $importData[6],
                        'country' => $importData[7],
                        'platform' => $importData[8],
                        'totalUnits' => $importData[9],
                        'netRevenue' => $importData[10],
                    ]);
                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollBack();
                }
            }
            return redirect()->back()->with("$j records successfully uploaded");
        } else {
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    public function sendEmail($email, $name)
    {
        $data = array(
            'email' => $email,
            'name' => $name,
            'subject' => 'Welcome Message',
        );
        Mail::send('welcomeEmail', $data, function ($message) use ($data) {
            $message->from('welcome@myapp.com');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
    }

    public function trackDownload($id)
    {
        $song = Song::query()->where('id', $id)->get();
        $filePath = public_path('storage/uploads/music/' . $song[0]['music_name']);
        $headers = ['Content-Type: audio/mpeg'];
        $fileName = $song[0]['music_original_name'];
        return response()->download($filePath, $fileName, $headers);
    }

    public function contentIdDownload($id)
    {
        $song = YoutubeContent::query()->where('id', $id)->get();
        $filePath = public_path('storage/uploads/files/' . $song[0]['fileName']);
        $headers = ['Content-Type: audio/mpeg'];
        $fileName = $song[0]['originalName'];
        return response()->download($filePath, $fileName, $headers);
    }

    public function addSmartLink(Request $request)
    {
        if (Song::query()->where('id', $request->id)
            ->update(['smart_link' => $request->link])) {
            return response()->json(['message' => 'ok']);
        }
    }

    public function addsmartlinkcontentId(Request $request)
    {
        if (YoutubeContent::query()->where('id', $request->id)
            ->update(['smart_link' => $request->link])) {
            return response()->json(['message' => 'ok']);
        }
    }
}
