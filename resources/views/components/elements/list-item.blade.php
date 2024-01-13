@props(['name'])

<li @class(['underline' => Route::currentRouteName() == $name, 'cursor-pointer hover:underline'])>
    <a href="{{route($name)}}" wire:navigate>
        {{Str::ucfirst($name)}}
    </a>
</li>
