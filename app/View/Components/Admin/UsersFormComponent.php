<?php

namespace App\View\Components\Admin;

use App\Models\User;
use Illuminate\View\Component;

class UsersFormComponent extends Component
{
    public $method;
    public $action;
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method, $action,$user)
    {
        $this->method = $method;
        $this->action = $action;
        $this->user   = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.users-form-component');
    }
}
