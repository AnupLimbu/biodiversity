<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-flex align-items-center">
            <a class="badge badge-primary text-bold" href="{{env('APP_URL')}}" role="button" style="padding: 4px">
                <i class="fa-solid fa-arrow-right "><span class="p-2">Frontend</span></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <span class="nav-link " data-toggle="dropdown">
                <img src="{{ asset('/admin_resources/image/user_dummy.png') }}"
                     alt="Logo" class="brand-image img-circle elevation-3" style="height: 35px;margin-top:-6px;width: 35px;opacity: 1">
            </span>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-item dropdown-header pb-3 pt-3">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('/admin_resources/image/user_dummy.png') }}"
                                 alt="Logo" class="brand-image img-circle elevation-3" style="height: 50px;width: 50px;opacity: 1">
                        </div>
                        <div class="col-9">
                            <div class="text-left">
                                <span class="brand-text font-weight-bold ">{{\Illuminate\Support\Facades\Auth::user()->name}}</span> <br>
                                <span class="brand-text font-weight-light">{{\Illuminate\Support\Facades\Auth::user()->email}}</span> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider" style=""></div>
                <a href="{{'/admin/users/'.\Illuminate\Support\Facades\Auth::id().'/edit'}}" class="dropdown-item">
                    <i class="fa-regular fa-user mr-2"></i>
                    Manage Account
                </a>
                <div class="dropdown-divider"></div>
                <form action="/logout" method="POST">
                    @csrf
                <button class="dropdown-item text-center" type="submit">
                    <i class="fa-solid fa-right-from-bracket mr-2"></i> Logout
                </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
