<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $options;

    public $checked;

    public $text;

    public $src;

    public $labelcol;

    public function __construct($options = [], $checked = [], $src = '', $text = '', $labelcol='')
    {
        $this->options = $options;
        $this->checked = $checked;
        $this->text = $text;
        $this->src = $src;
        $this->labelcol = $labelcol;
    }

    public function isChecked($v) {
        return in_array($v, $this->checked);
    }

    public function setopt() {
        if(!empty($this->options)) {
            if(is_array($this->options)) {
                return $this->options;
            }
            $str = str_replace([',',';', '，',' '], ',', $this->options);
            $arr = array_map('trim', explode(',', $str));
            $result = [];
            if(!empty($arr)) {
                foreach($arr as $k => $v)
                {
                    $item = explode(':', $v);
                    if(count($item) > 1)
                    {
                        $result[$item[0]] = $item[1];
                    }
                    else {
                        $result[$k] = $item[0];
                    }
                }
            }
            return $result;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
