<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Browse games') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 gap-4 ml-12 my-10">
        @foreach ($games as $game)
            <div class="flex flex-col items-center">
                    <h2 class=" font-semibold mb-2 text-center text-2xl">{{ $game->name }}</h2>
                    <a href="{{ route('games.show', $game) }}" >
                    <img class="w-56 h-80 object-cover rounded-lg" src="{{ $game->image }}" alt="{{ $game->name }}" >
                    </a>
            </div>
        @endforeach
    </div>
</x-app-layout>
