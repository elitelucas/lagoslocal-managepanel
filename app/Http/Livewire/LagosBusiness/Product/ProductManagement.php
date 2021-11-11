<?php

namespace App\Http\Livewire\LagosBusiness\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;

class ProductManagement extends Component
{

    public function mount()
    {
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('succes', 'Your product has been deleted.');
    }

    public function render()
    {
        return view('livewire.lagos-business.product.product-management', [
            'products' => Product::where('business_id', auth()->user()->business->id)->orderby('created_at', 'DESC')->get(),
        ]);
    }
}
