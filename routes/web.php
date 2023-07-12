<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(CourseController::class)->group(function () {
    Route::get('/course/', 'index');
    Route::get('/course/create', 'create');
    Route::get('/course/{course}/{category?}', 'show');
});
