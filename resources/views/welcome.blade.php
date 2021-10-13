<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <title>NPCI</title>
    </head>
    <body>
        <header>
            <div class="header-btns">
                <a id="login-btn" href="/login">Log in</a>
                <a id="signup-btn" href="/signup">Sign up</a>
            </div>
        </header>
        

       @foreach($listproducts as $item)
       <div class="grid-container">
        <div class="container">
            <div class="top">
               <img src=" " alt=" ">
               <a href=" ">Details</a>
            </div>

            <div class="middle">
              <h3> </h3>
              <h2> </h2>
            </div>

            <div class="bottom">
            <a href="/subscribe">Subscribe</a>
            <a href="/documentation" >view Documentation</a>
            </div>
          @endforeach  

        </div>
        </div>
    </body>
</html>
