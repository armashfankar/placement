<?php
session_start();
	$cid = $_SESSION['s_id'];

$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);

$jid=$_POST['jid'];


$sql="delete from job where jid='$jid'";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
else{ 
header("location:posted.php"); // put your home page neme here
}
?>