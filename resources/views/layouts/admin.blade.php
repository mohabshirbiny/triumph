<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Dashboard | @yield("page_title")</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css') }}" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/jqvmap/jqvmap.min.css') }}" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/adminlte.min.css') }}" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.css') }}" />
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            var base_url = "{{ url('/admin') }}";
        </script>

        <script src="{{ asset("js/app.js") }}"></script>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" role="button" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="{{ asset('admin_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
                    <span class="brand-text font-weight-light">Triumph Hotel</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info">
                            <a href="javascript:;" class="d-block">Hi, {{ auth()->user()->name }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item">
                                <a href="{{ url('/admin') }}" class="nav-link @if(request()->segment(1) == 'admin' && request()->segment(2) == null ) active @endif">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                            
                            <li class="nav-item has-treeview @if(request()->segment(2) && str_contains(request()->segment(2) , 'news')) menu-open @endif">
                                <a href="#" class="nav-link @if(request()->segment(2) && str_contains(request()->segment(2) , 'news')) active @endif">
                                  <i class="nav-icon fas fa-newspaper"></i>
                                  <p>
                                    News
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    
        
                                    <li class="nav-item">
                                        <a href="{{ url('admin/news') }}" class="nav-link @if(request()->segment(2) == 'news') active @endif">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>all News</p>
                                        </a>
                                    </li>
                                </ul>
                              </li>

                            <li class="nav-item has-treeview @if(request()->segment(2) && str_contains(request()->segment(2) , 'hotels')) menu-open @endif">
                                <a href="#" class="nav-link @if(request()->segment(2) && str_contains(request()->segment(2) , 'hotels')) active @endif">
                                  <i class="nav-icon fas fa-city"></i>
                                  <p>
                                    Hotels
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">

        
                                    <li class="nav-item">
                                        <a href="{{ route('hotels.index') }}" class="nav-link @if(request()->segment(2) == 'hotels') active @endif">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>all hotels</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview @if(request()->segment(2) && str_contains(request()->segment(2) , 'rooms')) menu-open @endif">
                                <a href="#" class="nav-link @if(request()->segment(2) && str_contains(request()->segment(2) , 'rooms')) active @endif">
                                  <i class="nav-icon fas fa-city"></i>
                                  <p>
                                    Rooms
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">

        
                                    <li class="nav-item">
                                        <a href="{{ route('rooms.index') }}" class="nav-link @if(request()->segment(2) == 'rooms') active @endif">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>all rooms</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview @if(request()->segment(2) && str_contains(request()->segment(2) , 'restaurants')) menu-open @endif">
                                <a href="#" class="nav-link @if(request()->segment(2) && str_contains(request()->segment(2) , 'restaurants')) active @endif">
                                  <i class="nav-icon fas fa-city"></i>
                                  <p>
                                    Restaurants
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">

        
                                    <li class="nav-item">
                                        <a href="{{ route('restaurants.index') }}" class="nav-link @if(request()->segment(2) == 'restaurants') active @endif">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>all restaurants</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            
                            <li class="nav-item has-treeview @if(request()->segment(2) && str_contains(request()->segment(2) , 'service')) menu-open @endif">
                                <a href="#" class="nav-link @if(request()->segment(2) && str_contains(request()->segment(2) , 'service')) active @endif">
                                  <i class="nav-icon fas fa-briefcase"></i>
                                  <p>
                                    Services
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    
        
                                    <li class="nav-item">
                                        <a href="{{ route('services.index') }}" class="nav-link @if(request()->segment(2) == 'services') active @endif">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>All Services</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview @if(request()->segment(2) && str_contains(request()->segment(2) , 'sliders')) menu-open @endif">
                                <a href="#" class="nav-link @if(request()->segment(2) && str_contains(request()->segment(2) , 'sliders')) active @endif">
                                  <i class="nav-icon fas fa-briefcase"></i>
                                  <p>
                                    Sliders
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                   
        
                                    <li class="nav-item">
                                        <a href="{{ route('sliders.index') }}" class="nav-link @if(request()->segment(2) == 'sliders') active @endif">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>sliders</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        

                            

                            <li class="nav-item">
                                <a href="{{ route('facilities.index') }}" class="nav-link @if(request()->segment(2) == 'facilities') active @endif">
                                    <i class="nav-icon fas fa-hotel"></i>
                                    <p>Facilities</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('guest-reviews.index') }}" class="nav-link @if(request()->segment(2) == 'guest-reviews') active @endif">
                                    <i class="nav-icon fas fa-hotel"></i>
                                    <p>Guest Reviews</p>
                                </a>
                            </li>


                            

                            <li class="nav-item">
                                <a href="{{ route('settings.index') }}" class="nav-link @if(request()->segment(2) == 'app-settings') active @endif">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>App settings</p>
                                </a>
                            </li>

                              
                            
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            @yield("content")

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block"><b>Version</b> 3.0.5</div> -->
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('admin_assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        

        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        @yield("js")

        <!-- AdminLTE App -->
        <script src="{{ asset('admin_assets/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('admin_assets/dist/js/demo.js') }}"></script>

        <script>
            const is_country_set = "{{ session()->has('country_details') ?? 0 }}";
        </script>
        <script src="{{ asset('admin_assets/custom/general.js') }}"></script>
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

        @if (\Session::has('success_message'))
            <script>toastr.success("{{ \Session::get('success_message') }}")</script>
        @endif

    </body>
</html>
