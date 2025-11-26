<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Models\Team;
use Illuminate\Support\Facades\Cookie;

Route::get('/', function () {
    $teams = Team::orderBy('id')->limit(10)->get();
    return view('main', compact('teams'));
})->name('home');

Route::post('/contact/send', [ContactController::class, 'send']);

Route::get('/{page}', [PageController::class, 'index'])
    ->where('page', '[A-Za-z0-9\-_]+')->name('page');

Route::post('/accept-cookies', function () {
    Cookie::queue('cookies_accepted', true, 60 * 24 * 365);
    return response()->json(['status' => 'ok']);
})->name('accept-cookies');
