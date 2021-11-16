<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $color;
    public $href;
    public $textColor;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $href,$textColor,$title)
    {
        $this->color = $color;
        $this->href = $href;
        $this->textColor=$textColor;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
