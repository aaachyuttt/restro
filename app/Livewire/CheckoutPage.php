<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Register - Restro')]
class CheckoutPage extends Component
{
    public function render()
    {
        return view('livewire.checkout-page');
    }
}
