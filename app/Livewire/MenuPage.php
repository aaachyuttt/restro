<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Menu - Restro')]
class MenuPage extends Component
{
    public string $pageTitle = 'Menu';
    public function render()
    {
        return view('livewire.menu-page');
    }
}
