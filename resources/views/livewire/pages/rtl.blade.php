
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ route('default') }}">
          <img src="../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
          <span class="ms-1 font-weight-bold">Soft UI Dashboard PRO</span>
      </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#dashboardsExamples"
                  class="nav-link  {{ strpos(Request::route()->uri(), 'dashboard') === false ? '' : 'active' }}"
                  aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                  <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>shop </title>
                          <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                  fill-rule="nonzero">
                                  <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                      <g id="shop-" transform="translate(0.000000, 148.000000)">
                                          <path class="color-background"
                                              d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                              id="Path" opacity="0.598981585"></path>
                                          <path class="color-background"
                                              d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                              id="Path"></path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </div>
                  <span class="nav-link-text ms-1">Dashboards</span>
              </a>
              <div class="collapse {{ strpos(Request::route()->uri(), 'dashboard') === false ? '' : 'show' }}"
                  id="dashboardsExamples">
                  <ul class="nav ms-4 ps-3">
                      <li class="nav-item {{ Route::currentRouteName() == 'default' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'default' ? 'active' : '' }}"
                              href="{{ route('default') }}">
                              <span class="sidenav-mini-icon"> D </span>
                              <span class="sidenav-normal"> Default </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'automotive' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'automotive' ? 'active' : '' }}"
                              href="{{ route('automotive') }}">
                              <span class="sidenav-mini-icon"> A </span>
                              <span class="sidenav-normal"> Automotive </span>
                          </a>
                      </li>
                      <li class="nav-item {{ strpos(Request::route()->uri(), 'smart-home') === false ? '' : 'active' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'smart-home' ? 'active' : '' }}"
                              href="{{ route('smart-home') }}">
                              <span class="sidenav-mini-icon"> S </span>
                              <span class="sidenav-normal"> Smart Home </span>
                          </a>
                      </li>
                      <li class="nav-item {{ strpos(Request::route()->uri(), 'virtual') === false ? '' : 'active' }} ">
                          <a class="nav-link {{ strpos(Request::route()->uri(), 'virtual') === false ? '' : 'active' }}" data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                            <span class="sidenav-mini-icon"> V </span>
                            <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
                          </a>
                          <div class="collapse {{ strpos(Request::route()->uri(), 'virtual') === false ? '' : 'show' }} " id="vrExamples">
                            <ul class="nav nav-sm flex-column">
                              <li class="nav-item {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}">
                                <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }} " href="{{ route('virtual-reality') }}">
                                  <span class="sidenav-mini-icon text-xs"> V </span>
                                  <span class="sidenav-normal"> VR Default </span>
                                </a>
                              </li>
                              <li class="nav-item {{ Route::currentRouteName() == 'virtual-info' ? 'active' : '' }}">
                                <a class="nav-link {{ Route::currentRouteName() == 'virtual-info' ? 'active' : '' }}" href="{{ route('virtual-info') }}">
                                  <span class="sidenav-mini-icon text-xs"> V </span>
                                  <span class="sidenav-normal"> VR Info </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'crm' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'crm' ? 'active' : '' }}"
                              href="{{ route('crm') }}">
                              <span class="sidenav-mini-icon"> C </span>
                              <span class="sidenav-normal"> CRM </span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>

          {{-- Laravel Examples --}}
          <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Laravel Examples</h6>
          </li>
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#laravelExamples" class="nav-link active"
                  aria-controls="laravelExamples" role="button" aria-expanded="true">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <img src="/assets/img/logos/laravel-1-logo-black-and-white.png" width="20px" height="20px">
                  </div>
                  <span class="nav-link-text ms-1">Laravel </span>
              </a>
              <div class="collapse show" id="laravelExamples">
                  <ul class="nav ms-4 ps-3">
                      <li class="nav-item {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}"
                              href="{{ route('user-profile') }}">
                              <span class="sidenav-mini-icon"> D </span>
                              <span class="sidenav-normal"> User Profile</span>
                          </a>
                      </li>
                      @can('manage-users', App\User::class)
                          <li class="nav-item {{ Route::currentRouteName() == 'users-management' ? 'active' : '' }}">
                              <a class="nav-link {{ Route::currentRouteName() == 'users-management' ? 'active' : '' }}"
                                  href="{{ route('users-management') }}">
                                  <span class="sidenav-mini-icon"> D </span>
                                  <span class="sidenav-normal"> Users Management </span>
                              </a>
                          </li>
                      @endcan
                      @can('manage-users', App\User::class)
                          <li class="nav-item {{ Route::currentRouteName() == 'roles-management' ? 'active' : '' }}">
                              <a class="nav-link {{ Route::currentRouteName() == 'roles-management' ? 'active' : '' }}"
                                  href="{{ route('roles-management') }}">
                                  <span class="sidenav-mini-icon"> D </span>
                                  <span class="sidenav-normal"> Roles Management </span>
                              </a>
                          </li>
                      @endcan
                      @can('manage-items', App\User::class)
                          <li
                              class="nav-item {{ Route::currentRouteName() == 'category-management' ? 'active' : '' }}">
                              <a class="nav-link {{ Route::currentRouteName() == 'category-management' ? 'active' : '' }}"
                                  href="{{ route('category-management') }}">
                                  <span class="sidenav-mini-icon"> D </span>
                                  <span class="sidenav-normal"> Category Management </span>
                              </a>
                          </li>
                      @endcan
                      @can('manage-items', App\User::class)
                          <li class="nav-item {{ Route::currentRouteName() == 'tags-management' ? 'active' : '' }}">
                              <a class="nav-link {{ Route::currentRouteName() == 'tags-management' ? 'active' : '' }}"
                                  href="{{ route('tags-management') }}">
                                  <span class="sidenav-mini-icon"> D </span>
                                  <span class="sidenav-normal"> Tags Management </span>
                              </a>
                          </li>
                      @endcan
                      <li class="nav-item {{ Route::currentRouteName() == 'items-management' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'items-management' ? 'active' : '' }}"
                              href="{{ route('items-management') }}">
                              <span class="sidenav-mini-icon"> D </span>
                              <span class="sidenav-normal"> Items Management </span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>


          <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
          </li>
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#pagesExamples"
                  class="nav-link {{ strpos(Request::route()->uri(), 'pages') === false ? '' : 'active' }}"
                  aria-controls="pagesExamples" role="button" aria-expanded="false">
                  <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>office</title>
                          <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                  fill-rule="nonzero">
                                  <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                      <g id="office" transform="translate(153.000000, 2.000000)">
                                          <path class="color-background"
                                              d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                              id="Path" opacity="0.6"></path>
                                          <path class="color-background"
                                              d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                          </path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </div>
                  <span class="nav-link-text ms-1">Pages</span>
              </a>
              <div class="collapse {{ strpos(Request::route()->uri(), 'pages') === false ? '' : 'show' }}"
                  id="pagesExamples">
                  <ul class="nav ms-4 ps-3">
                      <li
                          class="nav-item {{ strpos(Request::route()->uri(), 'profile') === false ? '' : 'active' }}">
                          <a class="nav-link {{ strpos(Request::route()->uri(), 'profile') === false ? '' : 'active' }}"
                              data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                              <span class="sidenav-mini-icon"> P </span>
                              <span class="sidenav-normal"> Profile <b class="caret"></b></span>
                          </a>
                          <div class="collapse {{ strpos(Request::route()->uri(), 'profile') === false ? '' : 'show' }}"
                              id="profileExample">
                              <ul class="nav nav-sm flex-column">
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'overview' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'overview' ? 'active' : '' }} "
                                          href="{{ route('overview') }}">
                                          <span class="sidenav-mini-icon text-xs"> O </span>
                                          <span class="sidenav-normal"> Overview </span>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Route::currentRouteName() == 'teams' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'teams' ? 'active' : '' }}"
                                          href="{{ route('teams') }}">
                                          <span class="sidenav-mini-icon text-xs"> T </span>
                                          <span class="sidenav-normal"> Teams </span>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Route::currentRouteName() == 'all' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'all' ? 'active' : '' }}"
                                          href=" {{ route('all-projects') }}">
                                          <span class="sidenav-mini-icon text-xs"> A </span>
                                          <span class="sidenav-normal"> All Projects </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li
                          class="nav-item {{ strpos(Request::route()->uri(), 'users') === false ? '' : 'active' }}">
                          <a class="nav-link {{ strpos(Request::route()->uri(), 'users') === false ? '' : 'active' }} "
                              data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                              <span class="sidenav-mini-icon"> U </span>
                              <span class="sidenav-normal"> Users <b class="caret"></b></span>
                          </a>
                          <div class="collapse  {{ strpos(Request::route()->uri(), 'users') === false ? '' : 'show' }}"
                              id="usersExample">
                              <ul class="nav nav-sm flex-column">
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'reports' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'reports' ? 'active' : '' }}"
                                          href="{{ route('reports') }}">
                                          <span class="sidenav-mini-icon text-xs"> R </span>
                                          <span class="sidenav-normal"> Reports </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'new-user' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'new-user' ? 'active' : '' }}"
                                          href="{{ route('new-user') }}">
                                          <span class="sidenav-mini-icon text-xs"> N </span>
                                          <span class="sidenav-normal"> New User </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li
                          class="nav-item {{ strpos(Request::route()->uri(), 'account') === false ? '' : 'active' }}">
                          <a class="nav-link {{ strpos(Request::route()->uri(), 'account') === false ? '' : 'active' }}"
                              data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                              <span class="sidenav-mini-icon"> A </span>
                              <span class="sidenav-normal"> Account <b class="caret"></b></span>
                          </a>
                          <div class="collapse {{ strpos(Request::route()->uri(), 'account') === false ? '' : 'show' }}"
                              id="accountExample">
                              <ul class="nav nav-sm flex-column">
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'settings' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'settings' ? 'active' : '' }}"
                                          href="{{ route('settings') }}">
                                          <span class="sidenav-mini-icon text-xs"> S </span>
                                          <span class="sidenav-normal"> Settings </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'billing' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'billing' ? 'active' : '' }}"
                                          href="{{ route('billing') }}">
                                          <span class="sidenav-mini-icon text-xs"> B </span>
                                          <span class="sidenav-normal"> Billing </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'invoice' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'invoice' ? 'active' : '' }}"
                                          href="{{ route('invoice') }}">
                                          <span class="sidenav-mini-icon text-xs"> I </span>
                                          <span class="sidenav-normal"> Invoice </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'security' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'security' ? 'active' : '' }}"
                                          href="{{ route('security') }}">
                                          <span class="sidenav-mini-icon text-xs"> S </span>
                                          <span class="sidenav-normal"> Security </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li
                          class="nav-item {{ strpos(Request::route()->uri(), 'projects') === false ? '' : 'active' }}">
                          <a class="nav-link {{ strpos(Request::route()->uri(), 'projects') === false ? '' : 'active' }}"
                              data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                              <span class="sidenav-mini-icon"> P </span>
                              <span class="sidenav-normal"> Projects <b class="caret"></b></span>
                          </a>
                          <div class="collapse  {{ strpos(Request::route()->uri(), 'projects') === false ? '' : 'show' }}"
                              id="projectsExample">
                              <ul class="nav nav-sm flex-column">
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'general' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'general' ? 'active' : '' }} "
                                          href="{{ route('general') }}">
                                          <span class="sidenav-mini-icon text-xs"> G </span>
                                          <span class="sidenav-normal"> General </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'timeline' ? 'active' : '' }} ">
                                      <a class="nav-link {{ Route::currentRouteName() == 'timeline' ? 'active' : '' }}"
                                          href="{{ route('timeline') }}">
                                          <span class="sidenav-mini-icon text-xs"> T </span>
                                          <span class="sidenav-normal"> Timeline </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'new-project' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'new-project' ? 'active' : '' }} "
                                          href="{{ route('new-project') }}">
                                          <span class="sidenav-mini-icon text-xs"> N </span>
                                          <span class="sidenav-normal"> New Project </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'pricing' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'pricing' ? 'active' : '' }}"
                              href="{{ route('pricing') }}">
                              <span class="sidenav-mini-icon"> P </span>
                              <span class="sidenav-normal"> Pricing Page </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}"
                              href="{{ route('rtl') }}">
                              <span class="sidenav-mini-icon"> R </span>
                              <span class="sidenav-normal"> RTL Page </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'widgets' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'widgets' ? 'active' : '' }}"
                              href="{{ route('widgets') }}">
                              <span class="sidenav-mini-icon"> W </span>
                              <span class="sidenav-normal"> Widgets </span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#applicationsExamples"
                  class="nav-link  {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'active' }}"
                  aria-controls="applicationsExamples" role="button" aria-expanded="false">
                  <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>settings</title>
                          <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                  fill-rule="nonzero">
                                  <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                      <g id="settings" transform="translate(304.000000, 151.000000)">
                                          <polygon class="color-background" id="Path" opacity="0.596981957"
                                              points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                          </polygon>
                                          <path class="color-background"
                                              d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                              id="Path" opacity="0.596981957"></path>
                                          <path class="color-background"
                                              d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                                              id="Path"></path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </div>
                  <span class="nav-link-text ms-1">Applications</span>
              </a>
              <div class="collapse {{ strpos(Request::route()->uri(), 'applications') === false ? '' : 'show' }} "
                  id="applicationsExamples">
                  <ul class="nav ms-4 ps-3">
                      <li class="nav-item {{ Route::currentRouteName() == 'kanban' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'kanban' ? 'active' : '' }} "
                              href="{{ route('kanban') }}">
                              <span class="sidenav-mini-icon"> K </span>
                              <span class="sidenav-normal"> Kanban </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'wizard' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'wizard' ? 'active' : '' }}"
                              href="{{ route('wizard') }}">
                              <span class="sidenav-mini-icon"> W </span>
                              <span class="sidenav-normal"> Wizard </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'datatables' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'datatables' ? 'active' : '' }}"
                              href="{{ route('datatables') }}">
                              <span class="sidenav-mini-icon"> D </span>
                              <span class="sidenav-normal"> DataTables </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'calendar' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'calendar' ? 'active' : '' }}"
                              href="{{ route('calendar') }}">
                              <span class="sidenav-mini-icon"> C </span>
                              <span class="sidenav-normal"> Calendar </span>
                          </a>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'analytics' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'analytics' ? 'active' : '' }}"
                              href="{{ route('analytics') }}">
                              <span class="sidenav-mini-icon"> A </span>
                              <span class="sidenav-normal"> Analytics </span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#ecommerceExamples"
                  class="nav-link  {{ strpos(Request::route()->uri(), 'ecommerce') === false ? '' : 'active' }}"
                  aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                  <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-3">
                          <title>basket</title>
                          <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Rounded-Icons" transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF"
                                  fill-rule="nonzero">
                                  <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                      <g id="basket" transform="translate(153.000000, 450.000000)">
                                          <path class="color-background"
                                              d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z"
                                              opacity="0.595377604"></path>
                                          <path class="color-background"
                                              d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z">
                                          </path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </div>
                  <span class="nav-link-text ms-1">Ecommerce</span>
              </a>
              <div class="collapse {{ strpos(Request::route()->uri(), 'ecommerce') === false ? '' : 'show' }}"
                  id="ecommerceExamples">
                  <ul class="nav ms-4 ps-3">
                      <li
                          class="nav-item {{ Route::currentRouteName() == 'ecommerce-overview' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'ecommerce-overview' ? 'active' : '' }}"
                              href="{{ route('ecommerce-overview') }}">
                              <span class="sidenav-mini-icon"> O </span>
                              <span class="sidenav-normal"> Overview </span>
                          </a>
                      </li>
                      <li
                          class="nav-item  {{ strpos(Request::route()->uri(), 'products') == false ? '' : 'active' }}">
                          <a class="nav-link  {{ strpos(Request::route()->uri(), 'products') == false ? '' : 'active' }}"
                              data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                              <span class="sidenav-mini-icon"> P </span>
                              <span class="sidenav-normal"> Products <b class="caret"></b></span>
                          </a>
                          <div class="collapse  {{ strpos(Request::route()->uri(), 'products') === false ? '' : 'show' }} "
                              id="productsExample">
                              <ul class="nav nav-sm flex-column">
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'new-product' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'new-product' ? 'active' : '' }}"
                                          href="{{ route('new-product') }}">
                                          <span class="sidenav-mini-icon text-xs"> N </span>
                                          <span class="sidenav-normal"> New Product </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'edit-product' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'edit-product' ? 'active' : '' }}"
                                          href="{{ route('edit-product') }}">
                                          <span class="sidenav-mini-icon text-xs"> E </span>
                                          <span class="sidenav-normal"> Edit Product </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'product-page' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'product-page' ? 'active' : '' }} "
                                          href="{{ route('product-page') }}">
                                          <span class="sidenav-mini-icon text-xs"> P </span>
                                          <span class="sidenav-normal"> Product Page </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'products-list' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'products-list' ? 'active' : '' }}"
                                          href="{{ route('products-list') }}">
                                          <span class="sidenav-mini-icon text-xs"> P </span>
                                          <span class="sidenav-normal"> Products List </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li
                          class="nav-item  {{ strpos(Request::route()->uri(), 'orders') === false ? '' : 'active' }}">
                          <a class="nav-link  {{ strpos(Request::route()->uri(), 'orders') === false ? '' : 'active' }}"
                              data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
                              <span class="sidenav-mini-icon"> O </span>
                              <span class="sidenav-normal"> Orders <b class="caret"></b></span>
                          </a>
                          <div class="collapse  {{ strpos(Request::route()->uri(), 'orders') === false ? '' : 'show' }}"
                              id="ordersExample">
                              <ul class="nav nav-sm flex-column">
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'order-list' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'order-list' ? 'active' : '' }}"
                                          href="{{ route('order-list') }}">
                                          <span class="sidenav-mini-icon text-xs"> O </span>
                                          <span class="sidenav-normal"> Order List </span>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Route::currentRouteName() == 'order-details' ? 'active' : '' }}">
                                      <a class="nav-link {{ Route::currentRouteName() == 'order-details' ? 'active' : '' }} "
                                          href="{{ route('order-details') }}">
                                          <span class="sidenav-mini-icon text-xs"> O </span>
                                          <span class="sidenav-normal"> Order Details </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item {{ Route::currentRouteName() == 'referral' ? 'active' : '' }}">
                          <a class="nav-link {{ Route::currentRouteName() == 'referral' ? 'active' : '' }}"
                              href="{{ route('referral') }}">
                              <span class="sidenav-mini-icon"> R </span>
                              <span class="sidenav-normal"> Referral </span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#authExamples"
                  class="nav-link  {{ strpos(Request::route()->uri(), 'suthentication') === false ? '' : 'active' }} "
                  aria-controls="authExamples" role="button" aria-expanded="false">
                  <div
                      class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>document</title>
                          <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                  fill-rule="nonzero">
                                  <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                      <g id="document" transform="translate(154.000000, 300.000000)">
                                          <path class="color-background"
                                              d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                              id="Path" opacity="0.603585379"></path>
                                          <path class="color-background"
                                              d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                          </path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                  </div>
                  <span class="nav-link-text ms-1">Authentication</span>
              </a>
              <div class="collapse  {{ strpos(Request::route()->uri(), 'authentication') === false ? '' : 'show' }} "
                  id="authExamples">
                  <ul class="nav ms-4 ps-3">
                      <li class="nav-item ">
                          <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                              <span class="sidenav-mini-icon"> S </span>
                              <span class="sidenav-normal"> Sign In <b class="caret"></b></span>
                          </a>
                          <div class="collapse " id="signinExample">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('signin-basic') }}">
                                          <span class="sidenav-mini-icon text-xs"> B </span>
                                          <span class="sidenav-normal"> Basic </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('signin-cover') }}">
                                          <span class="sidenav-mini-icon text-xs"> C </span>
                                          <span class="sidenav-normal"> Cover </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('signin-illustration') }}">
                                          <span class="sidenav-mini-icon text-xs"> I </span>
                                          <span class="sidenav-normal"> Illustration </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item ">
                          <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                              <span class="sidenav-mini-icon"> S </span>
                              <span class="sidenav-normal"> Sign Up <b class="caret"></b></span>
                          </a>
                          <div class="collapse " id="signupExample">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('signup-basic') }}">
                                          <span class="sidenav-mini-icon text-xs"> B </span>
                                          <span class="sidenav-normal"> Basic </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('signup-cover') }}">
                                          <span class="sidenav-mini-icon text-xs"> C </span>
                                          <span class="sidenav-normal"> Cover </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('signup-illustration') }}">
                                          <span class="sidenav-mini-icon text-xs"> I </span>
                                          <span class="sidenav-normal"> Illustration </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item ">
                          <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
                              <span class="sidenav-mini-icon"> R </span>
                              <span class="sidenav-normal"> Reset Password <b class="caret"></b></span>
                          </a>
                          <div class="collapse " id="resetExample">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('reset-basic') }}">
                                          <span class="sidenav-mini-icon text-xs"> B </span>
                                          <span class="sidenav-normal"> Basic </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('reset-cover') }}">
                                          <span class="sidenav-mini-icon text-xs"> C </span>
                                          <span class="sidenav-normal"> Cover </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('reset-illustration') }}">
                                          <span class="sidenav-mini-icon text-xs"> I </span>
                                          <span class="sidenav-normal"> Illustration </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item ">
                          <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                              <span class="sidenav-mini-icon"> L </span>
                              <span class="sidenav-normal"> Lock <b class="caret"></b></span>
                          </a>
                          <div class="collapse " id="lockExample">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('lock-basic') }}">
                                          <span class="sidenav-mini-icon text-xs"> B </span>
                                          <span class="sidenav-normal"> Basic </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('lock-cover') }}">
                                          <span class="sidenav-mini-icon text-xs"> C </span>
                                          <span class="sidenav-normal"> Cover </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('lock-illustration') }}">
                                          <span class="sidenav-mini-icon text-xs"> I </span>
                                          <span class="sidenav-normal"> Illustration </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item ">
                          <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                              <span class="sidenav-mini-icon"> 2 </span>
                              <span class="sidenav-normal"> 2-Step Verification <b class="caret"></b></span>
                          </a>
                          <div class="collapse " id="StepExample">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('verification-basic') }}">
                                          <span class="sidenav-mini-icon text-xs"> B </span>
                                          <span class="sidenav-normal"> Basic </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('verification-cover') }}">
                                          <span class="sidenav-mini-icon text-xs"> C </span>
                                          <span class="sidenav-normal"> Cover </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('verification-illustration') }}">
                                          <span class="sidenav-mini-icon text-xs"> I </span>
                                          <span class="sidenav-normal"> Illustration </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item ">
                          <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
                              <span class="sidenav-mini-icon"> E </span>
                              <span class="sidenav-normal"> Error <b class="caret"></b></span>
                          </a>
                          <div class="collapse " id="errorExample">
                              <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('404') }}">
                                          <span class="sidenav-mini-icon text-xs"> E </span>
                                          <span class="sidenav-normal"> Error 404 </span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link " href="{{ route('500') }}">
                                          <span class="sidenav-mini-icon text-xs"> E </span>
                                          <span class="sidenav-normal"> Error 500 </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
          </li>
      </ul>
  </div>
  <div class="sidenav-footer mx-3 mt-3 pt-3">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
          <div class="full-background"
              style="background-image: url('../../assets/img/curved-images/white-curved.jpeg')"></div>
          <div class="card-body text-start p-3 w-100">
              <div
                  class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                  <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                      id="sidenavCardIcon"></i>
              </div>
              <div class="docs-info">
                  <h6 class="text-white up mb-0">Need help?</h6>
                  <p class="text-xs font-weight-bold">Please check our docs</p>
                  <a href="/documentation/bootstrap/overview/soft-ui-dashboard/index.html" target="_blank"
                      class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
              </div>
          </div>
      </div>
  </div>
  </aside>
  <main class="main-content mt-1 border-radius-lg overflow-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
            <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحات القيادة</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">RTL</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">RTL</h6>
        </nav>
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-3">
          <a href="javascript:;" class="nav-link text-body p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
          <div class="me-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="أكتب هنا...">
            </div>
          </div>
          <ul class="navbar-nav ms-0 justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
                <i class="fa fa-user ms-sm-1 "></i>
                <span class="d-sm-inline d-none">يسجل دخول</span>
              </a>
            </li>
            <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card bg-gradient-primary">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-white text-sm mb-0 opacity-7">صحة البطارية</p>
                    <h5 class="text-white font-weight-bolder mb-0">
                      99 %
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-start">
                  <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                    <i class="ni ni-controller text-dark text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-gradient-primary mt-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-white text-sm mb-0 opacity-7">طبقة صوت الموسيقا</p>
                    <h5 class="text-white font-weight-bolder mb-0">
                      15/100
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-start">
                  <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                    <i class="ni ni-note-03 text-dark text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="card overflow-hidden">
            <div class="card-header p-3">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">دخل</p>
              <h5 class="font-weight-bolder mb-0">
                $130,832
                <span class="text-success text-sm font-weight-bolder">+90%</span>
              </h5>
            </div>
            <div class="card-body p-0">
              <div class="chart">
                <canvas id="chart-widgets-2" class="chart-canvas" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 mt-4 mt-lg-0">
          <div class="card overflow-hidden">
            <div class="card-header p-3 pb-0">
              <div class="d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                </div>
                <div class="me-3">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">مهام</p>
                  <h5 class="font-weight-bolder mb-0">
                    480
                  </h5>
                </div>
                <div class="progress-wrapper me-auto w-25">
                  <div class="progress-info">
                    <div class="progress-percentage">
                      <span class="text-xs font-weight-bold">60%</span>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-primary w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body mt-3 p-0">
              <div class="chart">
                <canvas id="chart-line-widgets" class="chart-canvas" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
            <div class="card-header p-3 pb-0">
              <h6 class="mb-0">الأحداث القادمة</h6>
              <p class="text-sm mb-0 text-capitalize font-weight-bold">انضم</p>
            </div>
            <div class="card-body border-radius-lg p-3">
              <div class="d-flex">
                <div>
                  <div class="icon icon-shape bg-info-soft shadow text-center border-radius-md shadow-none">
                    <i class="ni ni-money-coins text-lg text-info text-gradient opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="me-3">
                  <div class="numbers">
                    <h6 class="mb-1 text-dark text-sm">أسبوع الإنترنت</h6>
                    <span class="text-sm">01 يونيو 2021, ي 12:30 PM</span>
                  </div>
                </div>
              </div>
              <div class="d-flex mt-4">
                <div>
                  <div class="icon icon-shape bg-primary-soft shadow text-center border-radius-md shadow-none">
                    <i class="ni ni-bell-55 text-lg text-primary text-gradient opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="me-3">
                  <div class="numbers">
                    <h6 class="mb-1 text-dark text-sm">لقاء مع ماري</h6>
                    <span class="text-sm">24 مايو 2021, ي 10:00 PM</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fas fa-landmark opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">مرتب</h6>
                  <span class="text-xs">تنتمي التفاعلية</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0">+$2000</h5>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                    <i class="fab fa-paypal opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">باي بال</h6>
                  <span class="text-xs">دفع لحسابهم الخاص</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0">$455.00</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0">
          <div class="card bg-transparent shadow-xl">
            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../../assets/img/curved-images/curved14.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 p-3">
                <i class="fas fa-wifi text-white p-2"></i>
                <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                <div class="d-flex">
                  <div class="d-flex">
                    <div class="ms-4">
                      <p class="text-white text-sm opacity-8 mb-0">حامل البطاقة</p>
                      <h6 class="text-white mb-0">جاك بيترسون</h6>
                    </div>
                    <div>
                      <p class="text-white text-sm opacity-8 mb-0">نتهي</p>
                      <h6 class="text-white mb-0">11/22</h6>
                    </div>
                  </div>
                  <div class="me-auto w-20 d-flex align-items-end justify-content-end">
                    <img class="w-60 mt-2" src="../../assets/img/logos/mastercard.png" alt="logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="card h-100">
            <div class="card-header pb-0">
              <div class="d-flex">
                <p>جسم كامل</p>
                <div class="me-auto">
                  <span class="badge badge-primary">معتدل</span>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <p class="mb-0">ما يهم هو الأشخاص الذين أوقدوه. والناس الذين يشبهونهم مستاءون منه.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-md-0">
          <div class="card blur shadow-blur">
            <div class="card-body">
              <div class="d-flex">
                <p class="mb-0">على</p>
                <div class="form-check form-switch me-auto">
                  <input class="form-check-input me-0" type="checkbox" checked id="flexSwitchCheckDefault">
                </div>
              </div>
              <img class="img-fluid pt-3 pb-2" src="../../assets/img/small-logos/icon-bulb.svg" alt="logo image">
              <p class="mb-0">درجة حرارة</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
          <div class="card overflow-hidden">
            <div class="card-header p-3 pb-0">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">سعرات حراريه</p>
              <h5 class="font-weight-bolder mb-0">
                97
                <span class="text-success text-sm font-weight-bolder">+5%</span>
              </h5>
            </div>
            <div class="card-body p-0">
              <div class="chart">
                <canvas id="chart-widgets-1" class="chart-canvas" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-lg-0">
          <div class="card">
            <div class="card-body">
              <div class="icon icon-shape bg-gradient-primary shadow text-center">
                <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
              </div>
              <h5 class="mt-3 mb-0">754 <span class="text-secondary text-sm">م</span></h5>
              <p class="mb-0">مدينة نيويورك</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-lg-0">
          <div class="card">
            <div class="card-body">
              <p>خطوات</p>
              <h3>11.4ك</h3>
              <span class="badge badge-success">+4.3%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-5">
          <div class="card widget-calendar h-100">
            <!-- Card header -->
            <div class="card-header p-3 pb-0">
              <h6 class="mb-0">تقويم</h6>
              <div class="d-flex">
                <div class="p text-sm font-weight-bold mb-0 widget-calendar-day"></div>
                <span>,&nbsp;</span>
                <div class="p text-sm font-weight-bold mb-1 widget-calendar-year"></div>
              </div>
              <hr class="horizontal dark mb-0">
            </div>
            <!-- Card body -->
            <div class="card-body p-3">
              <div data-toggle="widget-calendar"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 mt-4 mt-lg-0">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">فئات</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group pe-0">
                <li class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                      <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                        <title>spaceship</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(4.000000, 301.000000)">
                                <path d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                <path d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                <path d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                <path d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">الأجهزة</h6>
                      <span class="text-xs">250 في المخزن, <span class="font-weight-bold">346+ تم البيع</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                      <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                        <title>settings</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(304.000000, 151.000000)">
                                <polygon opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                <path d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                <path d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">تذاكر</h6>
                      <span class="text-xs">123 مغلق, <span class="font-weight-bold">15 افتح</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                      <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                        <title>box-3d-50</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(603.000000, 0.000000)">
                                <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">سجلات الخطأ</h6>
                      <span class="text-xs">1 is نشيط, <span class="font-weight-bold">40 مغلق</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                      <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                        <title>customer-support</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(1.000000, 0.000000)">
                                <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
                                <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">المستخدمين السعداء</h6>
                      <span class="text-xs font-weight-bold">+ 430</span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="card card-background card-background-mask-dark align-items-start mt-4">
            <div class="cursor-pointer">
              <div class="full-background" style="background-image: url('../../assets/img/curved-images/curved1.jpg')"></div>
              <div class="card-body">
                <h5 class="text-white mb-0">نوع من البلوز</h5>
                <p class="text-white text-sm">ديفتونز</p>
                <div class="d-flex mt-5">
                  <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button">
                    <i class="fas fa-forward p-2"></i>
                  </button>
                  <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0" type="button">
                    <i class="fas fa-play p-2"></i>
                  </button>
                  <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button">
                    <i class="fas fa-backward p-2"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>نظرة عامة على الطلبات</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> هذا الشهر
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, تغييرات في التصميم</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 ديسمبر 7:20 مساءً</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-html5 text-danger text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">طلب جديد # 1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 ديسمبر 11 م</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-cart text-info text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">مدفوعات الخادم لشهر أبريل</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 ديسمبر 9:34 مساءً</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-credit-card text-warning text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">تمت إضافة بطاقة جديدة للأمر رقم 4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 ديسمبر 2:20 صباحًا</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-key-25 text-primary text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">فتح الحزم من أجل التطوير</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 ديسمبر ، 4:54 صباحًا</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="ni ni-money-coins text-dark text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">طلب جديد # 9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 ديسمبر</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                      document.write(new Date().getFullYear())

                  </script>
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                  &amp; <a href="https://www.updivision.com" class="font-weight-bold ml-1"
                      target="_blank">UPDIVISION</a>
                  for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.updivision.com" class=" nav-link text-muted" target="_blank">UPDIVISION</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg blur">
      <div class="card-header pb-0 pt-3  bg-transparent ">
        <div class="float-end">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-start mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-end">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark mb-1">
        <div class="mt-2">
          <h6 class="mb-0">Sidenav Mini</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel">Buy now</a>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-laravel">Free download</a>
        <a class="btn btn-outline-dark w-100" href="/documentation/bootstrap/overview/soft-ui-dashboard/index.html">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/ct-soft-ui-dashboard-pro-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20and%20%40UPDIVISION%20%23webdesign%20%23dashboard%20%23laravel%20%23livewire%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro-laravel">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-widgets-1").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.02)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var ctx2 = document.getElementById("chart-widgets-2").getContext("2d");

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(37,47,64,0.05)');
    gradientStroke2.addColorStop(0.2, 'rgba(37,47,64,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(37,47,64,0)'); //purple colors

    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Calories",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#252f40",
          borderWidth: 2,
          backgroundColor: gradientStroke2,
          data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
          maxBarThickness: 6,
          fill: true
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            }
          },
        },
      },
    });

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Income",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#252f40",
          borderWidth: 2,
          backgroundColor: gradientStroke2,
          data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
          maxBarThickness: 6,
          fill: true
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-widgets").getContext("2d");

    var gradientStroke3 = ctx3.createLinearGradient(0, 230, 0, 50);

    gradientStroke3.addColorStop(1, 'rgba(33,82,255,0.1)');
    gradientStroke3.addColorStop(0.2, 'rgba(33,82,255,0.0)');
    gradientStroke3.addColorStop(0, 'rgba(33,82,255,0)'); //purple colors

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Tasks",
          tension: 0.3,
          pointRadius: 2,
          pointBackgroundColor: "#cb0c9f",
          borderColor: "#cb0c9f",
          borderWidth: 2,
          backgroundColor: gradientStroke1,
          data: [40, 45, 42, 41, 40, 43, 40, 42, 39],
          maxBarThickness: 6,
          fill: true
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              color: '#252f40',
              padding: 10
            }
          },
        },
      },
    });
  </script>
  <script src="../../assets/js/plugins/choices.min.js"></script>
