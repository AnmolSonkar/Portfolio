<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projects</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
  <script src="{{ mix('js/app.js') }}" defer></script>
  @livewireStyles
</head>

<body id="scrollbar">
  <x-guest-layout>
    @livewire('header')
    @livewire('mobile-projects-content')
    @livewire('desktop-projects-content')
    @livewire('footer')
  </x-guest-layout>


  @livewireScripts
</body>

</html>