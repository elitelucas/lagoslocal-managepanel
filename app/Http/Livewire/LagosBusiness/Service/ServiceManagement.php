<?php

namespace App\Http\Livewire\LagosBusiness\Service;

use Livewire\Component;
use App\Models\Service;


class ServiceManagement extends Component
{

    public function mount()
    {
    }
    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();
        session()->flash('succes', 'Your service has been deleted.');
    }

    public function render()
    {
        return view('livewire.lagos-business.service.service-management', [
            'services' => Service::where('business_id', auth()->user()->business->id)->orderby('created_at', 'DESC')->get(),
        ]);
    }
}
