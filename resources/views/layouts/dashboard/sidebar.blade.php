<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{ asset('images/dashboard/avatar.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>بهرام ربانی</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active"><a href="{{ route('manage') }}"><i class="fa fa-dashboard"></i>
                    <span>پیشخوان</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-o"></i>
                    <span>کاربران</span>
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                        <span class="label label-primary pull-left">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>مدیریت کاربران</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> باکس ها</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> فیکس شده</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> سایدبار</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
