<?php

use App\Livewire\Pages\Home;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Home::class)
        ->assertStatus(200);
});
