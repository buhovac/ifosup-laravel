<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});

Route:: get('/calcul/{nombre1}/{nombre2}', function ($nombre1, $nombre2) {
    return view('calcul', ['nombre1' => $nombre1, 'nombre2' => $nombre2]);
});

Route::get('/bienvenue/{langue?}', function ($langue = null) {
    return view('bienvenue', ['langue' => $langue]);
});

Route::redirect('/ici', '/hello');
