<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dikregController;

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

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/', [loginController::class, 'index'])->middleware('guest');
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::get('/logout', [loginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/Home', [homeController::class, 'index'])->middleware('auth')->name('Home');

Route::get('/Dikreg', [dikregController::class, 'dikreg'])->name('Dikreg')->middleware('auth');
Route::post('/Dikreg', [dikregController::class, 'store'])->middleware('auth');
