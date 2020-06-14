@extends('app')

@section('body')
    <h1 class="text-2xl font-bold mb-4">List of products</h1>
    <div class="bg-white shadow overflow-hidden sm:rounded-md text-md">
        <ul>
            @foreach($products as $product)
                <li class="border-b border-gray-300 last:border-b-0">
                    <a
                        class="flex items-center px-4 py-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200"
                        href="/product/{{ $product->id }}"
                    >
                        <div class="flex-auto">
                            {{ $product->name }}
                            <span class="ml-4 text-gray-500 text-sm">&pound;{{ $product->formatted_price }}</span>
                        </div>
                        <div class="flex-shrink">
                            <svg class="h-5 w-5 -mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
