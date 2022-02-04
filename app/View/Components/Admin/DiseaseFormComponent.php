<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class DiseaseFormComponent extends Component
{

    public $disease;
    public $method;
    public $action;
    public $sections;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($disease, $method,$action,$sections)
    {
        $this->disease = $disease;
        $this->action = $action;
        $this->method = $method;
        $this->sections = $sections;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.disease-form-component');
    }
}
