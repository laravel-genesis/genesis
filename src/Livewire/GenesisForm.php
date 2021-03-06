<?php

namespace LaravelGenesis\Genesis\Livewire;

use Livewire\Component;

abstract class GenesisForm extends Component
{
    abstract protected function fields();

    abstract protected function save();

    public function getFormElementsProperty()
    {
        return $this->fields();
    }

    public function render()
    {
        return view('genesis::general.form_container');
    }
}
