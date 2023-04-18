<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/games');
});


Route::resource('/games', GameController::class);
