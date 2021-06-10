<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a blog</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body id="scrollbar" style="background-color: #f2f2f2;">

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

                <div>
                    <form method="POST" action="add">
                        @csrf
                        <x-jet-label for=" heading" value="{{ __('Heading') }}" />
                        <x-jet-input id="heading" class="block mt-1 w-full" type="text" name="heading" required
                            autofocus autocomplete="heading" />


                        <div class="mt-4">
                            <x-jet-label for="paragraph" value="{{ __('Paragraph') }}" />
                            <x-jet-input id="paragraph" class="block mt-1 w-full" type="text" name="paragraph" required
                                autofocus autocomplete="paragraph" />
                        </div>

                        <x-jet-button class="mt-4">
                            {{ __('Add') }}
                        </x-jet-button>

                    </form>
                </div>

            </x-jet-authentication-card>
        </x-guest-layout>
    </div>
    @livewire('footer')
    @livewireScripts

</body>

</html>