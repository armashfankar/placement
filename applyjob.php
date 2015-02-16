<?php

session_start();
	$sid = $_SESSION['s_id'];
$jid=$_POST['jid'];
$sid=$_POST['sid'];
$compname=$_POST['companyname'];
$fullname=$_POST['fullname'];

$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);



$sql="insert into applied_stud (jid,sid,companyname,fullname) values ('$jid','$sid',
'$compname','$fullname')";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
else{ 
header("location:latestjobs.php"); // put your home page neme here
}


?>