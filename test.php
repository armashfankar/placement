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

//echo $username."<br>".$password;

//$mysql = "SELECT * FROM stud_login WHERE username='$username' and password=password('$password') and approval='yes'";

				$mysql1="Select * from tpo where username='$username' and password='$password'";
			        $result1 = mysql_query($mysql1) or die("cannot execute query");
				$count1 = mysql_num_rows($result1);
 				
			        $mysql2="Select * from stud_login where username='$username' and password=password('$password') and approval='yes'";
				$result2 = mysql_query($mysql2) or die("cannot execute query");
				$count2 = mysql_num_rows($result2);
 				
				if($count1==1){
				$row1 = mysql_fetch_array($result1);
 				$_SESSION['s_id'] = $row1['tid'];
				header("location:tpo/tpohome.php"); 
				}
				
			      elseif($count2==1){
				$row2 = mysql_fetch_array($result2);
 				$_SESSION['s_id'] = $row2['sid'];
				header("location:home.php"); 
				}
				else
				{
				  echo "no match found";
				}
				
		      
?>