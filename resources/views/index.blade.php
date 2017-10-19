<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="brandnewshit">
  <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  <title>Kecamatan Coblong</title>
  <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login-v3.css') }}">
  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('vendor/animsition/animsition.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/asscrollable/asScrollable.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/switchery/switchery.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/intro-js/introjs.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/slidepanel/slidePanel.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/flag-icon.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/waves/waves.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/jvectormap/jquery-jvectormap.css') }}">
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fonts/material-design/material-design.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min.css') }}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
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
<body class="animsition page-login-v3 layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Page -->
  <div class="page vertical-align text-xs-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <h1 class="brand-text font-size-30" style="font-family: 'Pacifico', cursive; color: steelblue; text-decoration: none">Coblong</h1>
            <h2 class="brand-text font-size-18">Sistem Informasi Pelayanan</h2>
          </div>
          <div class="alert dark alert-icon alert-info message" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <span class="notification"><i class="icon md-info" aria-hidden="true"></i> </span>
          </div>
          <form id="login-form" method="post">
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="text" class="form-control" name="username" />
              <label class="floating-label">Username</label>
            </div>
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input type="password" class="form-control" name="password" />
              <label class="floating-label">Password</label>
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg pull-xs-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                <label for="inputCheckbox">Remember me</label>
              </div>
              {{-- <a class="pull-xs-right" href="forgot-password.html">Forgot password?</a> --}}
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg m-t-40 btn-login">Sign in</button>
          </form>
          {{-- <p>Still no account? Please go to <a href="register-v3.html">Sign up</a></p> --}}
        </div>
      </div>
      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY Adriana Eka Prayudha</p>
        <p>© 2017. ALL RIGHTS RESERVED.</p>
      </footer>
    </div>
  </div>
  <!-- End Page -->

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
  <script>
    Site.run();
  </script>
  <script>
    $(document).ready(function() {

      $('.message').hide()
      
      $('#login-form').submit(function(e) {
        $('.btn-login').addClass('disabled')
        $('.btn-login').html('Please wait...')
        e.preventDefault()
        /* Act on the event */
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '/',
          type: 'POST',
          data: $(this).serialize(),
          success: function(data) {
            if (data.status == 'login failed') {
              $('.message').show()
              $('.notification').html('Isi kolom username dan password!')
              $('.btn-login').removeClass('disabled')
              $('.btn-login').html('Sign in')
            } else if (data.status == 'wrong') {
              $('.message').show()
              $('.notification').html('Username atau password salah!')
              $('.btn-login').removeClass('disabled')
              $('.btn-login').html('Sign in')
            } else {
              $('.btn-login').removeClass('disabled')
              $('.btn-login').html('Sign in')
              location.reload()
            }
          }
        })
      })

    })
  </script>
</body>
</html>