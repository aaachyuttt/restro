<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Menu - Restro')]
class CartPage extends Component
{
    public string $pageTitle = 'Cart';
    public function render()
    {
        return view('livewire.cart-page');
    }
}
