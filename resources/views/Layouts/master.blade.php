<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,700%7CRubik:300,300i,500,700,900%7CMontserrat:400,700">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item">
          <div class="diamond"></div>
          <div class="diamond"></div>
          <div class="diamond"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
        @include('Layouts.topbar')

        @yield('contents')

      <!-- Page Footer-->
      @include('Layouts.footer')

    </div>
    <!-- Modal Login/Register-->
    <div class="modal modal-login-register fade" id="modal-login-register" tabindex="-1" role="dialog" aria-labelledby="modal-login-register-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="font-weight-bold modal-title" id="modal-login-register-label">Login Form</h2>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <div class="group-sm group-sm-justify"><a class="button button-sm button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>Facebook</a><a class="button button-sm button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-sm button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>Google+</a></div>
            <p class="text-uppercase">or</p>
            <!-- RD Mailform-->
            <form class="form rd-mailform form-centered">
              <div class="form-wrap">
                <input class="form-input" id="popup-form-login-email" type="email" name="email" data-constraints="">
                <label class="form-label" for="popup-form-login-email">E-mail</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="popup-form-login-password" type="password" name="password" data-constraints="">
                <label class="form-label" for="popup-form-login-password">Password</label>
              </div>
              <div class="form-wrap">
                <label class="checkbox-inline">
                  <input name="checkbox" value="checkbox-1" type="checkbox" checked>Remember me 
                </label>
              </div>
              <div class="group"> 
                <button class="button button-primary" type="submit">Login</button>
                <button class="button button-default-outline">Create an Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://widgets.bitcoin.com/widget.js"></script>
  </body>
</html>