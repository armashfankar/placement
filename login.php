 <?php
session_start();
$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");


if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }
mysql_select_db("placement", $con);
$username=$_POST['username'];
$password=$_POST['password'];



 $mysql = "SELECT * FROM stud_login WHERE username='$username' and password='$password' and approval='yes'";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);

//$myname=$row['username'];
 $_SESSION['s_id'] = $row['sid'];

 if($count==1)
 {
 //session_register('username');
	header("location:home.php"); // put your home page neme here

}

 else
    header("location:approval.php");

 ?>