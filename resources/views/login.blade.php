<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet">

</head>

<body>
    <div id="main-container">
        <div id="login-head">
            <div>
                <h2>Login</h2>
                <p>Let's accelerate your product journey</p>
            </div>
            <div id="login-head-right">
                <img src="/resources/img/download.png">
            </div>
        </div>
        <div class="signUpGoogle">Sign in with <img alt="logo" src="/resources/img/google-icon (1).svg"></div>

   
    <p>or signup with</p>

    <form id="login" action="/login" method="POST">
        {{ csrf_field() }}
        <p>Email Id</p>
        <input type="text" id="email-id">
        <p class="label">Password
            <span class="required">*</span>
            <span class="forgot-pass-fl-right">Forgot Password?</span>
        </p>
        <input type="text" id="password">
        <br>
        <div id="bottom-login">
            <input type="submit" id="submit-button" value="Login">
            <a class="forgot-pass-fl-right" id="register" href="/signup">Register</a>
        </div>
    </form>
    </div>
</body>

</html>