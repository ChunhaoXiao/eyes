<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Radio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $options;
    public $text;
    public $checked;
    public $col;
    public function __construct($text, $options = [], $checked='', $col='col-sm-auto')
    {
        $this->text = $text;
        $this->setOptions($options);
        $this->checked = $checked;
        $this->col = $col;
    }

    public function setOptions($options)
    {
        if(is_array($options))
        {
            $this->options = $options;
        }
        else 
        {
            $options = str_replace([',', ' ', '，'], ',', $options);
            $options = explode(',', $options);
            $options = array_map('trim', $options);
            $this->options = $options;
        }
    }

    public function isChecked($v)
    {
        return $this->checked == $v;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.radio');
    }
}
