<?php
session_start();
			$compid = $_SESSION['s_id'];
include '../library.php'; // include the library file
include "../classes/class.phpmailer.php"; // include the class name

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
	
				$sql = "SELECT * from comp_info where cid='{$compid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				//$hrname = $row['hrname'];
				$email = $row['email'];
                $sid= $studentid;      


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
	$mail->Subject = "Your Placement Registeration"; //Subject od your mail
	$mail->AddAddress($email, "placement cell"); //To address who will receive this email
	$mail->MsgHTML("<b>Hello <p>Thank you for registering with Placement Cell. We welcome you on board and hope to have a great opportunities ahead, together.</p><br><img src="."http://www.psgnursing.ac.in/wp-content/uploads/2012/06/placement.jpg".">"); //Put your body of the message you can place html code here
	//$mail->AddAttachment("email-pic/pl.jpg"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		 header('Location:../approval.php');

	       }
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
       
	   }

?>
