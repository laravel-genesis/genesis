<?php

namespace LaravelGenesis\Genesis\Tests\Fixtures;

use Illuminate\Database\Eloquent\Builder;
use LaravelGenesis\Genesis\Livewire\GenesisResource;

class UserResource extends GenesisResource
{
    public function query() : Builder
    {
        return User::query();
    }

    public function getRowsProperty() : array
    {
        return [
            'ID',
            'Name',
            'Email',
        ];
    }
}
