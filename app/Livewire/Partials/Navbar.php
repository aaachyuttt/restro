<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\WebsiteSetting;
use App\Helpers\CartManagement;

class Navbar extends Component
{
    public $logo1;
    public $opening_time;
    public $social_media = [
        'facebook' => '',
        'twitter' => '',
        'instagram' => '',
        'linkedin' => '',
    ];
    public $cart_count = 0;
    public function mount()
    {
        $settings = WebsiteSetting::whereIn('name', [
            'opening_time',
            'facebook',
            'instagram',
            'youtube'
        ])->pluck('content', 'name');

        $this->opening_time = $settings['opening_time'] ?? null;
        $this->social_media = [
            'facebook' => $settings['facebook'] ?? null,
            'instagram' => $settings['instagram'] ?? null,
            'youtube' => $settings['youtube'] ?? null,
        ];
        $this->cart_count = count(CartManagement::getCartItemsFromCookie());
    }
    #[On('update-cart-count')]
    public function updateCartCount($cart_total)
    {
        $this->cart_count = $cart_total;
    }
    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
