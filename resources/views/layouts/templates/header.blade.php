<header class="main-header">
    <a class="logo">
        <span class="logo-mini"><b>I</b>NV</span>
        <span class="logo-lg"><b>Inventory</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('images/petugas.png') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ asset('images/petugas.png') }}" class="img-circle" alt="User Image">
                  <p>
                    {{ Auth::user()->name }}
                    <small>Aplikasi Inventory</small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-body">
                  <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout 
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </li>
            </ul>
        </div>
    </nav>
</header>