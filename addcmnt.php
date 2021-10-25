<?php
session_start();
if(!isset($_SESSION['username']))
{ 
header("Location:login.html");
exit();
}

require('navabar.php');

$comment=$_POST['comment'];
$roll_no=$_SESSION['roll_no'];
$post_id=$_POST['post_id'];

$link=mysqli_connect('localhost','root','','social',3306);
$query="INSERT INTO COMMENT VALUES('$roll_no','$post_id','$comment');";
$result=mysqli_query($link,$query);
if($result==false)
{
    echo mysqli_error($link);
    echo"Insert_Error";
    exit();
}
else
{
    header("Location:profile.php");
    exit();
}


?>