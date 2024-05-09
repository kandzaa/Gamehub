<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ $game->name }}
        </h2>
    </x-slot>

    <div class="p-6 bg-zinc-900 text-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex items-start space-x-6">
            <img class="w-64 h-72 object-cover rounded-lg" src="{{ $game->image }}" alt="{{ $game->name }}">

            <div class="flex-1">
                <p class="mt-6 text-gray-300">{{ $game->description }}</p>

                <div class="mt-6 bg-neutral-950 p-6 rounded-lg overflow-auto" style="max-height: 600px;">
                    @foreach ($game->comments as $comment)
                        <div class="border-b border-gray-200 py-4">
                            <h3 class="font-bold text-gray-300">{{ $comment->user->name }}</h3>
                            <p class="text-gray-400">{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                </div>

                <form class="mt-6" method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $game->id }}">
                    <textarea class="w-full p-2 bg-gray-800 text-white border border-gray-600 rounded border-transparent focus:border-transparent focus:ring-0" name="comment"></textarea>
                    <button class="mt-2 px-4 py-2 bg-neutral-950 text-green-500 rounded hover:bg-neutral-900" type="submit">Add Comment</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
