<?php

namespace App\Livewire\Features;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductTabs extends Component
{
    public $categories;
    public $activeCategory;
    public $products = [];
    public function mount()
    {
        $this->categories = Category::where('is_active', 1)->get();
        $this->activeCategory = $this->categories->first()->id ?? null;
        $this->loadProducts();
    }
    public function setActiveCategory($categoryId)
    {
        $this->activeCategory = $categoryId;
        $this->loadProducts();
    }
    public function loadProducts()
    {
        $this->products = Product::where('category_id', $this->activeCategory)->where('is_active', 1)->get();
    }
    public function render()
    {
        return view('livewire.features.product-tabs');
    }
}
