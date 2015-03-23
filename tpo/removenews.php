<?php
session_start();
	$tpoid = $_SESSION['s_id'];

$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);

$nid=$_POST['newsid'];


$sql="delete from news where newsid='$nid'";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
else{ 
header("location:postednews.php"); // put your home page neme here
}
?>