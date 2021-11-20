<?php

namespace App\Http\Livewire\LagosBusiness\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    use WithFileUploads;
    
    public Product $product;
    public $categories;
    public $picture = null;

    protected function rules()
    {
        return [
            'product.name' => ['required', Rule::unique('products', 'name')->ignore($this->product)],
            'product.description' => '',
            'product.category_id' => 'required',
            'product.price' => '',
            'product.quantity' => '',
            'picture' => 'nullable|image|max:2000',
        ];
    }

    protected $messages = [
        'product.category_id.required' => 'The category is required',
        'picture.image' => 'Please upload an image',
        'picture.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ];

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->categories = Category::all();
    }

    public function editProduct()
    {
        if (!is_int($this->product->category_id)) {
            $this->product->category_id = intval($this->product->category_id['value']);
        }
        $this->validate();
        $this->product->update();
        $this->picture && $this->product->update([
            'picture' => $this->picture->store('products', ['disk' => 'public'])
        ]);
        session()->flash('succes', 'Your product has been edited.');
        return redirect(route('product-management'));
    }
    
    public function render()
    {
        return view('livewire.lagos-business.product.product-edit');
    }
}
