    <ul class="nav nav-tabs" role="tablist" style="padding-left: 10%; padding-right:10%">
        @for ($i = 0; $i < 6; $i++)
            <li class="nav-item">
                <a id="tab-A" href="#pane-A"
                    class="nav-link {{ $i == 0 ? 'active' : '' }}">{{ $business_types[$i]->name }}</a>
            </li>
        @endfor
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                More
            </a>
            <div class="dropdown-menu">
                @for ($i = 6; $i < count($business_types); $i++) <a
                        class="dropdown-item" href="#">{{ $business_types[$i]->name }}</a>
                @endfor
            </div>
        </li>
    </ul>
