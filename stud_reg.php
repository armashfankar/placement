<?php 
session_start();
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$repeat=$_POST['repeatpassword'];

if($password==$repeat){
    
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);
$username=$_POST[username];
$password=$_POST[password];
$email=$_POST[email];
$sql="insert into stud_login(username,email,password) values ('$_POST[username]','$_POST[email]','$_POST[password]')";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
 
$mysql = "SELECT * FROM stud_login WHERE username='$username' and password='$password' ";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);

//$myname=$row['username'];
 $_SESSION['s_id'] = $row['sid'];

 if($count==1)
 {
 //session_register('username');
	header("location:personaldata.php"); // put your home page neme here

}
else
{
header("location:register.php"); // put your home page neme here

}
    //if password do not match then
}
else {
    echo "Password Do Not Match"; 
    echo "<a href=register.php>"."<br>"."Go Back";
}

?>