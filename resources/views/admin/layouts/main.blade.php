<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin-press/assets/images/favicon.png')}}">
    <title>Admin Press</title>
    @include('admin.layouts.style')
</head>
<body class="fix-header fix-sidebar card-no-border">
<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <b>
                        <img src="{{asset('admin-press/assets/images/logo-icon.png')}}" alt="homepage"
                             class="dark-logo"/>
                    </b>
                    <span>
                        <a href="{{route('dashboard')}}" style="margin-bottom: 50px">
                            <img src="{{asset('admin-press/assets/images/logo-text.png')}}" alt="homepage"
                                class="dark-logo"/>
                        </a>
                         <img src="{{asset('admin-press/assets/images/logo-light-text.png')}}" class="light-logo"
                              alt="homepage"/>
                    </span>
                </a>
            </div>
        </nav>
    </header>
    @include('admin.layouts.sidebar')
    <div class="page-wrapper">
        <div class="row page-titles">
            <div>
                <button
                    class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            Vũ Đình Hoàng - PH08731
        </footer>
    </div>
</div>
@include('admin.layouts.script')
</body>
</html>
