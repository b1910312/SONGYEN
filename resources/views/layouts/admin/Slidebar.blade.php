<aside class="main-sidebar sidebar-light-warning elevation-6">
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <div class="sidebar">
        
                <!-- Sidebar Menu -->
                <nav class="scroll2" style="padding: 5px 5px">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                           <div style="margin: 20px 10px">
                            <img class="img-fluid" src="{{ asset('AdminCSS/dist/img/Logo.png') }}" alt="">
                           </div>
                        </li>
                        <hr>
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.home') }}" class="nav-link" data-id="1">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Quản lý người dùng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.customer.home') }}" class="nav-link">
                                        <i class="fa fa-user-circle nav-icon"></i>
                                        <p>Danh sách khách hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.member.home') }}" class="nav-link">
                                        <i class="fa fa-person nav-icon"></i>
                                        <p>Danh sách nhân sự</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.decentralization.home') }}" class="nav-link">
                                        <i class="fa fa-layer-group nav-icon"></i>
                                        <p>Phân quyền</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    Quản lý bài viết
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.blog.home') }}" class="nav-link">
                                        <i class="fa fa-book-open-reader nav-icon"></i>
                                        <p>Danh sách bài viết</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.cate.home') }}" class="nav-link">
                                        <i class="fa fa-book-bookmark nav-icon"></i>
                                        <p>Chủ để bài viết</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.rate.home') }}" class="nav-link">
                                        <i class="far fa-star nav-icon"></i>
                                        <p>Đánh giá bài viết</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.comment.home') }}" class="nav-link">
                                        <i class="far fa-comment nav-icon"></i>
                                        <p>Bình luận bài viết</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                          <li class="nav-item ">
                            <a class="nav-link">
                                <i class="nav-icon fa fa-calendar-check"></i>
                                <p>
                                    Quản lý sự kiện
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.event.home') }}" class="nav-link">
                                        <i class="fa fa-list-1-2 nav-icon"></i>
                                        <p>Danh sách sự kiện</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-handshake"></i>
                                <p>
                                    Quản lý đối tác
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.partner.home') }}" class="nav-link">
                                        <i class="fa fa-handshake-angle nav-icon"></i>
                                        <p>Danh sách đối tác</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-reply"></i>
                                <p>
                                    Quản lý phản hồi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.feedback.home') }}" class="nav-link">
                                        <i class="fa fa-reply-all nav-icon"></i>
                                        <p>Danh sách liên hệ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-chart-simple"></i>
                                <p>
                                    Thống kê số liệu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.statistics.home') }}" class="nav-link">
                                        <i class="fa fa-chart-pie nav-icon"></i>
                                        <p>Trang thống kê</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                
                </nav>
                <!-- /.sidebar-menu -->
          
            </div>
            <!-- /.sidebar -->
            <button class="btn btn-secondary" id="showall"><i class="fa fa-arrow-down"></i></button>
            <button class="btn btn-secondary" id="hideall"><i class="fa fa-arrow-up"></i></button>
        </aside>
       
    </div>
    <!-- /.sidebar -->
    
</aside>
