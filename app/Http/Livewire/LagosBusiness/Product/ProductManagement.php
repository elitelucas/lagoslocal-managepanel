<?php

namespace App\Http\Livewire\LagosBusiness\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;

class ProductManagement extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::where('business_id', auth()->user()->business->id)->orderby('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.lagos-business.product.product-management');
    }
}
