<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;

use App\Models\Blog;
use App\Models\BlogCategory;

class NewBlog extends Component
{
    public $title;
    public $blog_category_id;
    public $content;

    public $blog_categories;

    protected $rules = [        
        'title' => 'required|unique:blogs',
        'blog_category_id' => 'required',
        'content' => ''
    ];
    protected $messages = [
        'blog_category_id.required' => 'The blog category is required',
    ];


    public function mount()
    {
        $this->blog_categories = BlogCategory::all();
    }

    public function createBlog()
    {
        if (is_array($this->blog_category_id) && array_key_exists("value", $this->blog_category_id)) {
            $this->blog_category_id = intval($this->blog_category_id['value']);
        }
        $this->validate();
        Blog::create([
            'title' => $this->title,
            'blog_category_id' => $this->blog_category_id,
            'content' => $this->content,
        ]);
        session()->flash('succes', 'The blog has been created successfully.');
        return redirect(route('admin-blog-list'));
    }

    public function render()
    {
        return view('livewire.admin.blog.new-blog');
    }
}
