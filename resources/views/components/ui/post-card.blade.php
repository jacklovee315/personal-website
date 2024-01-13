@props(['post'])

<li wire:key="{{$post->getKey()}}">
    <a href="{{route('view-post', ['slug' => $post->slug])}}"
       class="border p-6 rounded-lg flex justify-between hover:shadow hover:cursor-pointer items-center">
        <div class="space-y-3">
            <p class="text-sm uppercase text-gray-500 font-normal">
                {{\Carbon\Carbon::parse($post->created_at)->format('jS F Y')}}
            </p>
            <p class="font-medium">{{$post->title}}</p>
        </div>

        <div>
            <x-ui.badge label="alpinejsjs"/>
        </div>
    </a>
</li>
