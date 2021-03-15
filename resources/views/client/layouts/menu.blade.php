<div class="header-top">
    <div class="container">
        <div class="row pt-20 pb-20">
            <div class="col-md-3 col-xs-6">
                <a href="{{route('homepage')}}"><img class="logo" src="{{asset('client-layout/assets/imgs/theme/logo.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="header-sticky">
    <div class="container align-self-center">
        <div class="mobile_menu d-lg-none d-block"></div>
        <div class="main-nav d-none d-lg-block">
            <nav>
                <!--Desktop menu-->
                <ul class="main-menu d-none d-lg-inline font-small">
                    <li class="">
                        <a href="{{route('homepage')}}"> <i class="elegant-icon icon_house_alt mr-5"></i> Trang chủ</a>
                    </li>
                    <li> <a href="page-about.html">Giới thiệu</a> </li>
                    <li class="list-inline-item menu-item-has-children"><a href="#">Danh mục bài viết</a>
                        <ul class="sub-menu font-small">
                            @foreach ($cateItem as $item)
                                <li> 
                                    <a href="{{route('post.list', ['id' => $item->id])}}">{{$item->name}}</a> 
                                </li>   
                            @endforeach
                        </ul>
                    </li>
                    <li> <a href="page-contact.html">Contact</a> </li>
                    <span class="float-right">
                        <li class="list-inline-item pr-10"><a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i></a>
                        </li>
                        <li class="list-inline-item pr-10"><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                        <button class="search-icon d-none d-md-inline"><span
                                class="mr-15 text-muted font-small"><i
                                    class="elegant-icon icon_search mr-5"></i>Tìm kiếm</span>
                        </button>
                    </span>
                </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>