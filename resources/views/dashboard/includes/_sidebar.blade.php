<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse ">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>

            <li class="heading">
                <h3 class="uppercase">لوحة التحكم</h3>
            </li>
            <li class="nav-item  ">
                <a href="{{route('index')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الصفحة الرئيسية</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{Route('users.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">المستخدمين</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('hospitals.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">المستشفيات</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('sections.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">الاقسام</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('bookings.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">الحجوزات</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('doctors.index')}}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">الاطباء</span>
                </a>
            </li>

          

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>