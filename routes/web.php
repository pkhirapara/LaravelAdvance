<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PayOrderControlelr;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/pay',[PayOrderControlelr::class, 'store']);

Route::get('/channels',[ChannelController::class, 'index']);

Route::get('/posts/create',[PostController::class, 'create']);
