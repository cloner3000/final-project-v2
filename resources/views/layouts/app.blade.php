<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="brandnewshit">
  <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  <title>Sistem Informasi Pelayanan Kantor Kecamatan Coblong</title>
  <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/v1.css') }}">
  <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/typeahead.css') }}">
  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('vendor/animsition/animsition.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/asscrollable/asScrollable.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/switchery/switchery.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/intro-js/introjs.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/slidepanel/slidePanel.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/flag-icon.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/waves/waves.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables-bootstrap/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables-responsive/dataTables.responsive.min.css') }}">
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fonts/material-design/material-design.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min.css') }}">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="{{ asset('vendor/breakpoints/breakpoints.js') }}"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Navbar & Sidebar -->
  @include('layouts.inc.nav')

  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row">
        @include('layouts.inc.password')
        @yield('content')
      </div>
    </div>
  </div>
  <!-- End Page -->

  <!-- Footer -->
  @include('layouts.inc.footer')
  
  <!-- Core  -->
  <script src="{{ asset('vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
  <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
  <script src="{{ asset('vendor/tether/tether.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.js') }}"></script>
  <script src="{{ asset('vendor/animsition/animsition.js') }}"></script>
  <script src="{{ asset('vendor/mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ asset('vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
  <script src="{{ asset('vendor/asscrollable/jquery-asScrollable.js') }}"></script>
  <script src="{{ asset('vendor/waves/waves.js') }}"></script>
  <!-- Plugins -->
  <script src="{{ asset('vendor/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('vendor/intro-js/intro.js') }}"></script>
  <script src="{{ asset('vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ asset('vendor/slidepanel/jquery-slidePanel.js') }}"></script>
  <script src="{{ asset('vendor/jvectormap/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ asset('vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables-bootstrap/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
  <script src="{{ asset('vendor/datatables-responsive/responsive.bootstrap.js') }}"></script>
  <!-- Scripts -->
  <script src="{{ asset('js/State.js') }}"></script>
  <script src="{{ asset('js/Component.js') }}"></script>
  <script src="{{ asset('js/Plugin.js') }}"></script>
  <script src="{{ asset('js/Base.js') }}"></script>
  <script src="{{ asset('js/Config.js') }}"></script>
  <script src="{{ asset('js/Section/Menubar.js') }}"></script>
  <script src="{{ asset('js/Section/Sidebar.js') }}"></script>
  <script src="{{ asset('js/Section/PageAside.js') }}"></script>
  <script src="{{ asset('js/Plugin/menu.js') }}"></script>
  <!-- Page -->
  <script src="{{ asset('js/Site.js') }}"></script>
  <script src="{{ asset('js/Plugin/asscrollable.js') }}"></script>
  <script src="{{ asset('js/Plugin/slidepanel.js') }}"></script>
  <script src="{{ asset('js/Plugin/switchery.js') }}"></script>
  <script src="{{ asset('js/Plugin/matchheight.js') }}"></script>
  <script src="{{ asset('js/Plugin/jvectormap.js') }}"></script>
  <script src="{{ asset('js/Plugin/peity.js') }}"></script>
  <script src="{{ asset('js/Plugin/jquery-placeholder.js') }}"></script>
  <script src="{{ asset('js/Plugin/material.js') }}"></script>
  <script src="{{ asset('js/Plugin/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/Plugin/fnStandingRedraw.js') }}"></script>
  <script src="{{ asset('js/Plugin/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('js/Plugin/typeahead.bundle.js') }}"></script>
  <script>
    Site.run();
  </script>
  @stack('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.reports-dari').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      })
      
      $('.reports-sampai').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      })

      $('#form-change-password').submit(function(e) {
        e.preventDefault()
        let id = "{{ Auth::id() }}"
        /* Act on the event */

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: `/dashboard/users/${id}`,
          type: 'PUT',
          data: $(this).serialize(),
          success: function(data) {
            if (data.hasOwnProperty('errors')) {
              let old_password = data.errors.old_password
              let new_password = data.errors.new_password
              let new_password_confirmation = data.errors.new_password_confirmation

              $('.password-error-old').html('')
              $('.password-error-new').html('')
              $('.password-error-confirm').html('')

              $('.password-error-old').html(old_password)
              $('.password-error-new').html(new_password)
              $('.password-error-confirm').html(new_password_confirmation)
            } else {
                if (data.message == 'success') 
                  $('#change-password-modal').modal('hide')
            }
          }
        })
      })
    })
  </script>
</body>
</html>