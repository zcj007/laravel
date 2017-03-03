<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/ad/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/ad/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/ad/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/mws-style.min.css" media="screen">

<title>MWS Admin - Login Page</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>Login</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/dologin" method="post">
                     @if(session('error'))
                        <div class="mws-form-message error">
                            <ul style="list-style:none">
                                <li>{{session('error')}}</li>
                              </ul>
                        </div>
                    @endif
                    
                    @if(count($errors)>0)
                    <div class="mws-form-message error">
                        <ul style="list-style:none">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                {{csrf_field()}}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="name" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="pass" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/ad/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/ad/js/libs/jquery.placeholder.min.js"></script>
    <script src="/ad/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/ad/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/ad/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/ad/js/core/login.js"></script>

</body>
</html>
