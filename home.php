<?php

session_start();
if(isset($_SESSION['IS_AUTHENTICATED'])&&$_SESSION['IS_AUTHENTICATED'] == 1){ 
    require('navabar.php'); } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Home Page</title>
    <style>
        .profiletotal{
        border: black solid;
        margin: 15px;
        /* height: 4004px;   */
        width: 1061px;
        }
        .posts{
          margin: 15px;
          margin-top: 25px;
            border: black solid;
            height: 550px;
            width: 995px;
        }
    </style>
  </head>
  <body>
  <center><div class="profiletotal">
  
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="margin-top: 10px">
        <div class="col p-4 d-flex flex-column position-static">
        <h4 class="mb-0">Got Something</h4>
          <strong class="d-inline-block mb-2 text-success" style="margin: 10px">On your mind</strong>
          <h4 class="mb-0" >POST it here</h4>
          <p class="mb-auto"></p>
          <a class="btn btn-primary" href="postform.php" style="width:13px  margin-left: 594px; margin-top:0px;"  role="button">Make A Post</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="500" height="250" src="images/postspic.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
         <div style="background-color: rgba(0, 0, 0, 0.712);"> <img src="images/undraw_moments_0y20.svg" alt="post!" width="500" height="250"></div>
        </div>
      </div>

        <div class="posts">
        <div class="posthdr">
            <header class="p-3 mb-3 border-bottom">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <img src="users/bunny-2.jpg" style="clip-path: circle(); height: 103px; margin-left: -45px;" alt="img">
                   <div style="margin-left: 43px;"> <h4>USER NAME </h4>
                    <p>post time details</p></div>
                    
                    <a class="btn btn-primary" href="cmntform.php" style=" position: absolute; right:315px; "  role="button">Comment</a>
                  </div>
                </div>
              </header>
              <div>
                  <img src="users/cover-1.jpeg" alt="post" height="355px"  width="850px">
              </div>
      </div>
        </div>

        <div class="posts">
        <div class="posthdr">
            <header class="p-3 mb-3 border-bottom">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <img src="users/1633425250_your name 2.png" style="clip-path: circle(); height: 103px; margin-left: -45px;" alt="img">
                   <div style="margin-left: 43px;"> <h4>USER NAME </h4>
                    <p>post time details</p></div>
                    
                    <a class="btn btn-primary" href="cmntform.php" style=" position: absolute; right:315px; "  role="button">Comment</a>
                  </div>
                </div>
              </header>
              <div>
                  <img src="users/cover-1.jpeg" alt="post" height="355px"  width="850px">
              </div>
      </div>
      </div>
  

















   
    </div></center>


  





    <!-- xmlns="http://www.w3.org/2000/svg"  -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>