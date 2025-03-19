<?php

use App\Http\Controllers\RandomDataController;
use Illuminate\Support\Facades\Route;

Route::get('random-data/generate/', [RandomDataController::class, 'generate']);
