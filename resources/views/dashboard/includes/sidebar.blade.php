<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{ asset('gentelella/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{ Auth::user()->name }}</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Dashboard </a>
        </li>
        <li><a><i class="fa fa-cogs"></i> Service <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">General Form</a></li>
            <li><a href="form_advanced.html">Advanced Components</a></li>
            <li><a href="form_validation.html">Form Validation</a></li>
            <li><a href="form_wizards.html">Form Wizard</a></li>
            <li><a href="form_upload.html">Form Upload</a></li>
            <li><a href="form_buttons.html">Form Buttons</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-history"></i> History </a>
        </li>
      </ul>
    </div>

  </div>
  <!-- /sidebar menu -->

  <!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="logout()">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </div>
  <!-- /menu footer buttons -->