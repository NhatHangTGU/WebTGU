<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/template/admin/dist/img/tgu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Trang Quản Trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/template/admin/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/configs/add" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>
                           Quản lý User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/configs/add" class="nav-link">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Cấu hình hệ thống

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/menus/add" class="nav-link">
                        <i class="fas fa-sitemap"></i>
                        <p>
                            Quản lý Menu
                            {{--<i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/menus/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Menu</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>

                <li class="nav-item">
                    <a href="/admin/news/add" class="nav-link">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            Quản lý Tin Tức
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/news/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Mục Tin Tức</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/news/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Tin Tức</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/admin/sliders/add" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Quản lý Slider
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/sliders/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sliders/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Slider</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>

                <li class="nav-item">
                    <a href="/admin/sliders/add" class="nav-link">
                        <i class="fas fa-wifi"></i>
                        <p>
                            Quản lý Trang Liên Kết
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/sliders/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sliders/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Slider</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>

                <li class="nav-item">
                    <a href="/admin/sliders/add" class="nav-link">
                        <i class="fas fa-video"></i>
                        <p>
                            Quản lý Video
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/sliders/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sliders/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Slider</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>
                <li class="nav-item">
                    <a href="/admin/sliders/add" class="nav-link">
                        <i class="fas fa-upload"></i>
                        <p>
                            Quản lý File Upload
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/sliders/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sliders/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Slider</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>

                <li class="nav-item">
                    <a href="/admin/sliders/add" class="nav-link">
                        <i class="fab fa-facebook-square"></i>
                        <p>
                            Quản lý Mạng Xã Hội
                         </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/sliders/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sliders/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Slider</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>

                <li class="nav-item">
                    <a href="/admin/sliders/add" class="nav-link">
                        <i class="fas fa-address-card"></i>
                        <p>
                            Quản lý Liên Hệ
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/sliders/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sliders/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Slider</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
