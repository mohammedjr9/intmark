<div data-simplebar class="h-100">
    <div class="user-details">
        <div class="d-flex">
            <div class="me-2">
                <img src="{{ asset('adminassets/images/users/avatar-4.jpg') }}" alt=""
                    class="avatar-md rounded-circle">
            </div>
            <div class="user-info w-100">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Donald Johnson
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)" class="dropdown-item"><i
                                    class="mdi mdi-account-circle text-muted me-2"></i>
                                Profile<div class="ripple-wrapper me-2"></div>
                            </a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"><i
                                    class="mdi mdi-cog text-muted me-2"></i>
                                Settings</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"><i
                                    class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                Lock screen</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"><i
                                    class="mdi mdi-power text-muted me-2"></i>
                                Logout</a></li>
                    </ul>
                </div>

                <p class="text-white-50 m-0">Administrator</p>
            </div>
        </div>
    </div>


    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Main</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-email"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('Category.index')}}">Categories</a></li>
                    <li><a href="{{route('Category.create')}}">Add New Category</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-email"></i>
                    <span>Rows</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('Data.index')}}">Rows</a></li>
                    <li><a href="{{route('Data.create')}}">Add New Category</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-email"></i>
                    <span>Project</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('Project.index')}}">Project</a></li>
                    <li><a href="{{route('Project.create')}}">Add New Project</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-email"></i>
                    <span>Employees</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('employees.index')}}">Employees</a></li>
                    <li><a href="{{route('employees.create')}}">Add New Employee</a></li>
                </ul>
            </li>
@php
$count=\App\Models\ContactUs::where('read',0)->count();

@endphp
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-email"></i>
                    <span>ContactUs   <b class="text-info">{{$count}}</b></span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('ContactUs.index')}}">ContactUs</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
