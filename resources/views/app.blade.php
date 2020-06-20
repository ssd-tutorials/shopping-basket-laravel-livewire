<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shopping Basket with Laravel Livewire</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-200">
    <div id="app">
        <div class="py-2 px-3 bg-indigo-600">
            <div class="max-w-3xl mx-auto px-4 flex items-center relative">
                <div class="flex-auto">
                    <a href="/" class="text-white text-lg">Livewire shopping basket</a>
                </div>
                <div class="flex-shrink">
                    <livewire:basket-button />
                </div>
            </div>
        </div>
        <div class="max-w-3xl mx-auto p-4">
            <livewire:basket />
            @yield('body')
        </div>
    </div>
    @livewireScripts
</body>
</html>
