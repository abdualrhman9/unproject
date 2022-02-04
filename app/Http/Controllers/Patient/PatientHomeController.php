<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientHomeController extends Controller
{
    public function home(){
        return view('patient.home');
    }
}
