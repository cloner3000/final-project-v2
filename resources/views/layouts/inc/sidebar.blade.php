<div class="site-menubar">
  <div class="site-menubar-header">
    <div class="cover overlay">
      <img class="cover-image" src="{{ asset('examples/images/dashboard-header.jpg') }}"
      alt="...">
      <div class="overlay-panel vertical-align overlay-background">
        <div class="vertical-align-middle">
          <a class="avatar avatar-lg" href="javascript:void(0)">
            <img src="{{ asset('images/avatar.png') }}" alt="...">
          </a>
          <div class="site-menubar-info">
            <h5 class="site-menubar-user">{{ Auth::user()->name }}</h5>
            <p class="site-menubar-email">{{ Auth::user()->email }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-menubar-body">
    <div>
      <div>
        <!-- Sidebar Pelayanan -->
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-item">
            <a class="animsition-link" href="{{ url('/dashboard') }}">
              <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
              <span class="site-menu-title">Dashboard</span>
            </a>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
              <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
              <span class="site-menu-title">Pelayanan</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/ktp') }}">
                  <span class="site-menu-title">E-KTP</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/kk') }}">
                  <span class="site-menu-title">Kartu Keluarga</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/legalisir') }}">
                  <span class="site-menu-title">Legalisir</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/pindahdatang') }}">
                  <span class="site-menu-title">Pindah Datang</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/pindahkeluar') }}">
                  <span class="site-menu-title">Pindah Keluar</span>
                </a>
              </li>
            </ul>
            @if (Auth::user()->isAdmin() != 0)
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/users') }}">
                  <i class="site-menu-icon md-account-add" aria-hidden="true"></i>
                  <span class="site-menu-title">Daftar Pengguna</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="{{ url('/dashboard/log') }}">
                  <i class="site-menu-icon md-book" aria-hidden="true"></i>
                  <span class="site-menu-title">Log</span>
                </a>
              </li>
            @endif
            <!-- End Of Sidebar Pelayanan -->
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>