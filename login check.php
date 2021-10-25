<?php

session_start();

if(!isset($_POST['username']))
{
    header("Location:login.html");
    exit();
}


$username=$_POST['username'];
$password=$_POST['password'];
$link=mysqli_connect('localhost','root','','social',3306);
$query="SELECT * FROM USER WHERE USERNAME='$username' AND PASS='$password' OR ROLL_NO='$username' AND PASS='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)==0)
{
    header("Location:login_fail.html");
    exit();
}


$_SESSION['username']=$row['USERNAME'];
$_SESSION['password']=$row['PASS'];
$_SESSION['name']=$row['FNAME'];
$_SESSION['roll_no']=$row['ROLL_NO'];
$_SESSION['city']=$row['CITY'];
header("Location:home.php");

?>