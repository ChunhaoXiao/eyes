<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Services\FormDataService;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $options;
    public $source;
    public $label;
    public $selected;
    public $labelcol;
    public $selectedw;

    public function __construct($label="", $options = [], $selected = '', $source = '', $labelcol="", $selectedw=3)
    {
        $this->label = $label;
        $this->source = $source;
        $this->selected = $selected;
        $this->labelcol = $labelcol;
        $this->selectedw = $selectedw;
       // $this->options = $options;
        $this->setOptions($options);
    }

    protected function setOptions($options) {
        if(!empty($options)) {
            if(is_array($options))
            {
                return $this->options = $options;
            }
            $optionStr = str_replace([' ',',', '，'], ',', $options);
            $optionArr = array_map('trim', explode(',', $optionStr));
            $res = [];
            foreach($optionArr as $k => $v)
            {
                $item = explode(':', $v);
                if(count($item) == 1)
                {
                    $res[$k] = $item[0];
                }
                else {
                    $res[$item[0]] = $item[1];
                }
            }
            return $this->options = $res;
        }
        $this->getOptionsBySource();
    }

    public function getOptionsBySource() {
        
        if(empty($this->source))
        {
            return $this->options = [];
        }
        $service = new FormDataService();
        $data = $service->getModelData($this->source);
        
        return $this->options = $data;
        
    }

    public function isSelected($v)
    {
        if(is_array($this->selected)) {
            return in_array($v, $this->selected);
        }
        return $this->selected == $v;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
