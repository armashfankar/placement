<?php 
session_start();
			$studentid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from student_info where sid='{$studentid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				$username = $row['username'];
                $sid= $studentid;      
                $fullname=$_POST['fullname'];
                $dob=$_POST['dob'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                $about_you=$_POST['about_you'];
                $institute=$_POST['institute'];
                $university=$_POST['university'];
                $department=$_POST['department'];
                $batch=$_POST['batch'];
                $deg_sem7=$_POST['deg_sem7'];
                $deg_sem8=$_POST['deg_sem8'];
                $deg_agg=$_POST['deg_agg'];
                $diploma_agg=$_POST['diploma_agg'];
                $hsc=$_POST['hsc'];
                $ssc=$_POST['ssc'];
                $key_skills=$_POST['key_skills'];
                $project_title=$_POST['project_title'];


$sql1="UPDATE student_info SET fullname='$fullname',dob='$dob',gender='$gender',address='$address'
WHERE sid=$sid"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
header('Location:home.php');

?>