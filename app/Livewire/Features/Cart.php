<?php

namespace App\Livewire\Features;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Livewire\Component;

class Cart extends Component
{
    public $cart_items = [];
    public $grand_total;

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }
    public function render()
    {
        return view('livewire.features.cart');
    }
    public function increaseQty($product_id)
    {
        $this->cart_items = CartManagement::incrementItemQuantityInCart($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }
    public function decreaseQty($product_id)
    {
        $this->cart_items = CartManagement::decrementItemQuantityInCart($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }
    public function removeItem($product_id)
    {
        $this->cart_items = CartManagement::removeItemFromCart($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->dispatch('update-cart-count', cart_total: count($this->cart_items))->to(Navbar::class);
    }
}
