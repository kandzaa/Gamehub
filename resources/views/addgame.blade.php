<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Add game') }}
        </h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
            <a href="/addnews">
            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-green-500 uppercase tracking-widest hover:text-green-100   focus:outline-none focus:ring-0 transition ease-in-out duration-150" href="/addnews">Add news</button>
            </a>
            <a href="/addgame">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-green-500 uppercase tracking-widest hover:text-green-100   focus:outline-none focus:ring-0 transition ease-in-out duration-150" href="/addgame">Add game</button>
                </a>
                <a href="/changeabout">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-green-500 uppercase tracking-widest hover:text-green-100   focus:outline-none focus:ring-0 transition ease-in-out duration-150" href="/changeabout">Change about</button>
                    </a>
</div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('games.store') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name" :value="__('Game Name')" >
                    <input placeholder="Game title" id="name" class="w-full p-2 bg-gray-800 text-white border border-gray-600 rounded border-transparent focus:border-transparent focus:ring-0 resize-none"" type="text" name="name" required autofocus />
                </div>

                <div class="mt-4">
                    <label for="image" :value="__('Game Image')" >
                    <input  id="image" class="w-1/3 p-2 bg-gray-800 text-white border border-gray-600 rounded border-transparent focus:border-transparent focus:ring-0 resize-none" type="file" name="image" required />
                </div>

                <div class="mt-4">
                    <label for="description" :value="__('Game Description')" >
                    <textarea placeholder="Game description" id="description" class="w-full p-2 bg-gray-800 text-white border border-gray-600 rounded border-transparent focus:border-transparent focus:ring-0 resize-none" name="description" required></textarea>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-green-500 uppercase tracking-widest hover:text-green-100   focus:outline-none focus:ring-0 transition ease-in-out duration-150">
                        {{ __('Add Game') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
