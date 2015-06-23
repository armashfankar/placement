<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$department=$_POST['department'];
$username=$_POST['username'];
$password=$_POST['password'];
$repeat=$_POST['repeatpassword'];

if($password==$repeat){
echo $fullname."<br>".$email."<br>".$department."<br>".$username."<br>".$password; }
else {
    echo "Password Do Not Match"; }

?>