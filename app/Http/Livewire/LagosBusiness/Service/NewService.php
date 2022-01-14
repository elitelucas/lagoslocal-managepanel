<?php

namespace App\Http\Livewire\LagosBusiness\Service;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;

class NewService extends Component
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

    public function addService()
    {
        $this->validate();
        $service = Service::create([
            'business_id' => $this->business_id,
            'name' => $this->name,
        ]);
        session()->flash('succes', 'Your service has been created.');
        return redirect(route('service-management'));
    }

    public function render()
    {
        return view('livewire.lagos-business.service.new-service');
    }
}
