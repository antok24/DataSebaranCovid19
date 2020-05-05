<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;

class CovidController extends Controller
{
    public function chart()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $labels = $suspects->flatten(1)->pluck('Provinsi');
        $data = $suspects->flatten(1)->pluck('Kasus_Posi');
        $color = $labels->map(function($item){
            return $rand_color = '#' . substr(md5(mt_rand()),0,6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'pie', $data)->backgroundColor($color);

        return view('corona', [
            'chart' => $chart,
        ]);
    }
}
