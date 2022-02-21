<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'disease_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>s
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function diseases() {
        return $this->belongsToMany(Disease::class);
    }

    public function doctors() {
        return $this->belongsToMany(User::class,'doctor_patient','doctor_id','patient_id');
    }


    public function patients() {
        return $this->belongsToMany(User::class,'doctor_patient','patient_id','doctor_id',);
    }

    public function followDoctor(User $doctor){
        if($this->doctors->count() > 0){
            // dd($this->doctors[0]);
            return $this->doctors[0]->id == $doctor->id;
        }else 
            return false;

    }

    public function hasCompleteProfile(){
        return $this->diseases->count() > 0 and $this->doctors->count() > 0;
    }

    public function hasDisease(Disease $disease) {
        return in_array($disease->id,$this->diseases->pluck('id')->toArray());
    }

}
