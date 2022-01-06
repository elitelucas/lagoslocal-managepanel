@if ($data && count($data) > 0)
    @foreach ($data as $obj)
        <div class="map-data">
            <input type="hidden" class="business-type" value="{{$obj->businesstype->name}}">
            <input type="hidden" class="name" value="{{$obj->name}}">
            <input type="hidden" class="lat" value="{{$obj->lat}}">
            <input type="hidden" class="lng" value="{{$obj->lng}}">
            <input type="hidden" class="picture" value="{{$obj->picture}}">
            <input type="hidden" class="review_rating" value="{{$obj->review_rating}}">
            <input type="hidden" class="call" value="{{$obj->call}}">
            <input type="hidden" class="website" value="{{$obj->website}}">
        </div>
    @endforeach
@endif
