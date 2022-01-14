<?php

namespace App\Http\Livewire\LagosBusiness\Amenity;

use Livewire\Component;
use App\Models\Amenity;


class AmenityManagement extends Component
{

    public function mount()
    {
    }
    public function delete($id)
    {
        $amenity = Amenity::find($id);
        $amenity->delete();
        session()->flash('succes', 'Your amenity has been deleted.');
    }

    public function render()
    {
        return view('livewire.lagos-business.amenity.amenity-management', [
            'services' => Amenity::where('business_id', auth()->user()->business->id)->orderby('created_at', 'DESC')->get(),
        ]);
    }
}
