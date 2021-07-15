<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg flex justify-center items-center">
                <img class="rounded-full ml-5 block h-20 w-auto fill-current text-gray-600" src="{{ asset('img/profile.png') }}">
                <div class="p-6 table w-full">
                    <p class="ml-5 font-extrabold">{{ Auth::user()->name }}</p>
                    <p class="ml-5 font-extrabold">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
