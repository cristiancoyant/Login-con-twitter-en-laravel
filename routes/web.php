<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\TwitterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetdeleteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', HomeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [TweetdeleteController::class , 'logueado']
)->name('dashboard');


Route::get('/auth/twitter/redirect', [TwitterController::class, 'handleTwitterRedirect'])->name('login.twitter');
Route::get('/auth/twitter/callback', [TwitterController::class, 'handleTwitterCallback'])->name('callback.twitter');


