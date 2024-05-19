<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accomodation;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', [Accomodation::class, 'test']);

Route::get('/accomodations/all', [Accomodation::class, 'accomodations']);
Route::get('/accomodation/{id}', [Accomodation::class, 'accomodation']);

Route::post('/accomodation', [Accomodation::class, 'createAccomodation']);
Route::put('/accomodation/{id}', [Accomodation::class, 'updateAccomodation']);
Route::delete('/accomodation/{id}', [Accomodation::class, 'deleteAccomodation']);
