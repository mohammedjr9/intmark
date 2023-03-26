<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\intmarkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RowController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/dashboard')->middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('Category',CategoryController::class);
    Route::post('Category/service/{id}',[CategoryController::class,'service'])->name('service');
    Route::resource('Data',RowController::class);
    Route::resource('Project',ProjectController::class);
    Route::resource('employees',EmployeeController::class);
    Route::resource('ContactUs',ContactUsController::class)->except(['show','edit','update','store',
        'create'])->middleware('read');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
Route::prefix('Intmark')->group(function () {
    Route::get('index' , [intmarkController::class , 'index'])->name('index');
    Route::get('services' , [intmarkController::class , 'services'])->name('services');
    Route::get('workUs' , [intmarkController::class , 'workUs'])->name('workUs');
    Route::get('last' , [intmarkController::class , 'last'])->name('last');
    Route::get('form' , [intmarkController::class , 'form'])->name('form');
    Route::post('contactus' , [intmarkController::class , 'contactus'])->name('contactus');
});
