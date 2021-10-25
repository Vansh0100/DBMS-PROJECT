<?php

session_start();
if(!isset($_SESSION['username']))
{ 
header("Location:login.html");
exit();
}

require('navabar.php');

$roll_no=$_SESSION['roll_no'];
$user_2=$_POST['user_2'];
$link=mysqli_connect('localhost','root','','social',3306);

$query="DELETE FROM FRIENDS WHERE USER_1='$roll_no' AND USER_2='$user_2' OR USER_1='$user_2' AND USER_2='$roll_no';";

$result=mysqli_query($link,$query);
if($result==false)
{
    echo mysqli_error($link);
    echo "Query Error1";
    exit();
}


if($result==false)
{
    echo mysqli_error($link);
    echo "Query Error2";
    exit();
}

header("Location:home.php");

?>