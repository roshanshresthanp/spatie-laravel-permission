<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

use App\Models\Test;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     $photos = Test::latest()->get();
//     return view('welcome',compact('photos'));
// })->name('welcome');

Route::group(['prefix' => 'laravel-filemanager'], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/admin/login', [AdminLoginController::class,'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class,'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class,'logout'])->name('admin.logout');
//Admin Home page after login
Route::group(['middleware'=>'auth'], function() {
    Route::get('/admin/home', [TestController::class,'admin']);
});


Route::resource('test', TestController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
