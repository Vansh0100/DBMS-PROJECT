<?php
if($_POST['submit']=='login'){
    $user1_email=$_POST['email'];
    $password1=$_POST['password'];
   
    if($user1_email && $password1){
$username="root";
$host="localhost";
$password="";
$database="social_network";
$conn=mysqli_connect($host,$username,$password,$database);
       $count=0;
        $sql1="SELECT * FROM users WHERE user_email='$user1_email' ";
        $res1=mysqli_query($conn,$sql1);
        if(!$res1){
            include("main.php");
            echo '<center>Please Enter a valid userId and password</center>';
            exit();   
        }
        while($row=mysqli_fetch_array($res1)){
            $useem=$row['user_email'];
            $pass=$row['user_pass'];
        }
 
        if($useem == $user1_email && $pass==$password1){
            $count=1;
        }else{  
            include("main.php");
            echo "<script>alert('Please Enter a valid userId and password !')</script>";
        exit();
        }
       
        if($count==1){
            session_start(); 
            $_SESSION['IS_AUTHENTICATED'] = 1; 
            $_SESSION['user_email'] = $useem; 
            header('location:home.php');}
            else{
            include('main.php');
            echo '<center>Please Enter a valid userId and password</center>';
            exit();
        }
    }else{
        include('main.php');
        echo "<script>alert('Please Enter proper values')</script>";
        exit();
    }
}else{
    header("location: login.php");
    exit();
}
?>