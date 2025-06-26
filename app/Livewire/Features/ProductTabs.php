<?php

namespace App\Livewire\Features;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductTabs extends Component
{
    public $quantity = 1;
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
    public function increaseQty()
    {
        $this->quantity++;
    }
    public function decreaseQty()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
    public function addToCart($product_id)
    {
        $cart_total = CartManagement::addItemToCart($product_id, $this->quantity);
        $this->dispatch('update-cart-count', cart_total: $cart_total)->to(Navbar::class);
        //TODO:notification to user using toast may be using sweet alert but later
    }
    public function render()
    {
        return view('livewire.features.product-tabs');
    }
}
