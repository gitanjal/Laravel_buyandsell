<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseLayout extends Component
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
        /*
        ***ASSIGNMENT***
        ***Task 1:We have to return the view for this component. Are we returning the view from the correct directory?
        */
        return view('views.base-layout');
    }
}
