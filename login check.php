<?php

session_start();

// if(!isset($_P))
// {
//     header("Location:login.html");
//     exit();
// }


$username=$_POST['username'];
$password=$_POST['password'];
$link=mysqli_connect('localhost','root','','social',3306);
$query="SELECT * FROM USER WHERE USERNAME='$username' AND PASS='$password' OR ROLL_NO='$username' AND PASS='$password'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)==0)
{
    header("Location:login_fail.html");
    exit();
}

$_SESSION['user']=1;
$_SESSION['username']=$username;
$_SESSION['pass']=$password;
header("Location:profile.php");

?>