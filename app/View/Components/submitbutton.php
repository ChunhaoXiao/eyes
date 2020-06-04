<?php

namespace App\View\Components;

use Illuminate\View\Component;

class submitbutton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $class;
    public $text;

    public function __construct($text = '提交', $class = 'btn-secondary')
    {
        $this->text = $text;
        $this->class = $class;
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
