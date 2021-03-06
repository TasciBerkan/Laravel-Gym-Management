<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home')->name (name:'anasayfa');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name(name:'aboutus');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/test/{id}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name(name:'test');

//Admin
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name(name:'adminhome');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
