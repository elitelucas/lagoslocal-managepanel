<?php

namespace App\Http\Livewire\Admin\BusinessType;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\BusinessType;

class BusinessTypeList extends Component
{
    use WithPagination;

    public BusinessType $businesstype;

    public $showSuccesNotification = false;
    public $showFailureNotification = false;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;

    protected $queryString = ['sortField', 'sortDirection'];
    protected $paginationTheme = 'bootstrap';


    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function delete($id)
    {
        $businesstype = BusinessType::find($id);
        $businesstype->delete();
        $this->showSuccesNotification = true;       
    }

    public function render()
    {
        return view('livewire.admin.business-type.business-type-list', [
            'businesstypes' => BusinessType::where('name', "like", "%$this->search%")->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
        ]);
    }
}
