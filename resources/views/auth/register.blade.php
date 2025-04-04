<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../admin/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Register</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link href="../admin/css/dark-style.css" rel="stylesheet" />
    <link href="../admin/css/transparent-style.css" rel="stylesheet">
    <link href="../admin/css/skin-modes.css" rel="stylesheet" />

    <!-- FONT-ICONS CSS -->
    <link href="../admin/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../admin/colors/color1.css" />
</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOBAL LOADER -->
        <div id="global-loader">
            <img src="../admin/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="index.html"><img src="../admin/images/brand/logo-white.png"
                                class="header-brand-img m-0" alt=""></a>
                    </div>
                </div>
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                            @csrf
                            <span class="login100-form-title">
                                Registration
                            </span>
                            <!-- Name -->
                            <div class="wrap-input100 validate-input input-group">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                </a>
                                <input id="name" class="input100 border-start-0 ms-0 form-control" type="text"
                                    name="name" value="{{ old('name') }}" placeholder="User Name" required
                                    autofocus autocomplete="name" />
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            <!-- Email Address -->
                            <div class="wrap-input100 validate-input input-group mt-4">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input id="email" class="input100 border-start-0 ms-0 form-control" type="email"
                                    name="email" value="{{ old('email') }}" placeholder="Email" required
                                    autocomplete="username" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <!-- Password -->
                            <div class="wrap-input100 validate-input input-group mt-4" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input id="password" class="input100 border-start-0 ms-0 form-control" type="password"
                                    name="password" placeholder="Password" required autocomplete="new-password" />
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />


                            {{-- Select whether entity or individual --}}
                            <div class="wrap-input100 validate-input input-group mt-4" id="selection-toggle">
                                <label class="input-group-text bg-white text-muted">Who you are?</label>
                                <select name="role" class="form-control" required>
                                    <option value="doctor">Doctor</option>
                                    <option value="patient">Patient</option>
                                </select>
                            </div>
                            <x-input-error :messages="$errors->get('option')" class="mt-2" />


                            <!-- Terms & Conditions -->
                            <label class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" required>
                                <span class="custom-control-label">Agree to the <a href="terms.html">terms and
                                        policy</a></span>
                            </label>

                            <!-- Submit Button -->
                            <div class="container-login100-form-btn mt-4">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Register
                                </button>
                            </div>

                            <!-- Already have an account -->
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Already have an account?<a href="{{ route('login') }}"
                                        class="text-primary ms-1">Sign In</a></p>
                            </div>


                            <!-- Social Login -->
                            {{-- <label class="login-social-icon"><span>Register with Social</span></label>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0)">
                                    <div class="social-login me-4 text-center">
                                        <i class="fa fa-google"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="social-login me-4 text-center">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="social-login text-center">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </a>
                            </div> --}}
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="../admin/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../admin/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../admin/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../admin/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../admin/js/custom.js"></script>

</body>

</html>
