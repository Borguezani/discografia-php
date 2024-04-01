<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::apiResource('albums', AlbumController::class);
    Route::apiResource('tracks', TrackController::class);
    Route::get('albums/{album}/tracks', [TrackController::class, 'index']);
});