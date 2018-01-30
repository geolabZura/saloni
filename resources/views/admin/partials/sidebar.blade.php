<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <!--special section title need class .header-->
            <li class="header">MAIN NAVIGATION</li>

            <!--treeview navigation need class .treeview-->

            <li class="{{Request::is('admin/icon') ? 'active ' : ''}}">
                <a href="{{route('admin.social')}}">
                    <i class="fa fa-dashboard"></i> <span>Social Site Links</span>
                </a>
            </li>

            <li class="{{Request::is('admin/category') ? 'active ' : ''}}">
                <a href="{{route('admin.category')}}">
                    <i class="fa fa-dashboard"></i> <span>Service Category</span>
                </a>
            </li>

            <li class="{{Request::is('admin/images') ? 'active ' : ''}}">
                <a href="{{route('admin.images')}}">
                    <i class="fa fa-dashboard"></i> <span>Background Images</span>
                </a>
            </li>


            <li class="treeview {{(Request::is('admin/aboutus')  || Request::is('admin/aboutstaff')) ? 'active ' : ''}}">
                <a href="">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>

                <ul class="treeview-menu">
                    <li class="{{Request::is('admin/aboutus') ? 'active' : ''}}"><a href="{{route('admin.aboutus')}}"><i class="fa fa-circle-o"></i>About Us</a></li>
                    <li class="{{Request::is('admin/aboutstaff') ? 'active' : ''}}"><a href="{{route('admin.aboutstaff')}}"><i class="fa fa-circle-o"></i>About Staff</a></li>
                </ul>
            </li>


            <li class="{{Request::is('admin/service') ? 'active ' : ''}}">
                <a href="{{route('admin.service')}}">
                    <i class="fa fa-dashboard"></i> <span>Services</span>
                </a>
            </li>

            <li class="{{Request::is('admin/staff') ? 'active ' : ''}}">
                <a href="{{route('admin.staff')}}">
                    <i class="fa fa-dashboard"></i> <span>Staff</span>
                </a>
            </li>

            <li class="{{Request::is('admin/brand') ? 'active ' : ''}}">
                <a href="{{route('admin.brand')}}">
                    <i class="fa fa-dashboard"></i> <span>Brand</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>