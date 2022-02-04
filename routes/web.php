<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Doctor\DoctorHomeController;
use App\Http\Controllers\Patient\PatientHomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','can:control-dashboard'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('home',[AdminHomeController::class,'home'])->name('home');
    Route::resource('users',UserController::class);
    Route::resource('sections',SectionController::class);
    Route::resource('diseases',DiseaseController::class);
    Route::get('home',[AdminHomeController::class,'home'])->name('home');
});


Route::middleware(['auth','can:control-doctor-dashboard'])->prefix('doctor')->name('doctor.')->group(function(){
    Route::get('home',[DoctorHomeController::class,'home'])->name('home');
});

Route::middleware(['auth','can:control-patient-dashboard'])->prefix('patient')->name('patient.')->group(function(){
    Route::get('home',[PatientHomeController::class,'home'])->name('home');
});

