<form id="business_type_form" action="{{ url('list') }}" method="get">
    <input type="hidden" name="business_type_id" id="business_type_id">
    <input type="hidden" name="address" id="address" value="{{$address}}">
    <input type="hidden" name="page" value="1">
</form>
