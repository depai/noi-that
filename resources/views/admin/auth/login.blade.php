<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icon_logo.png') }}">
    <title>Đăng nhập</title>
    <!-- Custom CSS -->
    <link href="{{ asset('xtreme-admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('xtreme-admin/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="{{ asset('images/logo-final.png') }}" style="width: 180px;" alt="logo" /></span>
                        <h4 class="font-medium m-b-20 m-t-10">Sign In to Admin</h4>
                    </div>
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}" id="form_login">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <form class="form-horizontal m-t-20" id="loginform" action="index.html">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                {{--  <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="remember">Remember me</label>  --}}
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> {{ __('Forgot Your Password?') }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('xtreme-admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('xtreme-admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('xtreme-admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================

        $('#form_login').submit(function(e){
            $(this).find(':submit').attr( 'disabled','disabled' );
            //the rest of your code
            setTimeout(() => {
                $(this).find(':submit').attr( 'disabled',false );
            }, 6000)
        });
    </script>
</body>

</html>
