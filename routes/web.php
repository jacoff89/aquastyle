<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Team;

Route::get('/', function () {
    $teams = Team::orderBy('id')->limit(10)->get();
    return view('main', compact('teams'));
});

Route::post('/contact/send', [ContactController::class, 'send']);
