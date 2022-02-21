<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patients(){
        return $this->belongsTo(User::class,'patient_id');
    }

    // public function patients(){
    //     return $this->belongsTo(User::class,'patient_id','doctor_id');
    // }
}
