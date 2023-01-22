<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @if(\Auth::user()->image != null)
                    <img src="{{ url('uploads/users/' . \Auth::user()->image) }}" class="img-circle" alt="User Image">
                @else
                    <img src="{{ url('theme/dist/img/image_placeholder.png') }}" class="img-circle" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name }}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::segment(2) == ""?"active":"" }}">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::segment(2) == "users"?"active":"" }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(2) == "users"?"active":"" }}">
                        <a href="{{ url('/admin/users') }}"><i class="fa fa-user-o"></i> Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
