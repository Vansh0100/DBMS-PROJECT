<?php

session_start();
if(!isset($_SESSION['username']))
{ 
header("Location:login.html");
exit();
}

require('navabar.php');

$user_1=$_SESSION['roll_no'];
$user_2=$_POST['user_2'];
$link=mysqli_connect('localhost','root','','social',3306);
$query="INSERT INTO FRIENDS VALUES('$user_1','$user_2',now())";
$result=mysqli_query($link,$query);
if($result==false)
{
    echo mysqli_error($link);
    echo "Insert Error";
    exit();
}

$query="INSERT INTO FRIENDS VALUES('$user_2','$user_1',now())";
$result=mysqli_query($link,$query);
if($result==false)
{
    echo mysqli_error($link);
    echo "Insert Error";
    exit();
}

header("Location:home.php");


?>