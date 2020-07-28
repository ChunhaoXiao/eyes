<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Submitbutton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $classname;
    public $text;

    public function __construct($text = '提交', $classname = 'btn-secondary')
    {
        //$this->text = $text;
        $this->classname = $classname;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.submitbutton');
    }
}
