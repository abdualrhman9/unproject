<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PatientHomeController extends Controller
{
    public function home(){
        $user = Auth::user();
        return view('patient.home',compact('user'));
    }
}
