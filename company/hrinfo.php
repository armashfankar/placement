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
$companyname=$_POST['companyname'];
$website=$_POST['website'];
$landline=$_POST['landline'];
$fax=$_POST['fax'];
$career=$_POST['career'];
$address=$_POST['address'];
$estb=$_POST['estb_year'];
$hrname=$_POST['hrname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$sql1="INSERT INTO comp_info(cid,username,companyname,website,landline,fax,career,estb_year,address
,hrname,email,mobile) 
VALUES
('$cid','$username','$companyname','$website','$landline','$fax','$career','$estb','$address','$hrname','$email','$mobile')"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
header('Location:success_reg.php');

?>