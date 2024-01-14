<div>
    <div class="flex justify-end mb-4">
        <input wire:model.live.debounce.350ms="search"
               type="text"
               class="py-1 px-2 border rounded-lg w-full sm:w-1/3"
               placeholder="Search..."
        >
    </div>

    <ul class="space-y-5">
        @if(count($this->posts))
            @foreach($this->posts as $post)
                <x-ui.post-card :post="$post"/>
            @endforeach
        @else
            <div class="flex justify-center p-20">
                No results
            </div>
        @endif
    </ul>

    <div class="my-8">
        {{ $this->posts->links(data: ['scrollTo' => false]) }}
    </div>
</div>
