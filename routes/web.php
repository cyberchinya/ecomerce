<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeComponent::class);
