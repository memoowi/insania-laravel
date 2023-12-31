<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('gentelella/production/images/favicon.ico')}}" type="image/ico" />

    <title>
      @yield('title')
    </title>
    @include('dashboard.includes.style')

    @yield('css')

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>
            <div class="clearfix"></div>
              @include('dashboard.includes.sidebar')
            </div>
          </div>
          @include('dashboard.includes.navbar')
          <!-- page content -->
          <div class="right_col" role="main">
            <!-- top tiles -->
              @yield('content')
          </div>
          <!-- /page content -->
          @include('dashboard.includes.footer')
        </div>
      </div>
    </div>
    @include('dashboard.includes.js')
    @yield('js')
  </body>
</html>
