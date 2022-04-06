<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomePage::class,'index'])->name('home');
Route::get('/messages',function (){
    return view('messages');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Auth::routes();
//Route::resource('courses',[CoursesController::class,'index']);
Route::controller(Dashboard::class)->group(function (){
    Route::get('dashboard','index')->name('dashboard');

});

Route::controller(CoursesController::class)->group(function (){
    Route::get('courses.create','create')->name('courses.create');
    Route::get('courses.show','show')->name('courses.show');
    Route::get('courses.store','store')->name('courses.store');
    Route::get('courses.update','update')->name('courses.update');
    Route::patch('courses.edit','edit')->name('courses.edit');
    Route::delete('courses.destroy','destroy')->name('courses.destroy');
});

Route::controller(SkillsController::class)->group(function (){
    Route::get('skills.create','create')->name('skills.create');
    Route::get('skills.show','show')->name('skills.show');
    Route::get('skills.store','store')->name('skills.store');
    Route::patch('skills.update','update')->name('skills.update');
    Route::patch('skills.edit','edit')->name('skills.edit');
    Route::delete('skills.destroy','destroy')->name('skills.destroy');
});

Route::controller(MessagesController::class)->group(function(){
    Route::get('message.show','show')->name('message.show');
    Route::delete('message.destroy','destroy')->name('message.destroy');
});

