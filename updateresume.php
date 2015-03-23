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
	
			

$allowedExts = array("doc", "docx", "pdf");
$extension = end(explode(".", $_FILES["myresume"]["name"]));
if (($_FILES["myresume"]["type"] == "application/pdf")
|| ($_FILES["myresume"]["type"] == "application/msword")
|| ($_FILES["myresume"]["type"] == "application/msword")
&& ($_FILES["myresume"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
{
if ($_FILES["myresume"]["error"] > 0)
{
echo "Return Code: " . $_FILES["myresume"]["error"] . "<br>";
}
else
{
echo "Upload: " . $_FILES["myresume"]["name"] . "<br>";
echo "Type: " . $_FILES["myresume"]["type"] . "<br>";
echo "Size: " . ($_FILES["myresume"]["size"] / 200000) . " kB<br>";
echo "Temp file: " . $_FILES["myresume"]["tmp_name"] . "<br>";

if (file_exists("resume/" . $_FILES["myresume"]["name"]))
  {
  echo $_FILES["myresume"]["name"] . " already exists. ";
  }
else
  {
  move_uploaded_file($_FILES["myresume"]["tmp_name"],
  "resume/" . $_FILES["myresume"]['name']);
  $filename=$_FILES["myresume"]["name"];
  
    $sql1="UPDATE student_info SET filename='$filename' WHERE sid='$studentid'"; 
        if (!mysql_query($sql1,$con))
        {
        die('Error: ' . mysql_error());
        }
        header('Location:updateprofile.php');
  }
 }
 }
else
{
echo "Invalid file";
 }

?>
