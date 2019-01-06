<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/')}}"><img src="{{asset('accounts/images/logo.png')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{asset('accounts/images/logo-mini.png')}}" alt="Nodule Investment"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item nav-search d-none d-md-flex">
                <div class="nav-link">
                    <div class="input-group">
                        <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                        </div>

                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-flex">
                <a href="javascript:;" class="nav-link"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        >
                    <span class="btn btn-primary"><i class="fas fa-power-off "></i> Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="nav-item dropdown d-none d-lg-flex">
                <div class="nav-link">
                    <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="fas fa-bars"></span>
        </button>
    </div>
</nav>