<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/signup.css">
    <!-- <style>
     body {
         font-family: Arial, Helvetica, sans-serif;
        }

  * {box-sizing: border-box;}


   input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: flex;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.8;
  

}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
  
}


.cancelbtn, .signupbtn {
  float: center;
  width: 25%;
}


.container {
  padding: 16px;
  
  
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


}
    </style> -->

</head>
<body>
<form action="/newuser" method="POST" >
{{ csrf_field() }}
  <div class="container">
    <h1>Create Account</h1>
    
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="phonenumber"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phonenumber" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-confirm"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-confirm" required>
    
    <label for="organization"><b>Organization</b></label>
    <input type="text" placeholder="Enter Organization" name="organization" required>
   

    

    <div class="clearfix">
      <button type="button" class="cancelbtn" href="/welcome">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>  
<a href="/welcome"></a>

    
</body>
</html>