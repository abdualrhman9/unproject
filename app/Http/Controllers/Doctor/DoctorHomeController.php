<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorHomeController extends Controller
{
    public function home(){
        return 'doctor';
    }
}
