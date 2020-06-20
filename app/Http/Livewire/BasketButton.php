<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class BasketButton extends Component
{
    /**
     * @var int
     */
    public $qty = 0;

    /**
     * @var array
     */
    protected $listeners = ['basketUpdated' => 'update'];

    /**
     * Mount component.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->update();
    }

    /**
     * Update quantity.
     *
     * @return void
     */
    public function update(): void
    {
        $this->qty = array_sum(basket()->all());
    }

    /**
     * Toggle basket preview.
     *
     * @return void
     */
    public function toggle(): void
    {
        $this->emit('toggleBasket');
    }

    /**
     * Render component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('livewire.basket-button');
    }
}
