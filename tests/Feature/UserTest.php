<?php

namespace Tests\Feature;

use App\Models\Disease;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    public $doctor;
    public $patient;

    protected function setUp(): void
    {
        parent::setUp();
        $this->doctor = User::factory()->doctor()->create();
        $this->patient = User::factory()->patient()->create();
        Auth::guard()->login($this->patient);
    }

    /** @test */
    public function proof_setup() {
        $this->assertCount(2,User::all());
        $this->assertTrue($this->patient->role == 3);
        $this->assertTrue($this->doctor->role == 2);
        $this->assertCount(1,Disease::all());
        $this->assertTrue($this->patient->disease->name == Disease::first()->name);
    }

   /** @test */
   public function patient_my_select_doctor() {
       $this->withoutExceptionHandling();
       $this->post(route('patients.doctors.select'),$this->selectDoctorData());
       $this->assertTrue(auth()->user()->id == $this->patient->id);
       $this->assertTrue(auth()->user()->doctors->count() == 1);
       $this->assertTrue($this->doctor->patients->count() == 1);
   }



//    public function patient_my_select_doctor

   private function selectDoctorData() {
        return [
           'doctor_id'=>$this->doctor->id,
        ];
    }

}
