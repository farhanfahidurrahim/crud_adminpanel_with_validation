<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

        <link href="{{asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('public/admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{asset('public/admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{asset('public/admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
        <!-- animate css -->
        <link href="{{asset('public/admin/css/animate.css') }}" rel="stylesheet" />
        <!-- Waves-effect -->
        <link href="{{asset('public/admin/css/waves-effect.css') }}" rel="stylesheet">
        <!-- Custom Files -->
        <link href="{{asset('public/admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{asset('public/admin/js/modernizr.min.js') }}"></script>

        <!-- DataTables -->
        <link href="{{asset('public/admin/assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Toaster CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />/>

        <!-- sweet alerts -->
        <script src="{{ asset('public/admin/assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/sweet-alert/sweet-alert.init.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>
<body>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
                
                <!-- Authentication Links -->
                @guest
                           
                @else

                <!-- Top Bar Start -->
                <div class="topbar">
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <div class="text-center">
                            <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                        </div>
                    </div>
                    <!-- Button mobile view to collapse sidebar menu -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <div class="">
                                <div class="pull-left">
                                    <button class="button-menu-mobile open-left">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <span class="clearfix"></span>
                                </div>
                                <form class="navbar-form pull-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                    </div>
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                </form>

                                <ul class="nav navbar-nav navbar-right pull-right">
                                    <li class="dropdown hidden-xs">
                                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                            <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg">
                                            <li class="text-center notifi-title">Notification</li>
                                            <li class="list-group">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="pull-left">
                                                        <em class="fa fa-user-plus fa-2x text-info"></em>
                                                     </div>
                                                     <div class="media-body clearfix">
                                                        <div class="media-heading">New user registered</div>
                                                        <p class="m-0">
                                                           <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                               <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="pull-left">
                                                        <em class="fa fa-diamond fa-2x text-primary"></em>
                                                     </div>
                                                     <div class="media-body clearfix">
                                                        <div class="media-heading">New settings</div>
                                                        <p class="m-0">
                                                           <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                                </a>
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="pull-left">
                                                        <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                     </div>
                                                     <div class="media-body clearfix">
                                                        <div class="media-heading">Updates</div>
                                                        <p class="m-0">
                                                           <small>There are
                                                              <span class="text-primary">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                                </a>
                                               <!-- last list item -->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                  <small>See all notifications</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hidden-xs">
                                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                    </li>
                                    <li class="hidden-xs">
                                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ URL::to('public/admin/images/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                            <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                            <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                                </form>    
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->

                <div class="left side-menu">
                    <div class="sidebar-inner slimscrollleft">
                        <!--- Divider -->
                        <div id="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                                </li>

                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Users</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('add.user')}}">Add User</a></li>
                                        <li><a href="{{ route('all.user')}}">All Users</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Products </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('add.product')}}">Add Product</a></li>
                                        <li><a href="{{ route('all.product')}}">All Product</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Sale </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('add.sale')}}">Add Sale</a></li>
                                        <li><a href="{{ route('all.sale')}}">All Sale</a></li>
                                    </ul>
                                </li>
                                

                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Category </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('add.category')}}">Add Category</a></li>
                                        <li><a href="{{ route('all.category')}}">All Category</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Left Sidebar End --> 
                        
                @endguest
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{--<footer class="footer text-right">
        
    </footer>--}}

    <script>
        var resizefunc = [];
    </script>

        <!-- jQuery  -->
        <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/admin/js/waves.js')}}"></script>
        <script src="{{asset('public/admin/js/wow.min.js')}}"></script>
        <script src="{{asset('public/admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('public/admin/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('public/admin/assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('public/admin/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('public/admin/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('public/admin/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('public/admin/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('public/admin/js/jquery.todo.js')}}"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <!-- Toaster JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
        <script>
          @if(Session::has('messege'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                     toastr.info("{{ Session::get('messege') }}");
                     break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
          @endif
        </script>

        <!-- SweetAlert JS -->
        <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
        <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
</body>
</html>
