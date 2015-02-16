<?php 
session_start();
			$tpoid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				$username = $row['username'];
                $fullname1 = $row['fullname'];
                $tid= $tpoid;   
            
                $name=$_POST['name'];
                $degree=$_POST['degree'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
               

$sql1="UPDATE tpo_info SET name='$name',degree='$degree',email='$email',mobile='$mobile' WHERE tid='$tid'"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
header('Location:tpohome.php');

?>