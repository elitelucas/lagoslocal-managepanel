<?php

namespace App\Http\Livewire\Admin\Business;

use Livewire\Component;

use App\Models\Business;

class BusinessList extends Component
{
    public $businesses;

    public function mount()
    {

        $this->businesses = Business::all();
    }

    public function render()
    {
        return view('livewire.admin.business.business-list');
    }
}
