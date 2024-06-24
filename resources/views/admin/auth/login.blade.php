<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="{{ asset('logo/logo-adit.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('logo/logo-adit.png') }}" type="image/x-icon" />
    <title>Login - Belajar Bahasa Mandarin
    </title>
    <!-- Google font-->
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/datatables.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vector-map.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.css') }}">
    <!-- App css-->

    <link rel="preload" as="style" href="{{ asset('admin/build/assets/style-48b1edf8.css') }}" />
    <link rel="modulepreload" href="{{ asset('admin/build/assets/app-e4a857d6.js') }}" />
    <link rel="stylesheet" href="{{ asset('admin/build/assets/style-48b1edf8.css') }}" />
    <script type="module" src="{{ asset('admin/build/assets/app-e4a857d6.js') }}"></script>
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
</head>
<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- error page start //-->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show mt-2">



                            <?php

                        $nomer = 1;

                        ?>

                            @foreach($errors->all() as $error)
                            <li>{{ $nomer++ }}. {{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                        <form action="/admin/login" class="theme-form login-form" method="POST">
                            @csrf
                            @method('POST')
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control" name="email" value="{{ Session::get('emailLogin') }}" type="email" required="" placeholder="Test@gmail.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input name="password" class="form-control" value="{{ Session::get('passwordLogin') }}" type="password" name="password" required="" placeholder="*********" />
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox" />
                                    <label for="checkbox1">Remember password</label>
                                </div>
                                <a class="link" href="forget-password.html">Forgot password?</a>
                            </div> --}}
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Log in</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- error page end //-->
    <!-- latest jquery-->
    <script src="{{ asset('admin/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Plugin used-->

    @if(Session::get('logingagal'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Email atau Password Salah"
        });

    </script>
    @endif

    @if(Session::get('logout'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Berhasil Logout"
        });

    </script>
    @endif


</body>
</html>
