<div>
    @if ($this->visible)
        <div class="block bg-gray-300 border border-gray-400 rounded shadow-sm mb-4 outline-none text-sm">
            <ul>
                @forelse($this->products as $product)
                <li class="flex p-4 border-b border-gray-400">
                    <div class="flex-grow">
                        {{ $product->name }}
                    </div>
                    <div class="flex items-center flex-shrink px-4">
                        <div wire:click="decrease({{ $product->id }})" class="cursor-pointer">
                            <svg class="h-4 w-4 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm5-9v2H5V9h10z"/>
                            </svg>
                        </div>
                        <div class="px-2">
                            {{ $product->qty }}
                        </div>
                        <div wire:click="increase({{ $product->id }})" class="cursor-pointer">
                            <svg class="h-4 w-4 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-shrink pr-4">
                        &pound;{{ $product->formatted_price }}
                    </div>
                    <div wire:click="remove({{ $product->id }})" class="flex-shrink text-red-600 cursor-pointer">
                        Remove
                    </div>
                </li>
                @empty
                    <li class="flex p-4 border-b border-gray-400">
                        Your basket is empty.
                    </li>
                @endforelse
            </ul>
            <div class="p-4 flex items-center">
                <div class="flex-auto">
                    <strong>Total:</strong> &pound;{{ $this->total }}
                </div>
                <div class="flex-shrink">
                    <button type="button" class="py-2 px-3 bg-indigo-600 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded shadow-sm">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
