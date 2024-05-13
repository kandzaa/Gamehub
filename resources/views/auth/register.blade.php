<nav class="bg-neutral-950 border-b border-gray-700">
    <header class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-center ">
        @if (Route::has('login'))
            <nav class="space-x-4 ">
            @auth
                    <a href="{{ url('/home') }}" class="text-gray-300 hover:text-green-500"
                    >Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-green-500"
                    >Log in
                    </a>

                @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-300 hover:text-green-500"
                        >Register
                        </a>
                @endif
            @endauth
            </nav>
        @endif
    </header>
</nav>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
