<?php

namespace App\Http\Livewire\Admin\BusinessType;

use Livewire\Component;

use App\Models\BusinessType;

class NewBusinessType extends Component
{
    public $name = '';

    protected $rules = [
        'name' => 'required|unique:business_types',
    ]; 

    public function add() {
        $this->validate();
        BusinessType::create([
            'name' => $this->name,
        ]);
        session()->flash('succes', 'The category has been added successfully.');
        return redirect(route('admin-businesstype-list'));
    }

    public function render()
    {
        return view('livewire.admin.business-type.new-business-type');
    }
}
