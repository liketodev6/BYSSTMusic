<?php

namespace App\Http\Controllers;

use App\Models\DataVisualisation;
use App\Models\DataVizual;
use App\Models\Ringbacktone;
use App\Models\Song;
use App\Models\YoutubeContent;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MusicMenuController extends Controller
{
    public function musicIndex()
    {
        $musics['songs'] = Song::all();
        $musics['youtubeContent'] = YoutubeContent::all();
        return view('music', compact('musics'));
    }

    public function uploadNow()
    {
        return view('uploadTypes');
    }

    public function getPageRoyality()
    {
//        $data = DataVizual::query()->where('userId', Auth::user()->id)->first();
        $data['bestPerformingStores'] = DataVizual::query()->groupBy('platform')
            ->select('platform', DB::raw('count(id) as total'))
            ->get();
        $data['lineChart'] = DataVizual::query()->groupBy('reportingMonth')
            ->select('reportingMonth', DB::raw('sum(totalUnits) as totalSum'))
            ->orderBy('reportingMonth', 'ASC')
            ->get();
        $data['bestPerformingCountries'] = DataVizual::query()->groupBy('country')
            ->select('country', DB::raw('count(id) as total'))
            ->orderBy('total', 'DESC')
            ->take(10)->get();
        $data['allData'] = DataVizual::all();
        return view('royality', compact('data'));
    }
}


