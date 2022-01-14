<?php

namespace App\Http\Livewire\LagosBusiness\Amenity;

use Livewire\Component;
use App\Models\Amenity;
use Livewire\WithFileUploads;

class NewAmenity extends Component
{
    use WithFileUploads;

    public $business_id;
    public $name = '';

    protected $rules = [
        'name' => 'required',
    ];

    protected $messages = [];

    public function mount()
    {
        $this->business_id = auth()->user()->business->id;
    }

    public function addAmenity()
    {
        $this->validate();
        $amenity = Amenity::create([
            'business_id' => $this->business_id,
            'name' => $this->name,
        ]);
        session()->flash('succes', 'Your amenity has been created.');
        return redirect(route('amenity-management'));
    }

    public function render()
    {
        return view('livewire.lagos-business.amenity.new-amenity');
    }
}
