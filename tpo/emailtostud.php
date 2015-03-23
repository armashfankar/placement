<?php
session_start();

$email=$_POST['email'];
//echo $email;

$message=$_POST['message'];
//echo "<br>".$message;

			$tpoid = $_SESSION['s_id'];
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name

				

	//$email = $_POST["email"];
	$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("placementcell00@gmail.com", "Placement Reply"); //reply-to address
	$mail->SetFrom("placementcell00@gmail.com", "Placement Cell"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "TPO Placement Cell"; //Subject od your mail
	$mail->AddAddress($email, "placement cell"); //To address who will receive this email
	$mail->MsgHTML($message); //Put your body of the message you can place html code here
	//$mail->AddAttachment("email-pic/pl.jpg"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		 header('Location:approvedstud.php');

	       }
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
       
	   }


?>