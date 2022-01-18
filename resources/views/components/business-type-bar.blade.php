    <ul class="nav nav-tabs d-flex justify-content-between" role="tablist" >
        @for ($i = 0; $i < 6; $i++)
            <li class="nav-item" style="padding:10px 16px">
                <a id="tab-A" href="javascript:;" style="height: 21px;padding: 0px;"
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
