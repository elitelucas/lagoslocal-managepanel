    @foreach ($visited as $obj)
    <li>
        <a href="javascript:;" class="d-flex flex-wrap">
            <div class="mr-2">
                <figure>
                    <img src="{{ asset($obj->business->picture) }}" alt="" class="lazy w-100">
                </figure>
            </div>
            <div>
                <h5>{{ $obj->business->name }}</h5>
                <div>
                    {{ $obj->business->address }}
                </div>
                <div class="d-flex" data-business-id="{{ $obj->business_id }}">
                    @include('components.rating',
                    ['rating'=> $obj->rating,'starsize'=>18,'scoreshow'=>false])
                    <div class="ml-4 review-color">
                        @if (intval($obj->rating > 0 && $obj->rating <= 1))
                            Terrible
                        @elseif(intval($obj->rating>1 &&$obj->rating
                        <=2)) Poor @elseif(intval($obj->rating>2
                            &&$obj->rating<=3)) Average @elseif(intval($obj->rating>3 &&$obj->rating
                                <=4)) Very Good @elseif(intval($obj->rating>4
                                    &&$obj->rating<=5)) Excellent @else Click to rate @endif
                    </div>
                </div>
            </div>
    
        </a>
    </li>
    @endforeach
