<div class="container-fluid py-4">
    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">{{ __('Edit Blog') }}</h6>
                <p class="text-sm mb-0">{{ __('Edit blog') }}</p>
                <hr class="horizontal dark my-3">
                <form wire:submit.prevent="editBlog" action="#" method="POST">
                    <div>
                        <label for="projectName" class="form-label">{{ __('Blog Title') }}</label>
                        <div class="@error('name')has-danger @enderror">
                            <input wire:model="blog.title" type="text" class="form-control @error('name')is-invalid @enderror"
                                id="projectName">
                        </div>
                        @error('blog.title') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div wire:ignore>
                        <label class="">Blog Category</label>
                        <select wire:model="blog.blog_category_id" class="form-control" id="blog_category_id">
                            <option selected value="">Category</option>
                            @foreach ($blog_categories as $blog_category)
                                <option value="{{ $blog_category->id }}" @if ($blog->blog_category_id == $blog_category->id) selected @endif>{{ $blog_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('blog_category_id') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                    <div>
                        <label class="mt-4">Blog Content</label>
                        <p class="form-text text-muted text-xs ms-1 d-inline">
                            (optional)
                        </p>
                        <div wire:ignore >
                            <div x-data x-ref="quill" x-init=" 
                                quill = new Quill($refs.quill, {theme: 'snow'});
                                quill.on('text-change', function () {
                                    $dispatch('quill-text-change', quill.root.innerHTML);
                                });
                                " x-on:quill-text-change.debounce.500ms="@this.set('blog.content', $event.detail)"
                                style=" min-height:200px;">
                                {!! $blog->content !!}
                            </div>
                        </div>
                        @error('blog.content') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin-blog-list') }}" type="button" name="button"
                            class="btn btn-light m-0">{{ __('Back to list') }}</a>
                        <button type="submit" name="button"
                            class="btn bg-gradient-primary m-0 ms-2">{{ __('Edit Blog') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../../../assets/js/plugins/quill.min.js"></script>
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script>
    if (document.getElementById('blog_category_id')) {
        var element = document.getElementById('blog_category_id');
        const example = new Choices(element, {
            searchEnabled: true
        });
    };
</script>