<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/login.css">
  <style>

  </style>
</head>
<body>
<h1 style="font-style: italic;text-align: center;font-size: 50px;color: white;font-size: 55px;">
        <img src="images/220px-Iiitdmj-logo.jpg" height="50px">
        IIITDMJ COMMUNITY
    </h1>
    <div class="outerbox">
       <div class="pic1">
           <img src="images/undraw_connection_b38q.svg" style="width: 400px; display: inline-flexbox;" alt="">
       </div>
    <div class="box " style="display: inline-flexbox; float: right;">
        <h1 style="margin-bottom: 21px">WELCOME !</h1>
        <form action="logincheck.php" method="POST">
            <input type="text" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="submit" name="submit" value="login">
            <a style="text-decoration: none" href="forgotpassword.php">Forgot Password?</a><br><br>
            <a href="signup.php" >DOESN'T HAVE AN ACCOUNT?SIGN UP</a>
          
        </form>
          
    </div>
</div>
</body>
</html>