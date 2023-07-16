<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', HomeController::class)->name('home');

/*Route::controller(CourseController::class)->group(function () {
    Route::get('/courses/', 'index')->name('courses.index');
    Route::get('/courses/create', 'create')->name('courses.create');
    Route::post('/courses/', 'store')->name('courses.store');
    Route::get('/courses/{course}', 'show')->name('courses.show');
    Route::get('/courses/{course}/edit', 'edit')->name('courses.edit');
    Route::put('/courses/{course}', 'update')->name('courses.update');
    Route::delete('/courses/{course}', 'destroy')->name('courses.destroy');
});*/

/***
 * It's the same that. It's a convention. Generate CRUD urls dinamically.
 * Also allow translating base url
 * parameters method is used for input parameters in functions show, edit, delete, that receives a course
 *  
 * */
Route::resource('asignaturas', CourseController::class)->parameters(['asignaturas' => 'course'])->names('courses');

/**
 * This is a way to define a route, is used only when the view has content static.
 */

Route::view('nosotros', 'ours')->name('ours');

Route::controller(ContactController::class)->group(function () {
    Route::get('contactanos', 'index')->name('contact.index');
    Route::post('contactanos', 'store')->name('contact.store');
});
