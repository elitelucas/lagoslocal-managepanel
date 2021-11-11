<?php

namespace App\Http\Livewire\LagosBusiness\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithFileUploads;

class NewProduct extends Component
{
    use WithFileUploads;

    public $categories;
    public $business_id;
    public $name = '';
    public $picture;
    public $description = '';
    public $show_on_homepage = false;
    public $category_id;
    public $price = 0;
    public $quantity;

    protected $rules = [
        'name' => 'required',
        'description' => '',
        'category_id' => 'required',
        'picture' => 'nullable|image|max:2000',
        'price' => '',
        'quantity' => '',
    ];

    protected $messages = [
        'category_id.required' => 'The category is required',
        'picture.image' => 'Please upload an image',
        'picture.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ];

    public function mount()
    {
        $this->business_id = auth()->user()->business->id;
        $this->categories = Category::all();
    }

    public function removePicture()
    {
        $this->picture = null;
    }

    public function addProduct()
    {
        if (is_array($this->category_id) && array_key_exists("value", $this->category_id)) {
            $this->category_id = intval($this->category_id['value']);
        }
        $this->validate();
        $product = Product::create([
            'business_id' => $this->business_id,
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'quantity' => $this->quantity,
        ]);
        $this->picture && $product->update([
            'picture' => $this->picture->store('products', ['disk' => 'public'])
        ]);
        session()->flash('succes', 'Your product has been created.');
        return redirect(route('product-management'));
    }

    public function render()
    {
        return view('livewire.lagos-business.product.new-product');
    }
}
