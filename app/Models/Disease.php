<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
