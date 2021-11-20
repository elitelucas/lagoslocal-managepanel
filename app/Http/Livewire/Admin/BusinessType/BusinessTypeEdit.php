<?php

namespace App\Http\Livewire\Admin\BusinessType;

use Livewire\Component;
use Illuminate\Validation\Rule;

use App\Models\BusinessType;

class BusinessTypeEdit extends Component
{
    public BusinessType $businesstype;

    public function rules()
    {
        return [
            'businesstype.name' => ['required', Rule::unique('business_types', 'name')->ignore($this->businesstype)],
        ];
    }

    public function mount($id)
    {
        if (auth()->user()->isAdmin() && Businesstype::find($id) !== null) {
            $this->businesstype = Businesstype::find($id);
        } else {
            redirect('404');
        }
    }

    public function edit()
    {
        $this->validate();
        $this->businesstype->update();
        session()->flash('succes', 'The business category has been changed successfully.');
        return redirect(route('admin-businesstype-list'));
    }


    public function render()
    {
        return view('livewire.admin.business-type.business-type-edit');
    }
}
