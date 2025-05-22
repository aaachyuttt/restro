<?php

namespace App\Livewire\Partials;

use App\Models\WebsiteSetting;
use Livewire\Component;

class Footer extends Component
{
    public string $address = '';
    public string $phone = '';
    public string $email = '';
    public string $about = '';
    public string $openingTime = '';
    public $socialMedia = [
        'facebook' => '',
        'instagram' => '',
        'youtube' => '',
    ];
    public function mount()
    {
        $settings = WebsiteSetting::whereIn('name', [
            'address',
            'contact_no',
            'contact_email',
            'short_about',
            'opening_time',
            'facebook',
            'instagram',
            'youtube'
        ])->pluck('content', 'name');
        $this->address = $settings['address'] ?? null;
        $this->phone = $settings['contact_no'] ?? null;
        $this->email = $settings['contact_email'] ?? null;
        $this->about = $settings['short_about'] ?? null;
        $this->openingTime = $settings['opening_time'] ?? null;
        $this->socialMedia = [
            'facebook' => $settings['facebook'] ?? null,
            'instagram' => $settings['instagram'] ?? null,
            'youtube' => $settings['youtube'] ?? null,
        ];
    }
    public function render()
    {
        return view('livewire.partials.footer');
    }
}
