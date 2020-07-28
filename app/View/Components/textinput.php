<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textinput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $text;

    public $labelcol;
    
    public function __construct($text, $labelcol = 'col-sm-auto')
    {
        $this->text = $text;
        $this->labelcol = $labelcol;
        //$this->value = $value;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.textinput');
    }
}
