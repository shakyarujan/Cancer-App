<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UnivCMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('dist/css/AdminLTE.min.css') !!}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{!! asset('dist/css/skins/_all-skins.min.css') !!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!! asset('plugins/iCheck/flat/blue.css') !!}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{!! asset('plugins/morris/morris.css') !!}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{!! asset('plugins/datepicker/datepicker3.css') !!}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{!! asset('plugins/daterangepicker/daterangepicker.css') !!}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{!! asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}">

  <!-- jQuery 2.2.3 -->
<script src="{!! asset('plugins/jQuery/jquery-2.2.3.min.js') !!}"></script>

<!-- tinymce -->
<script src="{{url('tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{url('tinymce/tinymce.min.js')}}"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b>Cms</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Univ</b>CMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- add other icon menus here -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Sign out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    	
      @include('admin.includes.sideBar')

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- breadcrumb -->

    @include('admin.includes.breadcrumb')

    <!-- Main content -->
    <section class="content">
      
      @yield('content')

      <!-- add other contents here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a target="_blank" href="http://jes.com.np">Jayess Shakya</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- tinymce init -->
<script>
    tinymce.init({
      selector: ".tiny-text",theme: "modern", height: 250,
      plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
      "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
      ],
      toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
      toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
      image_advtab: true ,
      
      external_filemanager_path:"{{url('tinymce/filemanager')}}/",
      filemanager_title:"Responsive Filemanager" ,
      external_plugins: { "filemanager" : "{{url('tinymce')}}/filemanager/plugin.min.js"}
    });
</script>

<!-- till here -->


<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('plugins/jQueryUI/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('ajax/module.js') !!}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{!! asset('plugins/morris/morris.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('plugins/sparkline/jquery.sparkline.min.js') !!}"></script>
<!-- jvectormap -->
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! asset('plugins/knob/jquery.knob.js') !!}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{!! asset('plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- datepicker -->
<script src="{!! asset('plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! asset('plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('plugins/fastclick/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('dist/js/app.min.js') !!}"></script>

</body>
</html>
