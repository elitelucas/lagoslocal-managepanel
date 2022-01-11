
<div class="owl-carousel owl-theme categories_carousel owl-loaded owl-drag">
    <div class="owl-stage-outer">
        <div class="owl-stage"
            style="transform: translate3d(-762px, 0px, 0px); transition: all 0.25s ease 0s; width: 2032px;">
            @foreach ($business_types as $obj)
                <div class="owl-item" style="width: 234px; margin-right: 20px;">
                    <div class="item">
                        <a href="javascript:;" class="popular-business-types" data-business-type-id="{{ $obj->id }}"
                            data-business-type-name="{{ $obj->name }}">

                            <img src="{{ asset($obj->picture) }}" alt="">
                            <h3>{{ $obj->name }}</h3>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                class="arrow_carrot-left"></i></button><button type="button" role="presentation"
            class="owl-next disabled"><i class="arrow_carrot-right"></i></button></div>
    <div class="owl-dots disabled"></div>
</div>
