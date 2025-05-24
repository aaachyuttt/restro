<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use App\Models\WebsiteSetting;

class Navbar extends Component
{
    public $logo1;
    public $openingTime;
    public $socialMedia = [
        'facebook' => '',
        'twitter' => '',
        'instagram' => '',
        'linkedin' => '',
    ];
    public function mount()
    {
        $settings = WebsiteSetting::whereIn('name', [
            'opening_time',
            'facebook',
            'instagram',
            'youtube'
        ])->pluck('content', 'name');

        $this->openingTime = $settings['opening_time'] ?? null;
        $this->socialMedia = [
            'facebook' => $settings['facebook'] ?? null,
            'instagram' => $settings['instagram'] ?? null,
            'youtube' => $settings['youtube'] ?? null,
        ];
    }
    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
