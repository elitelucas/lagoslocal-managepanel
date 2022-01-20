
<div class="owl-carousel owl-theme categories_carousel">
    @foreach ($business_types as $obj)
        <div class="item">
            <a href="javascript:;" class="popular-business-types" data-business-type-id="{{ $obj->id }}"
                data-business-type-name="{{ $obj->name }}">
                {{-- <span>{{ $obj->business_number }}</span> --}}
                <img src="{{ asset($obj->picture) }}" alt="" style="object-fit: contain">
                <h3>{{ $obj->name }}</h3>
            </a>
        </div>
    @endforeach
</div>
