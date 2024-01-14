@props(['name'])

<li>
    <a
        href="{{route($name)}}"
        wire:navigate @class(['underline' => Route::currentRouteName() == $name, 'cursor-pointer hover:underline'])
    >
        {{Str::ucfirst($name)}}
    </a>
</li>
