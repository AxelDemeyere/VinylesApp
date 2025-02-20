<?php

use App\Models\Vinyle;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/api/vinyle', function () {
    return Vinyle::all();
});

Route::get('/vinyles/', function () {
    $vinyles = Vinyle::all();
    return view('vinyles', ['vinyles' => $vinyles]);
});

Route::get('/vinyles/{id}', function ($id) {
    $vinyle = Vinyle::find($id);
    return view('vinyle', [ 'vinyle' => $vinyle ] );
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/*', function () {
    return view('404');
});
