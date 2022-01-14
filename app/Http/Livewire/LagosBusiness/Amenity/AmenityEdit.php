<?php

namespace App\Http\Livewire\LagosBusiness\Amenity;

use Livewire\Component;
use App\Models\Amenity;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class AmenityEdit extends Component
{
    use WithFileUploads;

    public Amenity $amenity;

    protected function rules()
    {
        return [
            'amenity.name' => ['required'],
        ];
    }

    protected $messages = [];

    public function mount($id)
    {
        $this->amenity = Amenity::find($id);
    }

    public function editAmenity()
    {
        $this->validate();
        $this->amenity->update();
        session()->flash('success', 'Your amenity has been edited.');
        return redirect(route('amenity-management'));
    }

    public function render()
    {
        return view('livewire.lagos-business.amenity.amenity-edit');
    }
}
