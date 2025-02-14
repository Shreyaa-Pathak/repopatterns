<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/token', function () {
    return csrf_token(); 
});


Route::get('/', [CVController::class, 'index'])->name('cv.index');
Route::get('/cv/create', [CVController::class, 'create'])->name('cv.create');
Route::post('/cv', [CVController::class, 'store'])->name('cv.store');
Route::get('/cv/{id}', [CVController::class, 'show'])->name('cv.show');
Route::get('/cv/{id}/edit', [CVController::class, 'edit'])->name('cv.edit');
Route::patch('/cv/{id}', [CVController::class, 'update'])->name('cv.update');
Route::delete('/cv/{id}', [CVController::class, 'destroy'])->name('cv.destroy');
