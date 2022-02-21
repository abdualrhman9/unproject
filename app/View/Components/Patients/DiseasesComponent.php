<?php

namespace App\View\Components\Patients;

use App\Models\Disease;
use Illuminate\View\Component;

class DiseasesComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        $diseases = Disease::latest()->get();;
        return view('components.patients.diseases-component',compact('diseases'));
    }

}
