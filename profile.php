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
  $query1="SELECT * FROM USER WHERE USERNAME='$username' OR ROLL_NO='$username'";
  $result1=mysqli_query($link,$query1);
  $row1 = mysqli_fetch_assoc($result1);

  $name=$_SESSION['name'];
  $roll_no=$_SESSION['roll_no'];
  $email=$row1['EMAIL'];
  $dob=$row1['DOB'];
  $city=$row1['CITY'];
  $prof_pic=$row1['PROF_PIC']; 
  $cover_pic=$row1['COVER_PIC'];

  $query2="SELECT * FROM POST WHERE ROLL_NO='$roll_no';";
  $result2=mysqli_query($link,$query2);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
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
    <title><?php $username; ?></title>
  </head>
  <body>
   

  <center> <div class="profiletotal"> 
      <div class="cover">
      <img style="height: 400px;" src="<?php echo $cover_pic; ?>" class="d-block w-100" alt="img!">
      </div>
     
     <div class="coverdown">
              <img class="prfl" src="<?php echo $prof_pic; ?>">
          
            <a class="btn btn-primary" href="updateform.php" style="  margin-left: 594px; margin-top: 220px;"  role="button">Update Profile</a>
     </div>
     
      <div class="abtbox">
     <div class="col-sm-2 aboutbox" >
      <br>
       <?php

        echo "<div class='about'><center><strong><h2 style='font-family: Georgia' >About</h2></strong></h2></center><br>";
        echo "<center><h3 style='font-family: Georgia;'> ".$name."</h3></center>";
        echo "<p><center><b style='font-family: Segoe UI;' >".$email."</b></center></p>";
        echo "<center> <p style='font-family:  Segoe UI;'>".$roll_no."</p></center>";
        echo "<center> <p style='font-family:  Segoe UI;'>".$dob."</p></center>";
        echo "<center> <p style='font-family:  Segoe UI;'>".$city."</p></center>";
        // echo "<center><p style='font-family:  Segoe UI;'>".$user_city."</p></center>";
        echo "<center><p style='font-family:  Segoe UI;'></p></center>";
        echo "<center></center></div>";

       ?>
     </div>
     </div>
     
    <?php
      while ($row2 = mysqli_fetch_assoc($result2))
      {
        $path=$row2['PICTURE'];
        $date=$row2['DATE_POSTED'];
        $content=$row2['CONTENT'];
        echo "<div class='posts'>";
      echo "<div class='posthdr'>";
          echo "<header class='p-3 mb-3 border-bottom'>";
              echo "<div class='container'>";
                echo "<div class='d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start'>";
                  echo "<a href='/' class='d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none'>";
                    echo "<svg class='bi me-2' width='40' height='32' role='img' aria-label='Bootstrap'><use xlink:href='#bootstrap'></use></svg>";
                  echo "</a>";
                  echo "<img src='$prof_pic' style='clip-path: circle(); height: 103px; margin-left: -45px;' alt='img'>";
                 echo "<div style='margin-left: 43px;'> <h4>$name</h4>";
                  echo "<p>$date</p></div>";
                  
                  echo "<a class='btn btn-primary' href='cmntform.php' style=' position: absolute; right:315px; '  role='button'>Comment</a>";
                echo "</div>";
              echo "</div>";
            echo "</header>";
            echo "<div>";
               echo "<img src='$path' alt='post' height='355px'  width='850px'>";
            echo "</div>";
    echo "</div>";
      echo "</div>";
      echo "<div class='your_post' style='border: 3px solid black;width: 996px;height: 200px; text-align:left; padding:7px; font-weight:bold; margin-bottom:10px;'>";
            echo $content;
    echo "</div>";
      }
     
      ?>
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


