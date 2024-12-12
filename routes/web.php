<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/test-for-web', function () {
    return response()->json(['message' => 'This is a test.']);
});

require __DIR__.'/auth.php';
