<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="text-red-500">
                    Something wrong...
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="/posts">
                @csrf

                <div>
                    <x-label for="title" value="Title" />

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus />

                    @if ($errors->has('title'))
                        <div class="text-red-500">
                            {{ $errors->first('title')}}
                        </div>
                    @endif
                </div>

                <div class="mt-4">
                    <x-label for="content" value="Content" />

                    <textarea
                        id="content"
                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="content"
                    >{{ old('content') }}</textarea>

                    @if ($errors->has('content'))
                        <div class="text-red-500">
                            {{ $errors->first('content')}}
                        </div>
                    @endif
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        Submit
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
