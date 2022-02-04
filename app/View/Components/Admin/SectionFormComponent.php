<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class SectionFormComponent extends Component
{

    public $method;
    public $action;
    public $section;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method, $action,$section)
    {
        $this->method = $method;
        $this->action = $action;
        $this->section   = $section;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.section-form-component');
    }
}
