<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
       
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ url('#') }}">
                    <i class="fa fa-file-text"></i> <span>Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/buyerlist') }}">
                    <i class="fa fa-file-text"></i> <span>Operator</span>
                </a>
            </li>
            <li>
                <a href="{{url('#')}}">
                    <i class="fa fa-file-text"></i> <span>List Admin</span>
                </a>
            </li>
            <li>
                <a href="{{url('#')}}">
                    <i class="fa fa-file-text"></i> <span>Transaction</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>