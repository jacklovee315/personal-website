<div>
    <div class="space-y-4 my-6">
        <p class="font-medium text-3xl">{{$post->title}}</p>

        <p class="text-sm uppercase text-gray-500 font-normal">
            {{\Carbon\Carbon::parse($post->created_at)->format('jS F Y')}}
        </p>
    </div>

    <article class="prose prose-slate max-w-none prose-img:rounded-lg leading-8">
        {!! $post->body !!}
    </article>

    <div class="flex justify-center space-x-6 my-6">
        <a href="https://uk.linkedin.com/in/jack-love-340b30194?trk=people-guest_people_search-card" target="_blank">
            <x-bi-linkedin class="h-5 w-5"/>
        </a>

        <a href="https://github.com/jacklovee315" target="_blank">
            <x-bi-github class="h-5 w-5"/>
        </a>
    </div>
</div>
