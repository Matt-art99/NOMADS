<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  @include('includes.admin.style')
</head>

<body>
  @include('includes.admin.sidebar')

  <div class="main-content" id="panel">
    {{--  <!-- Topnav -->  --}}
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          {{--  <!-- Navbar links -->  --}}
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              {{--  <!-- Sidenav toggler -->  --}}
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>

          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ url('backend/assets/img/theme/team-4.jpg') }}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>

                <a href="#!" class="dropdown-item" data-toggle="modal" data-target="#modal-notification">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{--  <!-- Header -->  --}}
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
            </div>
          </div>
          {{-- Card stats  --}}
          <div class="row">
            {{--  Stats Travel Packages  --}}
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Travel Package</h5>
                      <span class="h2 font-weight-bold mb-0">20</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-pin-3"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{--  Stats Transactions  --}}
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Transactions</h5>
                      <span class="h2 font-weight-bold mb-0">14</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{--  Stats Transaction Pending  --}}
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0" style="font-size: 8px">Transaction Pending</h5>
                      <span class="h2 font-weight-bold mb-0">2</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-send"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{--  Stats Transaction Success  --}}
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0" style="font-size: 8px">Transaction Success</h5>
                      <span class="h2 font-weight-bold mb-0">12</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-check-bold"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
              
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Did you ready to leave?</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                  
                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4">You should read this!</h4>
                        <p>
                          Select "logout" below if you&apos;re ready to end your current session  
                        </p>
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-link text-white mr-auto" data-dismiss="modal">Close</button>
                  <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-white">Logout</button>
                  </form>
                </div>
                
            </div>
        </div>
    </div>
  </div>

    {{-- Page content  --}}
    <div class="container-fluid mt--6">
      @yield('content')
      
      @include('includes.admin.footer')
    </div>
  </div>

  @include('includes.admin.script')
</body>

</html>
