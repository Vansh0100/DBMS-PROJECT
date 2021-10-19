<?php
    session_start();

    // if(!isset($_SESSION['username']))
    // { 
    //   header("Location:login.html");
    //   exit();
    // }

    $name=$_POST['name'];
    $roll_no=$_POST['rollno'];
    $username=$_SESSION['username'];
    $city=$_POST['city'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];

    //For uploading Profile Image

    $prof_target_dir = "prof/";
    $prof_target_file = $prof_target_dir . basename($_FILES["user_profile"]["name"]);
    if($_FILES['user_profile']['error']!=0)
    {
        echo "prof_Error";
        exit();
    }
    move_uploaded_file($_FILES["user_profile"]["tmp_name"], $prof_target_file);
    // {
    //     header("Location:profile.php");
    //     exit();
    // }
    // else
    // {
    //     echo "Sorry, there was an error uploading your file.";
    // }

    // For Uploading Cover Pic

    $cover_target_dir = "cover/";
    $cover_target_file = $cover_target_dir . basename($_FILES["user_cover"]["name"]);
    if($_FILES['user_cover']['error']!=0)
    {
        echo "cover_Error";
        exit();
    }
    move_uploaded_file($_FILES["user_cover"]["tmp_name"], $cover_target_file);
    // {
    //     header("Location:profile.php");
    //     exit();
    // }
    // else
    // {
    //     echo "Sorry, there was an error uploading your file.";
    // }

    // Updating User Table in Sql

    $link=mysqli_connect('localhost','root','','social',3306);
    $query="UPDATE USER SET EMAIL='$email',DOB='$dob',CITY='$city',PROF_PIC='$prof_target_file',PASS='$password',COVER_PIC='$cover_target_file',FNAME='$name' WHERE USERNAME='$username' OR ROLL_NO='$roll_no';";
    $result=mysqli_query($link,$query);
    if($result==false)
    {
        echo mysqli_error($link);
        echo"query_Error";
        exit();
    }
    else
    {
        header("Location:profile.php");
        exit();
    }
?>