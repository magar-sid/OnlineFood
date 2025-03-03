<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('admin/dist/img/user1.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TRAINING<span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user1.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Siddhant Magar</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{--                <ul class="nav nav-treeview">--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="./index.html" class="nav-link active">--}}
                    {{--                            <i class="far fa-circle nav-icon"></i>--}}
                    {{--                            <p>Dashboard v1</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="./index2.html" class="nav-link">--}}
                    {{--                            <i class="far fa-circle nav-icon"></i>--}}
                    {{--                            <p>Dashboard v2</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="./index3.html" class="nav-link">--}}
                    {{--                            <i class="far fa-circle nav-icon"></i>--}}
                    {{--                            <p>Dashboard v3</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                </ul>--}}
                </li>
                <li class="nav-item">
                    <a href="{{route('product')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Restaurant
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('product')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Menu
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/layout/top-nav.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Create</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>List</p>
                                            </a>
                                        </li>

</aside>
