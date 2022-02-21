<?php

namespace App\View\Components\Patients;

use App\Models\Section;
use Illuminate\View\Component;

class SectionsComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $sections)
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
        return view('components.patients.sections-component');
    }
}
