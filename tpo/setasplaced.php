<?php 
session_start();
$tpoid = $_SESSION['s_id'];

$sid=$_POST['sid'];
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
	

$sql1="UPDATE student_info SET placed='yes' WHERE sid='$sid'"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
header('Location:approvedstud.php');

?>