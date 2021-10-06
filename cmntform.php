<?php
require('navabar.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
           .profiletotal{
             margin: 15px;
        border: black solid;
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
        .cmnts{
            margin: 15px;
            margin-top: 25px;
            border: black solid;
          
            width: 995px;
        }
        .comnt-box{
            border: black solid;
             width:995px;
        }

    </style>
    <title>Comment Page</title>
  </head>
  <body>

  <center><div class="profiletotal">
   
  <div class="posts">
        <div class="posthdr">
            <header class="p-3 mb-3 border-bottom">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <img src="users/Happy-Independence-Day-WhatsApp-DP-1918.png" style="clip-path: circle(); height: 103px; margin-left: -45px;" alt="img">
                   <div style="margin-left: 43px;"> <h4>USER NAME </h4>
                    </div><p style="margin-left: 23px; margin-left: 454px;" >post time details</p>
                    
                    <!-- <a class="btn btn-primary" href="cmntform.php" style=" position: absolute; right:315px; "  role="button">Comment</a> -->
                  </div>
                </div>
              </header>
              <div>
                  <img src="users/cover-1.jpeg" alt="post" height="355px"  width="850px">
              </div>
         
      </div>
      </div>
     

      <div class="cmnts">
       
            <header class=" mb-1 border-bottom">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-1 mb-lg-0 text-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="30" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                <img src="users/1633425250_your name 2.png" style="clip-path: circle(); height: 40px; margin-left: -45px; margin-right:20px;" alt="img">
                   <h5>USER NAME </h5>
                    <p style="margin-left: 23px; margin-left: 584px; margin-top: 15px;">post time details</p>
                 
                  
                  </div>
                </div>
              </header>
              <p>This is the first comment on this post</p> 
      </div>
      

  <div class="cmnts">
       
    <header class=" mb-1 border-bottom">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-1 mb-lg-0 text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="30" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <img src="users/1633425250_your name 2.png" style="clip-path: circle(); height: 40px; margin-left: -45px; margin-right:20px;" alt="img">
           <h5>USER NAME </h5>
            <p style="margin-left: 23px; margin-left: 584px; margin-top: 15px;">post time details</p>
         
          
          </div>
        </div>
      </header>
      <p>This is the second comment on this post</p> 
</div>

<div class="cmnts">
       
  <header class=" mb-1 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-1 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="30" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <img src="users/bunny-2.jpg" style="clip-path: circle(); height: 40px; margin-left: -45px; margin-right:20px;" alt="img">
         <h5>USER NAME </h5>
          <p style="margin-left: 23px; margin-left: 584px; margin-top: 15px;"><b> Comment Something ! </b> </p>
       
        
        </div>
      </div>
    </header>
   <form action="" method="POST">
     
     <div class="form-group">
   
      <textarea class="form-control" style="width: 928px; margin: 15px;" id="exampleFormControlTextarea1" placeholder="post your comment here!" rows="3"></textarea>
    <a class="btn btn-primary" type="submit" style="margin-left: 820px; margin-bottom: 10px;"  role="button">Comment</a>
    </div>
   </form>
</div>


      </div></center>

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