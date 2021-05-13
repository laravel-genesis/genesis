<?php

namespace LaravelGenesis\Genesis\Livewire\Traits;

trait FormElement
{
    /**
     * The tailwind grid size
     *
     * @var string
     */
    public $rowSize = 1;

    public function rowSize(int $size)
    {
        $this->rowSize = $size;

        return $this;
    }
}
