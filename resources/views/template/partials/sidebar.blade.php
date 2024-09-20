<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #55679C !important">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="https://i.pinimg.com/736x/35/51/88/355188d1566f53e93170278340635b6f.jpg" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">POS PPKD-JP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://i.pinimg.com/736x/35/51/88/355188d1566f53e93170278340635b6f.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="font-weight-medium mb-2 text-white">{{ Auth::user()->name }}</span>
                <span class="text-secondary text-small"></span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ Request::is('dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="nav-item {{ Request::routeIs('user.*') ? 'menu-open' : '' }}">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('level.*') ? 'menu-open' : '' }}">
                    <a href="{{route('level.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Level
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('category.*') ? 'menu-open' : '' }}">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('product.*') ? 'menu-open' : '' }}">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Master data Products
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('penjualan.*') ? 'menu-open' : '' }}">
                    <a href="{{ route('penjualan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table {{ Request::routeIs('penjualan.index') ? 'active' : '' }}"></i>
                        <p>
                            Transaction
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('penjualan.index') }}"
                                class="nav-link {{ Request::routeIs('penjualan.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaction</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
