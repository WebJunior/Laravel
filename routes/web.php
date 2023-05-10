<?php

use App\Http\Controllers\DemoController;

Route::get('', function () {
    return view('welcome');
});

Route::get('/tag', [DemoController::class, 'tag']);
Route::get('/blog', [DemoController::class, 'blog']);
Route::get('/category', [DemoController::class, 'category']);
