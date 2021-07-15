<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-black border-b border-gray-200">
                    <form method="POST" action="{{ route('tweet') }}">
                        @csrf
                    <div class="flex">
                        <img class="rounded-full block h-20 w-auto fill-current text-gray-600" src="{{ asset('img/profile.png') }}">
                        <textarea id="text" name="body" class="ml-4 w-full txtArea" placeholder="What's new?" required></textarea>
                    </div>
                    <div class="mt-2 flex justify-end">
                            <button class="sendBtn" type="submit">
                                    Tweet
                            </button>
                    </div>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </form>
                    </div>
                </div>
                @foreach($posts as $post)
                <div class="p-6 bg-black border-b border-gray-200">
                    <div class="flex">
                        <img class="rounded-full block h-20 w-auto fill-current text-gray-600" src="{{ asset('img/profile.png') }}">
                        <div class="table w-full">
                            <div class="flex w-full">
                                    <p class="ml-5 font-extrabold w-full">{{ $post->user->name }}</p>
                                <div class="flex justify-end items-end w-full">
                                    <p class="ml-5 italic text-sm">{{ $post->created_at }}</p>
                                </div>
                            </div>
                            <p class="p-5"> {{ $post->body }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
