<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $arraynavbar = config('arraynavbar');
    $arrayfooter1 = config('arrayfooter1');
    $arrayfooter2 = config('arrayfooter2');
    $arrayfooter3 = config('arrayfooter3');
    $arrayfooter4 = config('arrayfooter4');
    $arraycard = config('arraycard');
    $arraymainbar = config('arraymainbar');

    $data = [
        'arraynavbar' => $arraynavbar,
        'arrayfooter1' => $arrayfooter1,
        'arrayfooter2' => $arrayfooter2,
        'arrayfooter3' => $arrayfooter3,
        'arrayfooter4' => $arrayfooter4,
        'arraycard' => $arraycard,
        'arraymainbar' => $arraymainbar,

    ];
    return view('guest.template.home', $data);
});

Route::get('/{id}', function ($id) {
    $arraynavbar = config('arraynavbar');
    $arrayfooter1 = config('arrayfooter1');
    $arrayfooter2 = config('arrayfooter2');
    $arrayfooter3 = config('arrayfooter3');
    $arrayfooter4 = config('arrayfooter4');
    $arraycard = config('arraycard');
    $arraymainbar = config('arraymainbar');

    $data = [
        'arraynavbar' => $arraynavbar,
        'arrayfooter1' => $arrayfooter1,
        'arrayfooter2' => $arrayfooter2,
        'arrayfooter3' => $arrayfooter3,
        'arrayfooter4' => $arrayfooter4,
        'arraycard' => $arraycard,
        'arraymainbar' => $arraymainbar,

    ];

    // ESTRAIAMO DALL'ARRAY L'ELEMENTO CON ID RICHIESTO
    $arraycard = collect(config('arraycard'));
    $selectedComics = $arraycard->where('id', $id);
    if ($selectedComics->count() === 1) {
        $selectedComic = array_values($selectedComics->all())[0];
    } else {
        abort(404);
    };
    return view('guest.template.comic', ['product' => $selectedComic], $data);
});
