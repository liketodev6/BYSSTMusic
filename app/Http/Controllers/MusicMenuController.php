<?php

namespace App\Http\Controllers;

use App\Models\DataVisualisation;
use App\Models\Ringbacktone;
use App\Models\YoutubeContent;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusicMenuController extends Controller
{
    public function musicIndex()
    {
        $musics['ringbacktone'] = Ringbacktone::all();
        $musics['youtubeContent'] = YoutubeContent::all();
        return view('music', compact('musics'));
    }

    public function uploadNow()
    {
        return view('uploadTypes');
    }

    public function getPageRoyality()
    {
        $data = null;
        $data = DataVisualisation::query()->where('userId', Auth::user()->id)->first();
        if (!is_null($data)) {
            file_put_contents('tmp.csv', $data['file']);
            $data['details'] = array_map('str_getcsv', file('tmp.csv'));
            unlink('tmp.csv');
        }
        return view('royality', compact('data'));
    }
}


