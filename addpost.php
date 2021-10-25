<?php

session_start();
if(!isset($_SESSION['username']))
{ 
  header("Location:login.html");
  exit();
}

$link=mysqli_connect('localhost','root','','social',3306);
$content=$_POST['content'];

// For Uploading Picture

$post_target_dir = "post/";
$post_target_file = $post_target_dir . basename($_FILES["post"]["name"]);
if($_FILES['post']['error']!=0)
{
    echo "post_Error";
    exit();
}
move_uploaded_file($_FILES["post"]["tmp_name"], $post_target_file);

 // Updating Post Table in Sql

$roll_no=$_SESSION['roll_no'];
$query="INSERT INTO POST(PICTURE,CONTENT,ROLL_NO,DATE_POSTED) VALUES('$post_target_file','$content','$roll_no',now());";
$result=mysqli_query($link,$query);

if($result==false)
    {
        echo mysqli_error($link);
        echo"post_Error";
        exit();
    }
else
{
    header("Location:profile.php");
    exit();
}

?>