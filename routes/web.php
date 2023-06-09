<?php

use App\Http\Controllers\LaptopInformationController;
use App\Http\Controllers\ProfileController; 
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

Route::get('/', [LaptopInformationController::class, 'indexLandingPage']);

Route::get('/editdata', function () {return view('editdata'); })->name('editdata');

Route::get('/addnewdata', function () {
    return view('addnewdata');
})->name('addnewdata');

Route::post('/insertdata', 'DataController@insert')->name('insertdata');

Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::post('/add_laptop_information', [App\Http\Controllers\LaptopInformationController::class, 'store'])->name('add_laptop_information');

Route::get('/laptop/details/{item}', [LaptopInformationController::class, 'details'])->name('laptop.details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/editdata', function () {return view('editdata');});
    Route::get('dashboard', function() {return view('dashboard');});
});

require __DIR__.'/auth.php';