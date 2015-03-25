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
	
				$sql = "SELECT * from stud_login where sid='{$studentid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				$username = $row['username'];
                $sid= $studentid;      
$fullname=$_POST[fullname];
$dob=$_POST[dob];
$gender=$_POST[gender];
$address=$_POST[address];
$about_you=$_POST[about_you];
$institute=$_POST[institute];
$university=$_POST[university];
$department=$_POST[department];
$batch=$_POST[batch];
$deg_sem1=$_POST[deg_sem1];
$deg_sem2=$_POST[deg_sem2];
$deg_sem3=$_POST[deg_sem3];
$deg_sem4=$_POST[deg_sem4];
$deg_sem5=$_POST[deg_sem5];
$deg_sem6=$_POST[deg_sem6];
$deg_sem7=$_POST[deg_sem7];
$deg_sem8=$_POST[deg_sem8];

$deg_agg=$_POST[deg_agg];
$diploma_agg=$_POST[diploma_agg];
$hsc=$_POST[hsc];
$ssc=$_POST[ssc];
$kt=$_POST[kt];
$key_skills=$_POST[key_skills];
$project_title=$_POST[project_title];

$sql1="INSERT INTO student_info(sid,username,fullname,dob,gender,address,about_you,institute,university
,department,batch,deg_sem1,deg_sem2,deg_sem3,deg_sem4,deg_sem5,deg_sem6,deg_sem7,deg_sem8,deg_agg,diploma_agg,kt,hsc,ssc,key_skills,project_title) 
VALUES
('$sid','$username','$fullname','$dob','$gender','$address','$about_you','$institute','$university','$department','$batch','$deg_sem1','$deg_sem2','$deg_sem3','$deg_sem4','$deg_sem5','$deg_sem6','$deg_sem7','$deg_sem8','$deg_agg','$diploma_agg','$kt','$hsc','$ssc','$key_skills','$project_title')"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
header('Location:success_reg.php');

?>