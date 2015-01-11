<?php 
session_start();
$studentid = $_SESSION['s_id'];
            
$password=$_POST['password'];
$repeat=$_POST['repeatpassword'];
if($password==$repeat){
    
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);
$sql="update stud_login set password='$password' where sid='$studentid'";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
} 
else
{
header("location:home.php"); // put your home page neme here
}
    //if password do not match then
}
else {
    echo "Password Do Not match, Not Updated"; 
    echo "<a href=updateprofile.php>"."<br>"."Go Back";
}

?>