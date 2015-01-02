<?php
$compname=$_POST['companyname'];
$email=$_POST['email'];
$website=$_POST['website'];
$username=$_POST['username'];
$password=$_POST['password'];
$repeat=$_POST['repeatpassword'];

if($password==$repeat){
echo $compname."<br>".$email."<br>".$website."<br>".$username."<br>".$password; }
else {
    echo "Password Do Not Match"; }

?>