<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
//Route::get('/',[TestController::class,'index'])->name('welcome');

Route::get('/', function () {
    return view('homepage');
});
Route::get('/homepage', [TestController::class, 'home'])->name('homepage');

Route::get('/aboutpage', [TestController::class, 'about'])->name('aboutpage');
Route::get('/biography', [TestController::class, 'biography'])->name('biography');
Route::get('/education', [TestController::class, 'education'])->name('education');
Route::get('/skills', [TestController::class, 'skills'])->name('skill');

Route::get('/contactpage', [TestController::class, 'contact'])->name('contactpage');

