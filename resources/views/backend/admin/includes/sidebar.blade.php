@php($is_dashboard=request()->getRequestUri() =='/admin'?true:false)
@php($open_menu=$is_dashboard?'menu-open':'menu-close')
@php($active=$is_dashboard?'active':'')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{asset('images/logo.jpeg')}}" alt="Logo" class="brand-image img-circle elevation-3" style="height: 33px;width: 33px;opacity: 1">
        <span class="brand-text font-weight-light">BioDiversity</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-2">
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
                <li class="nav-item {{$open_menu}}">
                    <a href="#" class="nav-link {{$active}}">
                        <i class="fa-solid fa-house"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="/admin" class="nav-link {{$active}}">
                                <i class="fa-solid fa-star ml-3"></i>
                                <p>Main</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @foreach( config('sidebar') as $key => $main_link)
                    @if(isset($main_link['visibility']) && $main_link['visibility'] && isset($main_link['permission']) && $main_link['permission'])
                    @php(collect($main_link))
                    <li class="nav-item {{$main_link['active']?'menu-open':'menu-close'}}">
                        <a href="#" class="nav-link" data-model="{{$main_link['title']}}">
                            <i class="{{$main_link['icon']}}"></i>
                            <p>
                                {{$main_link['title']}}
                                <i class="fas fa-angle-left right"></i>
                                @php($modelClassName = "\App\Models\\" . $main_link['title'])
                                @php($count = $modelClassName::all()->count())
                                <span class="badge badge-info right">{{$count}} </span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                @if(count($main_link['sub_link'])>0)
                                    @foreach( $main_link['sub_link'] as $key_sub_link => $sub_link)
                                    @if($sub_link['visibility'] && $sub_link['permission'])
                                    <li class="nav-item ml-3" data-model="{{$sub_link['title']}}">
                                        <a href="{{$sub_link['route']}}" class="nav-link {{$sub_link['active']?'active':''}}">
                                            <i class="{{$sub_link['icon']}} mr-2"></i>
                                            <p style="font-size: 15px">{{$sub_link['title']}}</p>
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                @endif
                        </ul>
                    </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
