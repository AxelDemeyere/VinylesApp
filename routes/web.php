<?php

use App\Models\Vinyle;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/vinyles/', function () {
    $vinyles = Vinyle::all();
    return view('vinyles', ['vinyles' => $vinyles]);
});

Route::get('/vinyles/{id}', function ($id) {
    $vinyles = Vinyle::all();
    $vinyle = Arr::first($vinyles, fn($vinyle) => $vinyle['id'] == $id);
    return view('vinyle', [ 'vinyle' => $vinyle ] );
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/*', function () {
    return view('404');
});
