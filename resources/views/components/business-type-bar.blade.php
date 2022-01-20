<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    @foreach ($business_types as $obj)
        <a href="javascript:;" data-business-type-id="{{ $obj->id }}"
            class="business-type-list">
            {{ $obj->name }}
        </a>
    @endforeach
</div>

<div id="mobile-type-list">
    <button class="openbtn" onclick="openNav()">&#9776;</button>
</div>
<ul id="window-type-list" class="nav nav-tabs" role="tablist" style="padding-left: 10%; padding-right:10%">
    @for ($i = 0; $i < 6; $i++)
        <li class="nav-item">
            <a data-business-type-id="{{ $business_types[$i]->id }}"
                href="javascript:;" class="nav-link {{ $i == 0 ? 'active business-type-list' : 'business-type-list' }}">{{ $business_types[$i]->name }}</a>
        </li>
    @endfor
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">
            More
        </a>
        <div class="dropdown-menu">
            @for ($i = 6; $i < count($business_types); $i++)
                <a class="dropdown-item business-type-list" href="javascript:;"
                data-business-type-id="{{ $business_types[$i]->id }}"
                >{{ $business_types[$i]->name }}</a>
            @endfor
        </div>
    </li>
</ul>
@include('components.business-type-form')
