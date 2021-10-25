<?php

session_start();
if(!isset($_SESSION['username']))
{ 
  header("Location:login.html");
  exit();
}

require('navabar.php');

$username=$_SESSION['username'];
$link=mysqli_connect('localhost','root','','social',3306);
$query="SELECT PROF_PIC FROM USER WHERE USERNAME='$username';";
$result=mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
$prof_pic=$row['PROF_PIC'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>PostForm</title>
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
     <form action="addpost.php" method="POST" enctype="multipart/form-data">
     <div class="posts">
        <div class="posthdr">
            <header class="p-3 mb-3 border-bottom">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <img src="<?php echo $prof_pic ?>" style="clip-path: circle(); height: 103px; margin-left: -45px;" alt="img">
                   <div style="margin-left: 43px;"> <h4><?php echo $_SESSION['name']; ?> </h4>
                    </div>
                    <button type="submit"  style=" position: absolute; right:315px; " class="btn btn-primary">Post</button>
                    <!-- <a class="btn btn-primary" href="cmntform.php" style=" position: absolute; right:315px; "  role="button">POST</a> -->
                  </div>
                </div>
              </header>
              <div>
                  <!-- <img src="" alt="post" height="355px"  width="850px"> -->
                  <input style="position: absolute; top: 402px; left: 660px;" name="post" id="post" type="file" for="postng">
                  
              </div>
      </div>
        </div>
        
     
     <div class="form-group">
   
      <input type="text" class="form-control" style="width: 928px; margin: 15px; height: 100px;" name="content" id="content" placeholder="Mention your thoughts here! (Max 100 Words)" rows="5">
   
    </div>
   </form>
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