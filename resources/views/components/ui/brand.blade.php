@props(['name'])

<a href="{{route('about')}}" wire:navigate class="text-bold text-xl">
    {{$name}}
</a>
