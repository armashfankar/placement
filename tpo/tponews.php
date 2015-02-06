<?php 
session_start();
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("placement",$conn);

$title=$_POST['title'];
$date=$_POST['date'];
$description=$_POST['description'];
$venue=$_POST['venue'];
$contact=$_POST['contact'];
$email=$_POST['email'];




$sql="insert into news(title,date,description,venue,contact,email) values ('$title','$date','$description','$venue','$contact','$email')";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
else{ 
header("location:tpohome.php"); // put your home page neme here
}
?>