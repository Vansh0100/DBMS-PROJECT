<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
   
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
    margin: 10px;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.884);
    color: white;
    font-style: italic;
      }
      .tablewhole {
    width: 836px;
    height: 630px;
    border: darkorange solid 5px;
    margin-left: 329px;
    margin-top: 68px;
    padding: 46px;
    border-radius: 67px; 
}
  </style>
</head>
<body>
    <div class="row tablewhole" >
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center; margin-bottom: 20px;"><strong>Update Your Account</strong></h3>
                </div>
                <div class="l-part">
                    <form action="insert_user.php" method="POST" enctype="multipart/form-data" >
                        <div class="input-group ">
                            <!-- <span class="input-group-addon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span> -->
                            <input type="text" name="f_name" class="form-control" placeholder="Name" required="required">
                        </div><br>
                        <div class="input-group">
                            <!-- <span class="input-group-addon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span> -->
                            <input type="text" name="Rollno" class="form-control" placeholder="Rollno" required="required">
                        </div><br>
                        <div class="input-group">
                            <!-- <span class="input-group-addon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span> -->
                            <input type="text" name="user_name" class="form-control" placeholder="username" required="required">
                        </div><br>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="u_state" placeholder="State">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="u_city" placeholder="City" >
                        </div>
                        </div><br>
                        <div class="row">
                        <div class="col">
                            <label for="user_cover">Cover image</label>
                            <input type="file" id="user_cover" class="form-control" name="user_cover" >
                        </div>
                        <div class="col">
                            <label for="user_profile">Profile image</label>
                            <input type="file" id="user_profile" class="form-control" name="user_profile"  >
                        </div>
                        </div><br>
                        <div class="input-group">
                            <!-- <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                            </span> -->
                            <input type="password" name="u_pass" class="form-control" placeholder="password" required="required">
                        </div><br>
                        <div class="input-group">
                            <!-- <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span> -->
                            <input type="email" name="u_email" class="form-control" placeholder="Email: abc@gmail.com" required="required">
                        </div><br>
                        <div class="input-group">
                            <!-- <span class="input-group-addon">
                                <i class="glyphicon glyphicon-chevron-down"></i>
                            </span> -->
                            <select class="form-control input-md" name="u_gender" id="gender" placeholder="Gender" required="required">
                                <option selected disabled>Select your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="date" class="form-control input-md" placeholder="Date of Birth" name="u_birthday" required="required">
                        </div><br>
                      
                   <center><a style="text-decoration: none; float: left; margin-left: 23px;" href="profile.php"><button type="button" class="btn btn-outline-success login"><p style="font-size: 25px; margin-left: 253px; margin-top: 15px;">&ensp; UPDATE &ensp;</p></button></a></center>
                   <!-- <a style="text-decoration: none; float: right;  margin-right: 23px;" href="main.php"><button type="submit" class="btn btn-outline-warning signin" name="sign_up">Sign In</button></a> -->
                   <!-- <input style="text-decoration: none; float: right;  margin-right: 23px;" type="submit" name="submit" value="sign_in" class="btn btn-outline-warning signin" > -->
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>