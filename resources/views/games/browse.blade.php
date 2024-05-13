<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-200 leading-tight">
            {{ __('Browse games') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 gap-4 ml-12 my-10 overflow-hidden">
        @foreach ($games as $game)
            <div class="flex flex-col items-center">
                    <h2 class=" font-semibold mb-2 text-center text-2xl">{{ $game->name }}</h2>
                    <a href="{{ route('games.show', $game) }}" >
                    <img class="w-56 h-80 object-cover rounded-lg select-none" src="{{ $game->image }}" alt="{{ $game->name }}" >
                    </a>
                    @if (Auth::user()->admin)
                        <form action="{{ route('games.destroy', $game) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </form>
                    @endif

            </div>
        @endforeach
    </div>
</x-app-layout>
