<?php

session_start();

if(!isset($_POST))
{
    header("Location:login.html");
    exit();
}

$_SESSION['signup']=0;

$username=$_POST['username'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['date'];
$city=$_POST['city'];
$name=$_POST['fname'];

$link=$link=mysqli_connect('localhost','root','','social',3306);
$query="INSERT INTO USER VALUES('$roll','$username','$email','$dob','$city','','$password','','$name');";
$result=mysqli_query($link,$query);

if(!$result)
{
    header("Location:signup_fail.html");
    exit();
}

$_SESSION['signup']=1;
header("Location:signup_succes.html");

?>