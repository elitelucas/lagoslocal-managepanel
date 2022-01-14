<?php

namespace App\Http\Livewire\LagosBusiness\Service;

use Livewire\Component;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class ServiceEdit extends Component
{
    use WithFileUploads;

    public Service $service;

    protected function rules()
    {
        return [
            'service.name' => ['required'],
        ];
    }

    protected $messages = [];

    public function mount($id)
    {
        $this->service = Service::find($id);
    }

    public function editService()
    {
        $this->validate();
        $this->service->update();
        session()->flash('success', 'Your service has been edited.');
        return redirect(route('service-management'));
    }

    public function render()
    {
        return view('livewire.lagos-business.service.service-edit');
    }
}
