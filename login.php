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

/* multilogin code*/
 $mysql = "SELECT * FROM stud_login WHERE username='$username' and password=password('$password') and approval='yes'";
$mysql2 = "SELECT * FROM tpo WHERE username='$username' and password='$password' ";
$mysql3 = "SELECT * FROM comp_login WHERE username='$username' and password=password('$password') and approval='yes'";

 $result = mysql_query($mysql) or die("cannot execute query");
$result2 = mysql_query($mysql2) or die("cannot execute query");
$result3 = mysql_query($mysql3) or die("cannot execute query");

 $count = mysql_num_rows($result);
 $count2 = mysql_num_rows($result2);
$count3 = mysql_num_rows($result3);

$row1 = mysql_fetch_array($result);
$row2 = mysql_fetch_array($result2);
$row3 = mysql_fetch_array($result3);


 if($count==1)
 {
	 $_SESSION['s_id'] = $row1['sid'];

 //session_register('username');
	header("location:home.php"); // student home page

}

 elseif($count2==1) {
      $_SESSION['s_id'] = $row2['tid'];
	header("location:tpo/tpohome.php");  //tpo home page
}
elseif($count3==1) {
     $_SESSION['s_id'] = $row3['cid'];
	header("location:company/comphome.php");  //comp home page
}
else 
	header("location:approval.php"); //if both condition not satisfied


/*   NORMAL LOGIN
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
*/
 ?>