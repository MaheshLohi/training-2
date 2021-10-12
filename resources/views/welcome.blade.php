
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


        <?php 
        $ch = curl_init();
        $url = "https://npci-qa-api.open.money/api/consumer/get-catalogues-for-category";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        print_r($result);

        // if($e = curl_error($ch)) {
        //     echo $e;
        // } else {
        //     $decode = json_decode($result);
        //     echo $decode;
        // }
        ?>

        
        
    </body>
</html>
