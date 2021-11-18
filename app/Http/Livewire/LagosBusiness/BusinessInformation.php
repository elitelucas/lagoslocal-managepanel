<?php

namespace App\Http\Livewire\LagosBusiness;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Business;
use App\Models\BusinessType;

class BusinessInformation extends Component
{
    use WithFileUploads;

    public Business $business;
    public $business_types;

    public $showSuccesNotification = false;
    public $showDemoNotification = false;
    public $skills = [];

    public $upload;

    protected $rules = [
        'upload' => 'nullable|image|max:2000',

        'business.name' => '',
        'business.description' => '',
        'business.business_type_id' => 'required',
        'business.address' => '',
        'business.lat' => '',
        'business.lng' => '',
        'business.call' => '',
        'business.website' => '',
    ];

    protected $messages = [
        'upload.image' => 'Please upload an image',
        'upload.max' => 'The image size is too big. Make sure it\'s under 2MB',
    ];

    public function mount()
    {
        if ($obj = Business::where('owner_id', auth()->user()->id)->first())
            $this->business = $obj;
        else {
            $this->business = Business::create(['owner_id' => auth()->user()->id]);
        }
        $this->business_types = BusinessType::all();
    }

    public function save()
    {
        // dd($this->business->business_type_id);
        // if(!is_int($this->business->business_type_id)) {
        //     $this->business->business_type_id = intval($this->business->business_type_id['value']);
        // }
        $this->validate();
        $this->business->save();

        $this->upload && $this->user->update([
            'avatar' => $this->upload->store('/', 'avatars')
        ]);
        $this->showSuccesNotification = true;
    }

    public function setAddress($address, $lat, $lng)
    {
        $this->business->address = $address;
        $this->business->lat = $lat;
        $this->business->lng = $lng;
    }

    public function render()
    {
        return view('livewire.lagos-business.business-information');
    }
}
