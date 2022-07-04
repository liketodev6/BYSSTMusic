<?php

namespace App\Http\Controllers;

use App\Models\Ringbacktone;
use App\Models\Song;
use App\Models\YoutubeContent;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use function GuzzleHttp\Promise\all;

class MusicController extends Controller
{
    public function indexRingbacktone()
    {
        return view('uploadRingbacktone');
    }

    public function indexYoutube()
    {
        return view('uploadYoutubeContentId');
    }

    public function distributeAudio()
    {
        return view('uploadCover');
    }

    public function uploadRingbacktone(Request $request)
    {
        $data = $request->all();
        $name = '';
        $original_name = '';
        if ($request->hasFile('file')) {
            ini_set('memory_limit', '256M');
            $uniqueid = uniqid();
            $original_name = $request->file('file')->getClientOriginalName();
            $size = $request->file('file')->getSize();
            $extension = $request->file('file')->getClientOriginalExtension();
            $name = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            url('/storage/uploads/files/' . $name);
            $request->file('file')->storeAs('public/uploads/files/', $name);
        }
        $data['fileName'] = $name;
        $data['originalName'] = $original_name;
        unset($data['file']);
        Ringbacktone::query()->create($data);
        return redirect()->route('music');
    }

    public function uploadYoutubeContent(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'songTitle' => 'required',
            'labelName' => 'required',
            'artistName' => 'required',
            "publisher" => 'required',
            'file' => 'required'
        ]);

        $name = '';
        $original_name = '';
        if ($request->hasFile('file')) {
            ini_set('memory_limit', '256M');
            $uniqueid = uniqid();
            $original_name = $request->file('file')->getClientOriginalName();
            $size = $request->file('file')->getSize();
            $extension = $request->file('file')->getClientOriginalExtension();
            $name = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            url('/storage/uploads/files/' . $name);
            $request->file('file')->storeAs('public/uploads/files/', $name);
        }
        $data['fileName'] = $name;
        $data['originalName'] = $original_name;
        unset($data['file']);
        YoutubeContent::query()->create($data);
        return redirect()->route('music');
    }

    public function uploadSong(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'release_title' => 'required',
            'cover_upload' => 'required|image|mimes:jpeg,png,jpg|dimensions:max_width=3000,max_height=3000',
            'music_upload' => 'required|mimes:mp3,wav',
            "copyright_holder" => 'required',
            'copyright_year' => 'required',
            'primary_genre' => 'required',
            'language' => 'required',
            'record_label' => 'required',
            'record_artist' => 'required',
            'lyricist' => 'required',
            'music_composer' => 'required',
            'music_publisher' => 'required'
        ]);

        if ($request->hasFile('cover_upload')) {
            ini_set('memory_limit', '256M');
            $uniqueid = uniqid();
            $cover_original_name = $request->file('cover_upload')->getClientOriginalName();
            $size = $request->file('cover_upload')->getSize();
            $extension = $request->file('cover_upload')->getClientOriginalExtension();
            $cover_name = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            url('/storage/uploads/cover_photos/' . $cover_name);
            $request->file('cover_upload')->storeAs('public/uploads/cover_photos/', $cover_name);

            $data['cover_name'] = $cover_name;
            $data['cover_original_name'] = $cover_original_name;
        }
        if ($request->hasFile('music_upload')) {
            ini_set('memory_limit', '256M');
            $uniqueid = uniqid();
            $original_name = $request->file('music_upload')->getClientOriginalName();
            $size = $request->file('music_upload')->getSize();
            $extension = $request->file('music_upload')->getClientOriginalExtension();
            $name = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            url('/storage/uploads/music/' . $name);
            $request->file('music_upload')->storeAs('public/uploads/music/', $name);

            $data['music_name'] = $name;
            $data['music_format'] = $extension;
            $data['music_original_name'] = $original_name;
        }
        if ($request->has('inlineRadioOptions')) {
            $data['inlineRadioOptions'] = implode(',', $data['inlineRadioOptions']);
        }
        unset($data['cover_upload']);
        unset($data['music_upload']);
        if (Song::query()->create($data)) {
            return redirect('distribute-audio');
        }
        return response()->json(['message' => 'fails']);
    }
}
