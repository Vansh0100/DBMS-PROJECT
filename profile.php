<?php
session_start();
include('connection.php');
if(isset($_SESSION['IS_AUTHENTICATED'])&&$_SESSION['IS_AUTHENTICATED'] == 1){ 
    require('navabar.php'); }
    $user_eml=$_SESSION['user_email'];
    // $user_eml="vinnu@gmail.com";
    $get_user="SELECT * from `users` where user_email='$user_eml'";
    $run_user=mysqli_query($conn,$get_user);
   
    while($row=mysqli_fetch_array($run_user)){
    $user_id=$row['user_id'];
    $user_name=$row['Name'];
    $user_username=$row['user_name'];
    $user_image=$row['user_image'];
    $user_cover=$row['user_cover']; 
    $user_num=$row['Rollno'];
    // $user_desc=$row['describe_user'];
    // $user_gender=$row['user_gender'];
    $user_bdy=$row['user_birthday'];
    $user_state=$row['user_state'];
    $user_city=$row['user_city'];
    $user_email=$row['user_email'];
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      *{
        /* background-color: rgb(27, 5, 5); */

      }
      .about{
            position: relative;
            right: 255px;
            margin: 15px;
            width: 650px;
            /* height: 500px; */
            border: solid maroon;
            background-color: rgb(230, 207, 179);
            border-radius: 28px;
            padding: 36px;
      }
      
      .cover{
        margin: 1px;
        border: black solid;
        height: 404px;  
        width: 1055px;
      }
      .profiletotal{
        border: black solid;
        /* height: 4004px;   */
        margin: 15px;
        width: 1061px;
        }
        .coverdown{
          margin: 25px;
          margin-top: -275px;
          height: 245px;
          width: 1061px;
        }
      .prfl{
          float: left;
          width: 250px;
          height: 250px;
          clip-path: circle();
        }
        .posts{
          margin: 15px;
          margin-top: 25px;
            border: black solid;
            height: 550px;
            width: 995px;
        }
    </style>
    <title><?php echo "$user_name"; ?></title>
  </head>
  <body>
   

  <center> <div class="profiletotal"> 
      <div class="cover">
      <img style="height: 400px;" src="users/<?php echo $user_cover; ?>" class="d-block w-100" alt="img!">
      </div>
     
     <div class="coverdown">
              <img class="prfl" src="users/<?php echo $user_image; ?>">
          
            <a class="btn btn-primary" href="updateform.php" style="  margin-left: 594px; margin-top: 220px;"  role="button">Update Profile</a>
     </div>
     
      <div class="abtbox">
     <div class="col-sm-2 aboutbox" >
      <br>
       <?php
        echo "<div class='about'><center><strong><h2 style='font-family: Georgia' >About</h2></strong></h2></center><br>
        <center><h3 style='font-family: Georgia;'>$user_name </h3></center>
        <p><center><b style='font-family: Segoe UI;' >$user_num</b></center></p>
      <center> <p style='font-family:  Segoe UI;'>$user_email</p></center>
        <center> <p style='font-family:  Segoe UI;'>$user_username</p></center>
        <center> <p style='font-family:  Segoe UI;'>$user_state</p></center>
        <center><p style='font-family:  Segoe UI;'>$user_city</p></center>
        <center><p style='font-family:  Segoe UI;'></p></center>

        <center></center></div> "
       ?>
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
                 <div style="margin-left: 43px;"> <h4>PROFILE USER NAME </h4>
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
                    <img src="users/bunny-2.jpg" style="clip-path: circle(); height: 103px; margin-left: -45px;" alt="img">
                   <div style="margin-left: 43px;"> <h4>PROFILE USER NAME </h4>
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
                      <img src="users/bunny-2.jpg" style="clip-path: circle(); height: 103px; margin-left: -45px;" alt="img">
                     <div style="margin-left: 43px;"> <h4>PROFILE USER NAME </h4>
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

























































































