<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            #{{ $post->id }} {{ $post->title }}
        </h2>

        <a href="/posts/{{ $post->id }}/edit">Edit</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $post->content }}

            <hr class="my-8">

            <h3>Comments</h3>

            @foreach ($post->comments as $comment)
                {{ $comment }}
            @endforeach
        </div>
    </div>
</x-app-layout>
