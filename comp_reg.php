<?php 
session_start();
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);

$username=$_POST['username'];

$user = "SELECT * FROM stud_login as s,comp_login as c WHERE c.username='$username'
or s.username='$username'";

//$user = "SELECT * FROM comp_login where username='$username'";

 $userresult = mysql_query($user) or die("cannot execute query");

 $usercount = mysql_num_rows($userresult);
if($usercount==1)
{
   echo "<center><h3><Font Color=red>Username Already Exist.<br><mark>Please Choose Different Username</mark><br><a href=register.php>Go Back</a></Font></h3></center>";
    die();

}
else {

$website=$_POST['website'];
$password=$_POST['password'];
$compname=$_POST['companyname'];
$repeat=$_POST['repeatpassword'];
if($password==$repeat){
    
$sql="insert into comp_login(username,password,website,companyname) values ('$username',password('$password'),'$website','$compname')";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
 
$mysql = "SELECT * FROM comp_login WHERE username='$username' and password=password('$password') ";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);

//$myname=$row['username'];
 $_SESSION['s_id'] = $row['cid'];

 if($count==1)
 {
 //session_register('username');
	header("location:company/compdata.php"); // put your home page neme here

}
else
{
header("location:compregister.php"); // put your home page neme here

}
    //if password do not match then
}
else {
    echo "Password Do Not Match"; 
    echo "<a href=register.php>"."<br>"."Go Back";
}
}
?>