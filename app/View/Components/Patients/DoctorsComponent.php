<?php

namespace App\View\Components\Patients;

use Illuminate\View\Component;

class DoctorsComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $doctors)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.patients.doctors-component');
    }
}
