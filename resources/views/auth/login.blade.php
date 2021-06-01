<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Log in</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body id="scrollbar">

    @livewire('header')

    <div class="lg:mt-4 lg:p-0 p-5 pt-0 pb-12">
        <x-guest-layout>
            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>

                    </div>
                    <div class="flex flex-col mb-4 mt-7">
                        <a class="border border-gray-300 hover:bg-gray-100 active:bg-gray-200 rounded m-2 p-2 flex hover:underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ url('/google') }}">
                            <img class="w-7 ml-2" src="storage/images/Google.svg" alt="Google">
                            <span class="ml-4 py-1">{{ __('Log in with Google') }}</span>
                        </a>
                        <a class="m-2 p-2 border border-gray-300 hover:bg-gray-100 active:bg-gray-200 rounded flex hover:underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ url('/github') }}">
                            <img class="w-16 -ml-2.5" src="storage/images/Github.svg" alt="Github">
                            <span class="py-3">{{ __('Log in with Github') }}</span>
                        </a>
                    </div>
                </form>

            </x-jet-authentication-card>
        </x-guest-layout>
    </div>

    @livewire('footer')
    @livewireScripts
</body>

</html>