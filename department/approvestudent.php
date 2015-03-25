<?php 
session_start();
$did = $_SESSION['s_id'];

$sid=$_POST['sid'];
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
	

$sql1="UPDATE stud_login SET approval='yes' WHERE sid='$sid'"; 


if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
                //EMAIL CODE BELOW FOR NOTIFYING APPROVAL

include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name

	$sql = "SELECT * from stud_login where sid='$sid'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				//$username = $row['username'];
				$email = $row['email'];
//$email = $_POST["email"];
	$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("reply@placemnt.com", "Placement Reply"); //reply-to address
	$mail->SetFrom("info@placement.com", "Placement Cell"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "Your Placement Account Activation "; //Subject od your mail
	$mail->AddAddress($email, "placement cell"); //To address who will receive this email
	$mail->MsgHTML("<b>Hello<p style=font-family:Acadian;
                            font-size:1.2em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;>
You are approved by TPO now your account is active,you can login to access the services. <br><br>
Regards Placement Cell</pre>
<br>
<img src="."http://www.hometowndomination.com/wp-content/uploads/2010/08/Thumbs-Up-Consulting.png".">"); //Put your body of the message you can place html code here
	//$mail->AddAttachment("email-pic/pl.jpg"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		header('Location:pendingstud.php');

	       }
	else{
echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
       
	   }





?>