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
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-400 hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
