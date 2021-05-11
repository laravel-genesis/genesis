<?php

namespace LaravelGenesis\Genesis\Http\Livewire\Fields;

use Illuminate\View\View;

class Input extends FormElement
{
    public function render()  : View
    {
        return view('genesis::fields.input', [
            'field' => $this,
        ]);
    }
}
