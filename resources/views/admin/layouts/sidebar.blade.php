<aside class="left-sidebar">
    {{--    <h1>{{$composerVariable}}</h1>--}}
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="profile-img">
                <a href="">
                    <img src="{{asset('admin-press/assets/images/users/profile.png')}}" alt="user" style="margin-top:50px">
                </a>
                <div class="notify setpos"><span class="heartbit"></span> <span class="point"></span></div>
            </div>
            <div class="profile-text">
                <h5>{{Auth::user()->name}}</h5>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="{{route('logout')}}" class="" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="{{route('cate.index')}}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i><span class="hide-menu">Quản lý danh mục</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="{{route('post.index')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-note-multiple"></i><span class="hide-menu">Quản lý bài viết</span>
                    </a>
                </li>
                {{-- <li>
                    <a class="has-arrow waves-effect waves-dark" href="{{route('view.index')}}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i><span class="hide-menu">View</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
