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
</div>
