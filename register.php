<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign Up | Portal Karya</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('img/auth/register-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                
                            <h3>Register an Acount</h3>
                            <form action="prosesdaftar.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" required="">
                                    <i class="ik ik-mail"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                                    <i class="ik ik-user"></i>

                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="">
                                    <i class="ik ik-eye-off"></i>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme" type="submit" name="submit">Create Account</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Already have an account? <a href="login.php">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="dist/js/theme.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>