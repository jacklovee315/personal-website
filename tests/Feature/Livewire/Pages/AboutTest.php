<?php

use App\Livewire\Pages\About;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(About::class)
        ->assertStatus(200);
});
