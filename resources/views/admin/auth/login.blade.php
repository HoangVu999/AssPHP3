<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 14:24:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin-press/assets/images/favicon.png')}}">
    @include('admin.layouts.style')
</head>
<body>
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{route('login')}}" method="POST">
                        @csrf
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" 
                                    type="email" required="" 
                                    placeholder="Email"
                                    @isset($email)
                                        value="{{$email}}"
                                    @endisset
                                    name="email"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                        </div>
                        @isset($msg)
                        <div>
                            <span style="color: red">{{$msg}}</span>
                        </div>
                        @endisset
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('admin.layouts.script')
</body>
</html>