<?php

namespace App\Http\Livewire\LagosBusiness\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductEdit extends Component
{
    public Product $product;
    public $categories;

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.lagos-business.product.product-edit');
    }
}
