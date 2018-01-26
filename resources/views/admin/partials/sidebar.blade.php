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
            <li class="active treeview">

                <a href="{{route('admin.social')}}">
                    <i class="fa fa-dashboard"></i> <span>Social Site Links</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>