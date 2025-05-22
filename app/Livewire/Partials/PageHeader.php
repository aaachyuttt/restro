<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class PageHeader extends Component
{
    public string $pageTitle = '';
    public function render()
    {
        return view('livewire.partials.page-header');
    }
}
