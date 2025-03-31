<?php

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

Route::get('', [HomeController::class, 'index'])->name('student.index');
Route::get('/create', [HomeController::class, 'create'])->name('student.create');
Route::post('/create', [HomeController::class, 'store'])->name('student.store');
Route::get('/edit/{student}', [HomeController::class, 'edit'])->name('student.edit');
Route::put('/update/{student}', [HomeController::class, 'update'])->name('student.update');
Route::get('/destroy/{student}', [HomeController::class, 'destroy'])->name('student.destroy');