<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @foreach($news as $article)
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h3 class="text-lg font-semibold">{{ $article->title }}</h3>
        <p>{{ $article->text }}</p>
        @if($article->image)
        <img src="{{ asset($article->image) }}" onerror="this.style.display='none'">
        @endif
        @if (Auth::user()->admin)
        <form action="{{ route('news.destroy', $article) }}" method="POST">
            @csrf
            @method('DELETE')
            <x-danger-button type="submit">{{ __('Delete') }}</x-danger-button>
        </form>
        @endif
    </div>
</div>
@endforeach

        </div>
    </div>

</x-app-layout>
