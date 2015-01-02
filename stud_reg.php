<?php 
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$repeat=$_POST['repeatpassword'];

if($password==$repeat){
echo $userpname."<br>".$email."<br>".$password; }
else {
    echo "Password Do Not Match"; }

?>