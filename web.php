<?php

use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudyController::class,'form']);
Route::post('/handler', [StudyController::class,'handler']);
