<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List all posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                @foreach ($posts as $post)
                    <li>
                        <a href="/posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>

                        <form method="POST" action="/posts/{{ $post->id }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
