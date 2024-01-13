<?php

use App\Livewire\Pages\Post;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Post::class)
        ->assertStatus(200);
});
