<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelacionController;





Route::get('/', [RelacionController::class, 'index']);
