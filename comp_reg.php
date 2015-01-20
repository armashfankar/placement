<?php 
session_start();
$username=$_POST['username'];
$website=$_POST['website'];
$password=$_POST['password'];
$compname=$_POST['companyname'];
$repeat=$_POST['repeatpassword'];
if($password==$repeat){
    
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);
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

?>