<button wire:click="toggle" type="button" class="flex items-center focus:outline-none appearance-none">
    @if ($this->qty)
        <span class="inline-block text-white text-sm mr-2">{{ $this->qty }}</span>
    @endif
    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
        <path d="M4 2h16l-3 9H4a1 1 0 1 0 0 2h13v2H4a3 3 0 0 1 0-6h.33L3 5 2 2H0V0h3a1 1 0 0 1 1 1v1zm1 18a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm10 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
    </svg>
</button>
