<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - Track Your Parcel Anytime, Anywhere</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }
    </style>

</head>
<body x-data="{ sidebarOpen: true, activePage: 'dashboard' }" class="flex">
    <x-sidebar-layout />
    <div class="flex-1 flex flex-col overflow-hidden ml-96">
        <div class="flex-1 flex flex-col overflow-hidden ml-96 bg-gray-200">
            <x-header />
        </div>
        <main class="p-6">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
