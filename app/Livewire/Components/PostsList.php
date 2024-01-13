<?php

namespace App\Livewire\Components;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;

    public ?string $search = null;

    public function mount(): void
    {
        sleep(rand(1, 2));
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function placeholder()
    {
        return view('livewire.components.posts-list-placeholder');
    }

    public function render()
    {
        return view('livewire.components.posts-list', [
            'posts' => Post::query()
                           ->where('title', 'like', '%' . $this->search . '%')
                           ->visible()
                           ->simplePaginate(5),
        ]);
    }
}
