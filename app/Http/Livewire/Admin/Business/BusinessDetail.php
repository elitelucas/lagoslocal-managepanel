<?php

namespace App\Http\Livewire\Admin\Business;

use Livewire\Component;
use App\Models\Business;

class BusinessDetail extends Component
{
    public Business $business;

    public function mount($id)
    {
        $this->business = Business::find($id);
    }


    public function approveBusiness($value)
    {
        $this->business->approved = $value;
        $this->business->save();
    }

    public function render()
    {
        return view('livewire.admin.business.business-detail');
    }
}
