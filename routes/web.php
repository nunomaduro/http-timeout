<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{timeout}', function (string $timeout) {
    $now = microtime(true);

    sleep($timeout);

    return [
        'timeout' => $timeout,
        'slept-for' => microtime(true) - $now
    ];
});
