<?php

use Illuminate\Support\Facades\Route;


Route::livewire('/', 'data-corona')->name('corona.index');
Route::livewire('/sebaran-corona', 'covidall')->name('covid.index');

Route::get('/corona', 'CovidController@chart');
