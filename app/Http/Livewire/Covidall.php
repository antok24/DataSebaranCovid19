<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class Covidall extends Component
{
    
    public function render()
    {
        $provinsi = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $indonesia = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        $positif = collect(Http::get('https://api.kawalcorona.com/positif')->json());
        $sembuh = collect(Http::get('https://api.kawalcorona.com/sembuh')->json());
        $meninggal = collect(Http::get('https://api.kawalcorona.com/meninggal')->json());
        $global = collect(Http::get('https://api.kawalcorona.com/')->json());
        
        $tgl = Carbon::now()->format('d-m-Y');
        $waktu = Carbon::now()->format('H:m:m');


        return view('livewire.covidall', [
            'provinsi' => $provinsi,
            'indonesia' => $indonesia,
            'positif' => $positif,
            'sembuh' => $sembuh,
            'meninggal' => $meninggal,
            'global' => $global,
            'tgl' => $tgl,
            'waktu' => $waktu,
        ]);
    }
}
