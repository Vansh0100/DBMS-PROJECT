<?php
$username="root";
$host="localhost";
$password="";
$database="social_network";
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    echo "not connected".mysqli_error($conn);
}
?>