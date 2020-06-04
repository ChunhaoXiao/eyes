<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Jiwangshi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $fields;

    public function __construct($fields = [])
    {
        $this->fields = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.jiwangshi');
    }
}
