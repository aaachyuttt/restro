<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use App\Models\WebsiteSetting;

class Navbar extends Component
{
    public $openingTime;
    public $socialMedia = [
        'facebook' => '',
        'twitter' => '',
        'instagram' => '',
        'linkedin' => '',
    ];
    public function mount()
    {
        $this->openingTime = WebsiteSetting::where('name', 'opening_time')->first()->content;
        $this->socialMedia['facebook'] = WebsiteSetting::where('name', 'facebook')->first()->content;
        $this->socialMedia['instagram'] = WebsiteSetting::where('name', 'instagram')->first()->content;
        $this->socialMedia['youtube'] = WebsiteSetting::where('name', 'youtube')->first()->content;
    }
    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
