<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
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





//Frontend route
Route::get('/', function () {
    return view('frontend.homepage');
})->name('home');
Route::get('/aboutus', function () {
    return view('frontend.aboutuspage');
});
Route::get('/contact', function () {
    return view('frontend.contactpage');
});
Route::get('/events', function () {
    return view('frontend.eventspage');
});
Route::get('/gallery', function () {
    return view('frontend.gallerypage');
});
Route::get('/notices', function () {
    return view('frontend.noticespage');
});
Route::get('/teachers', function () {
    return view('frontend.teacherspage');
});



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin route
Route::group(['prefix' => 'admin'], function (){
    Route::group(['middleware'=> 'admin.guest'], function (){
        Route::view('login',   'admin.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');
    });
    Route::group(['middleware' => 'admin.auth'], function (){
        Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
        Route::post('logout', [App\Http\Controllers\AdminController::class,'login'])->name('admin.logout');
    });
    Route::group(['middleware' => 'admin.auth'], function (){
        Route::resource('teacher', TeacherController::class);
        Route::resource('student', StudentController::class);
        Route::resource('event', StudentController::class);
    });
    
});