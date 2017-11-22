<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="@yield('resourceslink')">
          <a href="{{ route('resources')}}">
            <i class="fa fa-files-o"></i>
            <span>Resources</span>
          </a>
        </li>
        @if(Auth::user()->role->name == 'admin')
         <li>
          <a href="/admin">
            <i class="fa fa-user"></i>
            <span>Admin</span>
          </a>
        </li>
        @endif
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fa fa-files-o"></i>
            <span>Logout</span>
          </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>