<?php

namespace App\Livewire;

use App\Models\Page;
use League\CommonMark\CommonMarkConverter;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Restro')]
class PageViewer extends Component
{
    public $page;
    public string $slug;
    public string $pageTitle = '';
    public function mount(string $slug): void
    {

        $this->slug = $slug;
        $this->page = Page::where('slug', $slug)->firstorFail();
        $this->pageTitle = $this->page->title;
    }

    public function render()
    {
        return view('livewire.page-viewer');
    }
}
