<?php

session_start();
if(!isset($_SESSION['username']))
{ 
  header("Location:login.html");
  exit();
}

require('navabar.php');

$link=mysqli_connect('localhost','root','','social',3306);
$post_id=$_POST['post_id'];
$query1="SELECT * FROM USER,COMMENT WHERE COMMENT.ROLL_NO=USER.ROLL_NO AND COMMENT.POST_ID='$post_id';";
$result1=mysqli_query($link,$query1);
if($result1==false)
  {
      echo mysqli_error($link);
      echo"Error";
      exit();
  }

$query2="SELECT * FROM POST WHERE POST_ID='$post_id';";
$result2=mysqli_query($link,$query2);

if($result2==false)
  {
      echo mysqli_error($link);
      echo"Error";
      exit();
  }
$name=$_POST['name'];
$prof_pic=$_POST['prof_pic'];

?>

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
  
  <center><div class='profiletotal'>
   <?php
    // Post On which comments are Made
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
                echo "</div>";
                echo "</div>";
            echo "</header>";
            echo "<div>";
            echo "<img src='$path' alt='post' height='355px'  width='850px'>";
         echo "</div>";
         
        echo "</div>";
    echo "</div>";
    echo "<div class='your_post' style='border: 3px solid black;width: 996px;height: 90px; text-align:left; padding:7px; font-weight:bold; margin-bottom:10px;'>";
            echo $content;
    echo "</div>";
      }
     
      //Comments Section Begins
     
      while ($row1 = mysqli_fetch_assoc($result1))
      {
        $commentor_pic=$row1['PROF_PIC'];
        $commentor_name=$row1['FNAME'];
        $comment=$row1['CONTENT'];
        echo "<div class='cmnts'>";
            
          echo "<header class='mb-1 border-bottom'>";
          echo "<div class='container'>";
                echo "<div class='d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start'>";
                  echo "<a href='/' class='d-flex align-items-center mb-1 mb-lg-0 text-dark text-decoration-none'>";
                    echo "<svg class='bi me-2' width='40' height='30' role='img' aria-label='Bootstrap'><use xlink:href='#bootstrap'></use></svg>";
                  echo "</a>";
                  echo "<img src='$commentor_pic' style='clip-path: circle(); height: 40px; margin-left: -45px; margin-right:20px;' alt='img'>";
                echo "<h5>$commentor_name</h5>";

                echo "</div>";
              echo "</div>";
            echo "</header>";
            echo "<p style='text-align:left;padding:10px;'>$comment</p>"; 
        echo "</div>";
      }
  ?>

<div class="cmnts">
       
  <header class=" mb-1 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-1 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="30" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <img src="<?php echo $prof_pic;?>" style="clip-path: circle(); height: 40px; margin-left: -45px; margin-right:20px; margin-top:10px" alt="img">
         <h5 style="margin-top:13px;"><?php echo $_SESSION['name'];?> </h5>
          <p style="margin-left: 23px; margin-left: 584px; margin-top: 15px;"><b> Comment Something ! </b> </p>
       
        
        </div>
      </div>
    </header>
   <form action="addcmnt.php" method="POST">
     
     <div class="form-group">
      <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
      <input type="text" name="comment" id="comment" class="form-control" style="width: 928px; margin: 15px;" placeholder="Post your comment here!" rows="3"></textarea>
    <input type="submit" class="btn btn-primary" style="margin-left: 820px; margin-bottom: 10px;" value="Comment">
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