<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Blog;

class BlogList extends Component
{
    use WithPagination;

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
        $blog = Blog::find($id);
        $blog->delete();
    }

    public function render()
    {   
        return view('livewire.admin.blog.blog-list', [
            'blogs' => Blog::where('title', 'LIKE', '%'.$this->search.'%')->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage)
        ]);
    }
}
