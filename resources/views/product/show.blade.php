@extends('app')

@section('body')
    <div class="p-4 bg-white rounded shadow-sm">
        <div class="flex flex-col md:flex-row">
            <div class="flex-shrink md:mr-6 pb-4 md:pb-0 mb-2 md:mb-0 border-b md:border-b-0 border-gray-300">
                <img
                    src="https://images.unsplash.com/photo-1590124675770-f88cbe638e06?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=311&q=80"
                    alt="Product"
                    class="rounded outline-none shadow-sm md:mt-2"
                >
            </div>
            <div class="flex-auto">
                <h1 class="text-4xl font-bold leading-tight">
                    {{ $product->name }}
                </h1>
                <h2 class="text-md font-semibold text-indigo-600 mb-3">Price: &pound;{{ $product->formatted_price }}</h2>
                <p class="mb-4 text-gray-600">
                    {{ $product->excerpt }}
                </p>

                <div>
                    <div class="inline-flex rounded shadow-sm">
                        <div class="relative flex-shrink">
                            <input
                                type="number"
                                min="1"
                                id="quantity"
                                class="block w-16 border border-gray-400 py-2 px-3 rounded-none rounded-l outline-none focus:border-gray-500 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            />
                        </div>
                        <button class="-ml-px relative inline-flex items-center px-4 py-2 border border-indigo-800 text-sm leading-5 font-medium rounded-r text-white bg-indigo-700 hover:bg-indigo-800 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M4 2h16l-3 9H4a1 1 0 1 0 0 2h13v2H4a3 3 0 0 1 0-6h.33L3 5 2 2H0V0h3a1 1 0 0 1 1 1v1zm1 18a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm10 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                            </svg>
                            <span class="ml-2">
                                Add to basket
                            </span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
