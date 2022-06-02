<?php

namespace App\Http\Controllers;

use App\Models\DataVisualisation;
use App\Models\Song;
use App\Models\User;
use App\Models\YoutubeContent;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
