<?php
 
 include("connection.php");

// if($_SERVER["REQUEST_METHOD"]=="POST")
if($_POST['submit']=='sign_in'){
    $first_name=$_POST['f_name'];
    $Rollno=$_POST['Rollno'];
    $user_name=$_POST['user_name'];
    $pass=$_POST['u_pass'];
    $email=$_POST['u_email'];
    $gender=$_POST['u_gender'];
    $state=$_POST['u_state'];
    $city=$_POST['u_city'];
    $birthday=$_POST['u_birthday'];
    $cover=time().'_'.$_FILES['user_cover']['name'];
    $profile=time().'_'.$_FILES['user_profile']['name'];
    $target1='users/'.$profile;
    $target2='users/'.$cover;

    move_uploaded_file($_FILES['user_profile']['tmp_name'],$target1);
    move_uploaded_file($_FILES['user_cover']['tmp_name'],$target2);

    $status="verified";
    $posts="no";
  
    // $newgid=sprintf('%05d',rand(0,999999))
    $check_username_query="select user_name from users where user_email='$email'";
    $run_username=mysqli_query($conn,$check_username_query);
    if(strlen($pass)<6){
        echo "<script>alert('Password must be of atleast 6 charachters')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
        exit();
    }

    $check_email="SELECT * from users where user_email = '$email'";
    $run_email=mysqli_query($conn,$check_email);
    $check = mysqli_num_rows($run_email);
    if($check == 1){
        echo "<script>alert('You already have an account please Log In')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
        exit();
    }else{
        echo "error".mysqli_error($conn);
    }
    // $rand = rand(1,3); 
    // if($rand == 1){
    //     $profile_pic="bunny-2.jpg";
    // }else if($rand == 2){
    //     $profile_pic="butterfly.jpg";
    // }else if($rand == 3){
    //     $profile_pic="cat-3.jpg";
    // }
    $insert=" INSERT INTO `users` ( `Name`, `user_name`, `Rollno`, `describe_user`, `user_pass`, `user_email`, `user_state`, `user_city`, `user_gender`, `user_birthday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `posts`, `recovery_account`) VALUES ( '$first_name', '$user_name', '$Rollno', 'I am a human being ! :)', '$pass', '$email','$state','$city','$gender','$birthday','$profile','$cover', current_timestamp(), '$status','$posts','recovery is to secure your account')";

    $query=mysqli_query($conn,$insert) ;
    if($query){
        echo "<script>alert('Congrats Your account has been created, please login')</script>";
        echo "<script>window.open('main.php','_self')</script>";
        exit();
    }else{
        echo "<script>alert(' Sorry, registration failed ! please try again :) ')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
        mysqli_error($conn);
        exit();
    }
}
?>

<!-- CREATE TABLE `social_network`.`users` ( `user_id` INT(11) NOT NULL AUTO_INCREMENT , `Name` TEXT NOT NULL , `user_name` VARCHAR(66) NOT NULL , `Rollno` VARCHAR(15) NOT NULL , `describe_user` VARCHAR(360) NOT NULL , `user_pass` VARCHAR(66) NOT NULL , `user_email` VARCHAR(250) NOT NULL , `user_state` TEXT NOT NULL , `user_city` TEXT NOT NULL , `user_gender` TEXT NOT NULL , `user_birthday` DATE NOT NULL , `user_image` VARCHAR(350) NOT NULL , `user_cover` VARCHAR(350) NOT NULL , `user_reg_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` TEXT NOT NULL , `posts` TEXT NOT NULL , `recovery_account` VARCHAR(266) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB; -->
<!-- 
"insert into users (Name,user_name,Rollno,describe_user,user_pass,user_email,user_state,user_city,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account)
    values('$first_name','$user_name','$Rollno','I am a human being ! :)','$pass','$email','$state','$city','$gender','$birthday','$profile_pic','cover-1.jpeg',NOW(),'$status','$posts','recovery is to secure your account')"; -->

    <!-- $first_name=htmlentities(mysqli_real_escape_string($con,$_POST['f_name']));
    $Rollno=htmlentities(mysqli_real_escape_string($con,$_POST['Rollno']));
    $user_name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
    $gender=htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
    $state=htmlentities(mysqli_real_escape_string($con,$_POST['u_state']));
    $city=htmlentities(mysqli_real_escape_string($con,$_POST['u_city']));
    $birthday=htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday'])); -->