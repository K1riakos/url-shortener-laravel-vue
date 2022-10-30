<?php

use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('index');
})->name('index');

Route::get('/{slug}', [UrlController::class, 'redirect'])
  ->where(['slug' => '[a-z0-9]+'])
  ->middleware('slug.validator');

Route::post('/', [UrlController::class, 'store']);
