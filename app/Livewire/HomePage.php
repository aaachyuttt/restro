<?php

namespace App\Livewire;

use App\Models\Offer;
use App\Models\Slider;
use App\Models\Product;
use Livewire\Component;
use App\Models\Testimonial;
use Livewire\Attributes\Title;

#[Title('Homepage - Restro')]
class HomePage extends Component
{
    public function render()
    {
        $sliders = Slider::where('is_active', 1)->get();
        $offers = Offer::where('is_active', 1)->take(3)->get();
        $cta = offer::where('is_active', 1)->skip(3)->first();
        $timer = offer::where('is_active', 1)->skip(4)->first();
        $testimonials = Testimonial::get();
        $popularProducts = Product::where('is_active', 1)->where('is_popular', 1)->take(8)->get();
        $bestSellings = Product::where('is_active', 1)->where('is_bestselling', 1)->take(5)->get();
        return view('livewire.home-page', [
            'sliders' => $sliders,
            'offers' => $offers,
            'cta' => $cta,
            'timer' => $timer,
            'testimonials' => $testimonials,
            'popularProducts' => $popularProducts,
            'bestSellings' => $bestSellings,
        ]);
    }
}
