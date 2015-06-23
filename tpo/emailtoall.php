<?php
$message=$_POST['message'];

//$dept=$_POST['department'];

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
foreach($_POST['check_list'] as $selected){
	
  $query1 = " select distinct s.email,s.username from stud_login as s,student_info as a where s.approval='yes' and a.department='$selected' and a.placed='' and s.sid=a.sid";
				$resultq1 = mysql_query($query1,$con);
               

include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
$mail	= new PHPMailer; // call the class 
$mail->IsSMTP(); 
$mail->Host = SMTP_HOST; //Hostname of the mail server
$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
$mail->SMTPAuth = true; //Whether to use SMTP authentication
$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
$mail->Password = SMTP_PWORD;
$mail->AddReplyTo("placementcell00@gmail.com", "Placement Cell"); //reply-to address
$mail->SetFrom("placementcell00@gmail.com", "Placement Cell"); //From address of the mail
// put your while loop here like below,
$mail->Subject = "TPO Placement Cell"; //Subject od your mail
while ($rowq1 = mysql_fetch_array($resultq1)){

 $address = $rowq1['email'];
 $username = $rowq1['username'];

$recipients = array(
   $address => $username
   //'subscriber2@gmail.com' => 'Mohamed Asif'
);
foreach($recipients as $email => $name){
	// it will display the emails of all users in their Mailbox 'To' area. Simple multiple mail.
	$mail->AddAddress($email, $name); //To address who will receive this email
	$mail->MsgHTML($message); //Put your body of the message you can place html code here
	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line (usimg absolute path), 
	$send = $mail->Send(); //Send the mails
	// if you want to does not show other users email addresses like newsletter, daily, weekly, subscription emails means use the below line to clear previous email address
	$mail->ClearAddresses();
}
	if($send){
		 header('Location:tpohome.php');

	       }
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
       
	   }

} 
}
?>