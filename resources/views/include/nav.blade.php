  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">الرئيسيىة</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index-'.Auth::user()->type)}}" class="brand-link">
      <img src="{{asset('logo-w.png')}}"class="brand-image img-circle elevation-3"
           style="opacity: 0.8" width="45px">
      <span class="brand-text font-weight-light">المنصة الالكترونية أمان</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          

          {{-- ADMIN NAV --}}
          @include('include.'.Auth::user()->type.'.nav')
          {{-- END ADMIN NAV --}}



          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                تسجيل الخروج
              </p>
            </a>
          </li> 

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>