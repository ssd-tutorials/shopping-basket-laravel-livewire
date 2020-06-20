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
                    <livewire:add-to-basket-button :product-id="$product->id" />
                </div>

            </div>
        </div>
    </div>
@endsection
