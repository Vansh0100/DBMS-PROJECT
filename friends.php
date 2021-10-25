<?php

session_start();
if(!isset($_SESSION['username']))
{ 
header("Location:login.html");
exit();
}

require('navabar.php');

$roll_no=$_SESSION['roll_no'];
$link=mysqli_connect('localhost','root','','social',3306);

$query="SELECT * FROM USER,FRIENDS WHERE FRIENDS.USER_1='$roll_no' AND FRIENDS.USER_2=USER.ROLL_NO ;";

$result=mysqli_query($link,$query);
if($result==false)
{
    echo mysqli_error($link);
    echo "Query Error";
    exit();
}

// echo "Success!!!!";

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
        .frndcontainer{
            
            margin-top: 19px;
        }
        .srchbar{
            margin: 15px;
            width: 995px;
            margin-bottom: 35px;
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
            height: 85px;
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
    
  <?php
    if(mysqli_num_rows($result)!=0)
    {
        echo "<center><div class='profiletotal'>";
    }
      
      
       while ($row = mysqli_fetch_assoc($result))
       {
        $prof_pic=$row['PROF_PIC'];
        $frname=$row['FNAME'];
        $roll_no=$row['ROLL_NO'];
      echo "<div class='cmnts'>";
       
       echo "<header class='mb-1'>";
           echo "<div class='frndcontainer'>";
             echo "<div class='d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start'>";
               echo "<a href='/' class='d-flex align-items-center mb-1 mb-lg-0 text-dark text-decoration-none'>";
                 echo "<svg class='bi me-2' width='40' height='30' role='img' aria-label='Bootstrap'><use xlink:href='#bootstrap'></use></svg>";
               echo "</a>";
           echo "<img src='$prof_pic' style='clip-path: circle(); height: 50px; margin-left: -45px; margin-right:20px;' alt='img'>";
              echo "<h5 style='margin-left: 15px;margin-top: 9px;'>$frname</h5>";
               echo "<!-- <p style='margin-left: 23px; margin-left: 584px; margin-top: 15px;'>post time details</p> -->";
               echo "<form action='remvfrnd.php' method=POST>";
                  echo "<input type='hidden' name='user_2' value='$roll_no'>";
               echo "<input type='submit' class='btn btn-primary' style='width: 180px; margin-left: 520px;' value='Remove'>";
             
             echo "</div>";
             echo "</div>";
         echo "</header>";
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