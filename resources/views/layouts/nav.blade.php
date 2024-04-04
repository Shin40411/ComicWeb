<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Tổng quan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Quản lý danh mục</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                             <a class="nav-link px-0" href="{{route('danhmuc.create')}}"><span class="d-none d-sm-inline">Thêm thể loại</span> <i class="bi bi-caret-right"></i></i></a>
                            </li>
                            <li>
                            <a class="nav-link px-0" href="{{route('danhmuc.index')}}"><span class="d-none d-sm-inline">Liệt kê thể loại</span> <i class="bi bi-caret-right"></i></i></a>   
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-book"></i> <span class="ms-1 d-none d-sm-inline">Quản lý truyện tranh</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('truyen.create')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm truyện</span> <i class="bi bi-caret-right"></i></i></a>
                            </li>
                            <li>
                                <a href="{{route('truyen.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Liệt kê truyện</span> <i class="bi bi-caret-right"></i></i></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-collection"></i> <span class="ms-1 d-none d-sm-inline"> Quản lý chapter truyện</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('chapter.create')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm chapter</span> <i class="bi bi-caret-right"></i></i></a>
                            </li>
                            <li>
                                <a href="{{route('chapter.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Liệt kê chapter</span> <i class="bi bi-caret-right"></i></i></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('tukhoatruyen.index')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-tags"></i> <span class="ms-1 d-none d-sm-inline">Quản lý từ khóa</span> </a>
                    </li>
                </ul>
            </div>
        </div>