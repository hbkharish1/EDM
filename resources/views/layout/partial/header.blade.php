<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN mobile-toggler -->
    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- END mobile-toggler -->

    <!-- BEGIN brand -->
    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>

        <a href="#" class="brand-logo">
            <img src="{{asset('assets/img/Kopie-von-logo-edm_4.-Logo-No-Sub.png')}}" alt="" height="80" />
        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">
        <form class="menu-search" method="POST" name="header_search_form">
            <div class="menu-search-icon"><i class="fa fa-search"></i></div>
            <div class="menu-search-input">
                <input type="text" class="form-control" placeholder="Search menu..." />
            </div>
        </form>

        <div class="menu-item">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                <div class="menu-img online">
                @if(Auth::user()->profile_photo_path)
                <object data="{{asset('images/'.Auth::user()->profile_photo_path)}}" class="mw-100 mh-100 rounded-circle">
                    <img src="{{asset('assets/img/user/profile.png')}}" alt="" class="mw-100 mh-100 rounded-circle" />
                    </object>
                    @endif
                </div>
                <div class="menu-text">{{{ isset(Auth::user()->email) ? Auth::user()->email : "" }}}</div>
            </a>

        </div>
    </div>
    <!-- END menu -->
</div>
<!-- END #header -->