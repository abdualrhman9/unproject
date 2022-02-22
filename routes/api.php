<?php

use App\Http\Controllers\Patient\DiseaseController as PatientDiseaseController;
use App\Http\Controllers\Patient\DoctorController as PatientDoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    dd('jj');
    return $request->user();
});

Route::middleware(['auth:sanctum'])->prefix('patients')->name('patients.')->group(function(){
    Route::post('diseases/select',[PatientDiseaseController::class,'select'])->name('diseases.select');
    Route::post('doctors/select',[PatientDoctorController::class,'select'])->name('doctors.select');
});