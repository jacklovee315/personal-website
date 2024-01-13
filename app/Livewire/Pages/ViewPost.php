<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ViewPost extends Component
{
    public Post|Model|null $post;

    public function mount(string $slug): void
    {
        $this->post = Post::query()->where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.pages.view-post');
    }
}
