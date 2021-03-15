<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://demos.alithemes.com/html/stories/demo/home-3.html by Cyotek WebCopy 1.8.0.652, Monday, September 7, 2020, 6:05:35 PM -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stories - Personal Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('client-layout/assets/imgs/theme/favicon.png')}}">
    <!-- NewsBoard CSS  -->
@include('client.layouts.style')
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <!--Latest-->
        <!--Ads-->
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        @include('client.layouts.menu')
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="" class="search-header" method="GET">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people" name="" value="{{}}">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main contentImage -->
    <main class="bg-grey pb-30">
        @yield('content-main')
    </main>
    <!-- End Main contentImage -->
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        @include('client.layouts.footer')
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    @include('client.layouts.script')

</body>

<!-- Copied from http://demos.alithemes.com/html/stories/demo/home-3.html by Cyotek WebCopy 1.8.0.652, Monday, September 7, 2020, 6:05:35 PM -->

</html>