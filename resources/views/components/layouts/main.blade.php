<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS441 - Songs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ url('/images/bg1.png') }}');">
    <x-layouts.nav-bar></x-layouts.nav-bar>
    {{ $slot }}
</body>
</html>
