{{--  <!-- Sidenav -->  --}}
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      {{--  <!-- Brand -->  --}}
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
          <img src="{{ url('frontend/images/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        {{--  <!-- Collapse -->  --}}
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          {{--  <!-- Nav items -->  --}}
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Travel Package</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-album-2 text-primary"></i>
                <span class="nav-link-text">Travel Gallery</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-money-coins text-primary"></i>
                <span class="nav-link-text">Transaction</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>