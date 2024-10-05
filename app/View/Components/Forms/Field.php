<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Field extends Component
{
    private $label, $type;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $type)
    {
        //
        //dd($label);
        $this->label = $label;
        $this->type = $type;
        //$this->type = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.field', [
            'label' => $this->label,
            'type' => $this->type,
            //'type' => $this->name
        ]);
    }
}
