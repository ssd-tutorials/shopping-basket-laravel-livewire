<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shopping Basket with Laravel Livewire</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div id="app">
        <div class="py-2 px-3 bg-indigo-600">
            <div class="max-w-3xl mx-auto px-4 flex items-center relative">
                <div class="flex-auto">
                    <a href="/" class="text-white text-lg">Livewire shopping basket</a>
                </div>
                <div class="flex-shrink">

                    <div>
                        <button type="button" class="flex items-center focus:outline-none appearance-none">
                            <span class="inline-block text-white text-sm mr-2">0</span>
                            <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M4 2h16l-3 9H4a1 1 0 1 0 0 2h13v2H4a3 3 0 0 1 0-6h.33L3 5 2 2H0V0h3a1 1 0 0 1 1 1v1zm1 18a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm10 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="max-w-3xl mx-auto p-4">

            <div>
                <div class="block bg-gray-300 border border-gray-400 rounded shadow-sm mb-4 outline-none text-sm">
                    <ul>
                        <li class="flex p-4 border-b border-gray-400">
                            <div class="flex-grow">
                                Product name
                            </div>
                            <div class="flex items-center flex-shrink px-4">
                                <div class="cursor-pointer">
                                    <svg class="h-4 w-4 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm5-9v2H5V9h10z"/>
                                    </svg>
                                </div>
                                <div class="px-2">
                                    1
                                </div>
                                <div class="cursor-pointer">
                                    <svg class="h-4 w-4 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-shrink pr-4">
                                &pound;0.00
                            </div>
                            <div class="flex-shrink text-red-600 cursor-pointer">
                                Remove
                            </div>
                        </li>
                    </ul>
                    <div class="p-4 flex items-center">
                        <div class="flex-auto">
                            <strong>Total:</strong> &pound;0.00
                        </div>
                        <div class="flex-shrink">
                            <button type="button" class="py-2 px-3 bg-green-600 hover:bg-green-700 focus:bg-green-700 text-white rounded shadow-sm">
                                View basket
                            </button>
                            <button type="button" class="py-2 px-3 bg-indigo-600 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded shadow-sm">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @yield('body')
        </div>
    </div>
</body>
</html>
