<?php 
session_start();
			$compid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from comp_login where cid='{$compid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				$username = $row['username'];
                $cid= $compid;      
$compname=$_POST['compname'];
$department=$_POST['department'];
$domain=$_POST['domain'];
$location=$_POST['job_location'];
$job_role=$_POST['job_role'];
$salary=$_POST['salary'];
$ssc=$_POST['ssc'];
$hsc=$_POST['hsc'];
$dip=$_POST['diploma_agg'];
$deg=$_POST['deg_agg'];
$venue=$_POST['venue'];
$sql1="INSERT INTO job( compname,department,domain,job_location,job_role,salary,ssc
,hsc,diploma_agg,deg_agg,venue) 
VALUES
('$compname','$department','$domain','$location','$job_role','$salary','$ssc','$hsc','$dip','$deg','$venue')"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
header('Location:comphome.php');

?>