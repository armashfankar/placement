<?php
include "menu.php"; ?>
<?php session_start(); 

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
	
				//$sql = "SELECT * from student_info where sid='{$studentid}'";
                $sql="select * from student_info as s,stud_login as l  where s.sid='{$studentid}' and s.username=l.username";
                $result = mysql_query($sql) or die("cannot execute query");
                //$count = mysql_num_rows($result);
                $row = mysql_fetch_array($result);
                $username = $row['username'];
                $email = $row['email'];
                $fullname= $row['fullname'];
                $address = $row['address'];
                $dob = $row['dob'];  
                $about = $row['about_you'];
                $institute = $row['institute'];
                $university = $row['university'];
                $department = $row['department'];
                $batch=$row['batch'];
                $deg1=$row['deg_sem1'];
                $deg2=$row['deg_sem2'];
                $deg3=$row['deg_sem3'];
                $deg4=$row['deg_sem4'];
                $deg5=$row['deg_sem5'];
                $deg6=$row['deg_sem6'];
                $deg7=$row['deg_sem7'];
                $deg8=$row['deg_sem8'];
                $degagg=$row['deg_agg'];
                $diploma=$row['diploma_agg'];
                $hsc=$row['hsc'];
                $ssc=$row['ssc'];
                $key=$row['key_skills'];
                $project=$row['project_title'];
                $career=$row['career'];
                $contact=$row['contact'];

?>  
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    
    hr {
margin-top: 20px;
margin-bottom: 20px;
border: 0;
border-top: 1px solid #7C7A7A;
}
</style>
<div class="container">
	<div id="respond">
<div class="bs-example">

<table cellpadding="" cellspacing="" border="0" width="90%" style="background:#ffffff url(img/page.png);text-align:left;line-height:20px;">
                        <tr>
                            <td colspan="2"><h3 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;text-align:center;">curriculum vitae</h3></td>
                        </tr>
    <tr><td>&nbsp;&nbsp;<b><?php echo $fullname; ?></b></td></tr>
    <tr><td>&nbsp;&nbsp;<b><?php echo $email; ?></b></td></tr>
    <tr><td>&nbsp;&nbsp;<b><?php echo $contact; ?></b></td></tr>
                        <tr>
    <td colspan="2" ><hr style="color:#ff0000;border-width:3px;"/></td>
                        </tr>
				 <tr>
        <td>&nbsp;&nbsp;<b>Career Objective</b></td>
        <td>&nbsp;&nbsp;<?php echo $career; ?></td>
    </tr>         
          <tr>
            <td>&nbsp;&nbsp;<b>Educational Qualification</b></td>
          </tr>              
	<tr>
        <td></td>
        <td>
            <table border="1" cellpadding="8" cellspacing="2"> 
                <th>Examination</th><th>Name of the Institution</th><th>%</th>
                <tr>
                    <td>Degree Aggregate</td>
                    <td><?php echo  $institute; ?></td>
                    <td><?php echo  $degagg; ?></td>
                </tr> 
                <tr>
                    <td>Degree 8<sup>th</sup> Semester</td>
                    <td><?php echo  $institute; ?></td>
                    <td><?php echo  $deg8; ?></td>
                </tr>    
                <tr>
                    <td>Degree 7<sup>th</sup> Semester</td>
                    <td><?php echo  $institute; ?></td>
                    <td><?php echo  $deg7; ?></td>
                </tr>
                <tr>
                    <td>Diploma Aggregate</td>
                    <td><?php echo  $institute; ?></td>
                    <td><?php echo  $diploma; ?></td>
                </tr>
            </table>
        </td>    
    </tr>  <tr></tr>
    <tr>
        <td>&nbsp;&nbsp;<b>Key Skills</b></td>
        <td>&nbsp;&nbsp;<b><?php echo $key; ?></b></td>
    </tr> 
        

    <tr>
        <td>&nbsp;&nbsp;<b>Project</b></td>
        <td>&nbsp;&nbsp;<b><?php echo $project; ?></b></td>
    </tr> 
    <tr>
        <td>&nbsp;&nbsp;<b>Personal Details</b></td>
        
    </tr> 
    <tr>
        <td></td>
        <td>
            <table border="0" cellpadding="8" cellspacing="2"> 
                <tr>
                    
                    <td><?php echo  Name ?></td>
                    <td><?php echo  $fullname; ?></td>
                        
                </tr> 
                <tr>
                    <td> DOB: </td>
                    <td><?php echo  $dob; ?></td>
                </tr>    
                <tr>
                    <td>Nationality</td>
                    <td><?php echo  "Indian"; ?></td>
                </tr>
                <tr>
                    <td>About You</td>
                    <td><?php echo  $about; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo  $address; ?></td>
                </tr>
                                <tr>
                    <td>Hobbies</td>
                    <td><?php echo  $about; ?></td>
                </tr>
            </table>
        </td>    
    </tr>
    <tr>
        <td>&nbsp;&nbsp;<b>Declaration</b></td>
        <td>&nbsp;&nbsp;<b>I do hereby declare that the above given information is true and correct <br> to the best of my knowledge.</b></td>
    </tr> 
    <tr>
        <td>&nbsp;&nbsp;<b>Date  &nbsp;  &nbsp; : &nbsp; &nbsp; /  &nbsp; &nbsp;  /2015</b></td></tr>
    <tr>    
        <td>&nbsp;&nbsp;<b>Place &nbsp;  &nbsp;:  &nbsp; &nbsp; &nbsp; &nbsp;           </b></td>
    </tr> 
    </table>
    <br>
        <a href="javascript:window.print()"><button type="submit" class="btn btn-action pull-right">Print</button></a>

</div></div></div>
<br><br><br><br>
<?php include "foot.html"?>