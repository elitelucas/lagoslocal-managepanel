    <ul class="nav nav-tabs" role="tablist" style="padding-left: 10%; padding-right:10%">
        @for ($i = 0; $i < 6; $i++)
            <li class="nav-item">
                <a id="tab-A" href="javascript:;"
                 data-business-type-id="{{ $business_types[$i]->id }}"
                    class="nav-link {{ $i == 0 ? 'active' : '' }} business-type-list">
                    {{ $business_types[$i]->name }}
                </a>
            </li>
        @endfor
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                More
            </a>
            <div class="dropdown-menu">
                @for ($i = 6; $i < count($business_types); $i++)
                    <a class="dropdown-item business-type-list" data-business-type-id="{{ $business_types[$i]->id }}"
                        href="javascript:;">{{ $business_types[$i]->name }}</a>
                @endfor
            </div>
        </li>
    </ul>
    @include('components.business-type-form')
