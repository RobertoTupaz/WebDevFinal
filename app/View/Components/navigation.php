<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navigation extends Component
{
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $arr;
    
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
