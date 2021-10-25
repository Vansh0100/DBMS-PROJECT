<?php

session_start();
if(!isset($_SESSION['username']))
{ 
header("Location:login.html");
exit();
}

require('navabar.php');

$roll_no=$_SESSION['roll_no'];
$city=$_SESSION['city'];
$link=mysqli_connect('localhost','root','','social',3306);
$query="SELECT * FROM USER WHERE CITY='$city' AND ROLL_NO<>'$roll_no' AND ROLL_NO NOT IN (SELECT USER_2 FROM FRIENDS WHERE USER_1='$roll_no');";
$result=mysqli_query($link,$query);
if($result==false)
{
    echo mysqli_error($link);
    echo "Query Error";
    exit();
}



echo "Success!!!!";





?>