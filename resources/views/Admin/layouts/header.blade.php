<!-- main header @s -->
<div class="nk-header nk-header-fluid bg-amber-200">
    <div class="container-xl wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand p-2">
                <a href="" class="logo-link">
                    <a href="{{ url('/dashboard') }}" class="navbar-brand">
                        <h1 class="text-primary mb-0 display-5">Brico<span class="text-black ">Hub</h1>
                    </a>
                    {{-- <img class="logo-light logo-img" src="{{asset('/images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{asset('/images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> --}}
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="{{asset('/images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('/images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <ul class="nk-menu nk-menu-main ui-s2">

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Management</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link  nk-menu-toggle">
                                    <span class="nk-menu-text">Category Manage</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('category.index')}}" class="nk-menu-link"><span class="nk-menu-text">Categories List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('category.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create category</span></a>
                                    </li>
                                </ul>
                                <!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-text">User Manage</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('user.index')}}" class="nk-menu-link"><span class="nk-menu-text"> User List </span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">

                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Statistiques</span>
                        </a>

                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link ">
                                    <span class="nk-menu-text">Categories statique</span>
                                </a>

                                <a href="#" class="nk-menu-link ">
                                    <span class="nk-menu-text">User statique</span>
                                </a>
                            </li><!-- .nk-menu-item -->

                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                </ul>
            </div><!-- .nk-header-menu -->

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    
                                </div><!-- .nk-notification -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <!-- .dropdown -->

                    <li class="dropdown user-dropdown order-sm-first">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status">{{$user->name}}</div>
                                    <div class="user-name dropdown-indicator">{{$user->email}}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{$user->name}}</span>
                                        <span class="sub-text">{{$user->email}}</span>
                                    </div>
                                    <div class="user-action">
                                        <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('logout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                    <li class="dropdown language-dropdown d-none d-sm-flex me-n1">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="quick-icon">
                                <img class="icon" src="./images/flags/english-sq.png" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                            <ul class="language-list">
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="./images/flags/english.png" alt="" class="language-flag">
                                        <span class="language-name">English</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
