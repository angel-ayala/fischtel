<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.1
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <!-- Styles required by this views -->

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">☰</button>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('elementos') }}"><i class="fa fa-th-list"></i> Elementos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('operadores') }}"><i class="fa fa-address-card"></i> Operadores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('tipos') }}"><i class="fa fa-th-list"></i> Tipos de Elementos</a>
          </li>
          <li class="divider"></li>
          <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
            	{{ csrf_field() }}
        	</form>
            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
          </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

      <div class="container-fluid">
		@yield('content')
      </div>
      <!-- /.conainer-fluid -->
    </main>

  </div>

  <footer class="app-footer">
    <span> 2017 @ FISCHTEL</span>
    <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
  </footer>

  
  <!-- GenesisUI main scripts -->
  
  <script src="{{ asset('js/vendor.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  <!-- Plugins and scripts required by this views -->

  <!-- Custom scripts required by this view -->
  <!-- <script src="js/views/main.js"></script> -->

</body>
</html>