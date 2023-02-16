<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dikregController;
use App\Http\Controllers\pletonController;
use App\Http\Controllers\serdikController;
use App\Models\pleton;

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

Route::get('/Serdik', [serdikController::class, 'index'])->middleware('auth')->name('Serdik');
Route::post('/Serdik', [serdikController::class, 'store'])->middleware('auth')->name('Serdik');
Route::post('/update/{id}', [serdikController::class, 'update'])->middleware('auth');


Route::get('/Pleton', [pletonController::class, 'index'])->middleware('auth')->name('pleton');