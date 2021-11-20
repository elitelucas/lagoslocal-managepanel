<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use Illuminate\Validation\Rule;

use App\Models\Blog;
use App\Models\BlogCategory;

class BlogEdit extends Component
{
    public Blog $blog;
    public $blog_categories;

    protected function rules()
    {
        return [
            'blog.title' => ['required', Rule::unique('blogs', 'title')->ignore($this->blog)],            
            'blog.blog_category_id' => 'required',
            'blog.content' => '',
        ];
    }

    protected $messages = [
        'blog.blog_category_id.required' => 'The category is required',
    ];

    public function mount($id)
    {
        $this->blog = Blog::find($id);
        $this->blog_categories = BlogCategory::all();
    }

    public function editBlog()
    {
        if (!is_int($this->blog->blog_category_id)) {
            $this->blog->blog_category_id = intval($this->blog->blog_category_id['value']);
        }
        $this->validate();
        $this->blog->update();
        session()->flash('succes', 'Your blog has been edited.');
        return redirect(route('admin-blog-list'));
    }
    

    public function render()
    {
        return view('livewire.admin.blog.blog-edit');
    }
}
