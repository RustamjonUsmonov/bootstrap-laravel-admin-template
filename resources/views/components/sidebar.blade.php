<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                        <span>
                            <button type="button"
                                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{route('home')}}" class="@if(request()->routeIs('home')) mm-active @endif">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                {{-- <li class="app-sidebar__heading">{{__('User management')}}</li>--}}
                @can('role-list')
                    <li class="@if(request()->routeIs('users*') || request()->routeIs('roles*'))) mm-active @endif">
                        <a href="#">
                            <i class="metismenu-icon pe-7s-diamond"></i>
                            {{__('User management')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('users.index')}}"
                                   class="@if(request()->routeIs('users*')) mm-active @endif">
                                    <i class="metismenu-icon">
                                    </i>{{__('Users')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('roles.index')}}"
                                   class="@if(request()->routeIs('roles*')) mm-active @endif">
                                    <i class="metismenu-icon">
                                    </i>{{__('Roles')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="metismenu-icon pe-7s-left-arrow text-danger"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
