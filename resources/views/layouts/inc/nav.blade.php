<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
    data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
      <i class="icon md-more" aria-hidden="true"></i>
    </button>
    <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
      <span class="navbar-brand-text hidden-xs-down"> Kecamatan Coblong</span>
    </div>
  </div>
  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar -->
      <ul class="nav navbar-toolbar">
        <li class="nav-item hidden-float" id="toggleMenubar">
          <a class="nav-link" data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
          </a>
        </li>
        <li class="nav-item hidden-sm-down" id="toggleFullscreen">
          <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
            <span class="sr-only">Toggle fullscreen</span>
          </a>
        </li>
      </ul>
      <!-- End Navbar Toolbar -->
      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
          data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <img src="{{ asset('images/avatar.png') }}" alt="...">
              <i></i>
            </span>
          </a>
          <div class="dropdown-menu" role="menu">
            @if ( Auth::user()->isAdmin() != 0 )
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem" data-toggle="modal" data-target="#print-summary-modal"><i class="icon md-print" aria-hidden="true"></i> Cetak Rekapitulasi</a>
            @endif
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem" data-toggle="modal" data-target="#change-password-modal"><i class="icon md-lock" aria-hidden="true"></i> Ganti Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/dashboard/logout') }}" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Log Keluar</a>
          </div>
        </li>
      </ul>
      <!-- End Navbar Toolbar Right -->
      <div class="navbar-brand navbar-brand-center">
        <a href="{{ url('/dashboard') }}" style="font-family: 'Pacifico', cursive; color: white; text-decoration: none; font-size: 2em">Coblong</a>
      </div>
    </div>
    <!-- End Navbar Collapse -->
  </div>
</nav>
@include('layouts.inc.sidebar')