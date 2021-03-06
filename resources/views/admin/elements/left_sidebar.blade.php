<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i>
                         <span class="hide-menu">Trang chủ</span>
                    </a>
                    {{--  <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classic </span></a></li>
                        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Analytical </span></a></li>
                        <li class="sidebar-item"><a href="index3.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Cryptocurrency </span></a></li>
                        <li class="sidebar-item"><a href="index4.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Overview </span></a></li>
                        <li class="sidebar-item"><a href="index5.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> E-Commerce </span></a></li>
                        <li class="sidebar-item"><a href="index6.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Sales </span></a></li>
                        <li class="sidebar-item"><a href="index7.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> General </span></a></li>
                        <li class="sidebar-item"><a href="index8.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Trendy </span></a></li>
                        <li class="sidebar-item"><a href="index9.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Campaign </span></a></li>
                        <li class="sidebar-item"><a href="index10.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Modern </span></a></li>
                    </ul>  --}}
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('products.index') }}" aria-expanded="false"><i class="mdi mdi-shopping"></i><span class="hide-menu">Quản lý sản phẩm</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('categories.index') }}" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i><span class="hide-menu">Quản lý loại sản phẩm</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('collections.index') }}" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i><span class="hide-menu">Quản lý bộ sưu tập</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('orders.index') }}" aria-expanded="false">
                        <i class="mdi mdi-motorbike"></i>
                        <span class="hide-menu">Đơn hàng @if ($countNewOrder)
                                <span class="badge badge-primary">{{ $countNewOrder }}</span>
                            @endif
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('settings.index') }}" aria-expanded="false">
                        <i class="mdi mdi-settings"></i>
                        <span class="hide-menu">Cài đặt</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
