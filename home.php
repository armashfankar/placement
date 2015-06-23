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
	
				$sql = "SELECT * from student_info where sid='{$studentid}'";
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

<h1 class="entry-title">Your Profile</h1>
<div class="container">
	<div id="respond">
<div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Your Details</th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                    <tr class="danger">
                        <td>Full Name</td>
                        <td><?php echo $fullname; ?></td>
                        <td></td>  <td></td>   
                     </tr>
                         <tr class="active">
                        <td>DOB</td>
                        <td><?php echo $dob ?></td>
                         <td></td>  <td></td>  
                     </tr>
                    <tr class="info">
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                       <td></td><td></td>  
                     </tr>
                    
                    <tr class="success">
                        <td>About You</td>
                        <td><?php echo $about ?></td>
                    <td></td><td></td>  
                    </tr>
                    <tr class="warning">
                        <td>University Name</td>
                        <td><?php echo $university ?></td>
                    <td></td><td></td>  
                    </tr>
                    
                    <tr class="active">
                        <td>Institute Name</td>
                        <td><?php echo $institute ?></td>
                    <td></td><td></td>  
                    </tr>
                    <tr class="danger">
                        <td>Department</td>
                        <td><?php echo $department ?></td>
                        <td></td>       <td></td>              </tr>
                    <tr class="info">
                        <td>Batch</td>
                        <td><?php echo $batch ?></td>
                       <td></td><td></td>  
                    </tr>
                         <tr class="success">
                        <td>Degree Sem 1 %</td>
                        <td><?php echo $deg1 ?></td>
                             <td>Degree Sem 2 %</td>
                        <td><?php echo $deg2 ?></td>
                        
                         </tr>
                        <tr class="success">
                        <td>Degree Sem 3 %</td>
                        <td><?php echo $deg3 ?></td>
                             <td>Degree Sem 4 %</td>
                        <td><?php echo $deg4 ?></td>
                        
                         </tr>
                         <tr class="success">
                        <td>Degree Sem 5 %</td>
                        <td><?php echo $deg5 ?></td>
                             <td>Degree Sem 6 %</td>
                        <td><?php echo $deg6 ?></td>
                        
                         </tr>
                        <tr class="success">
                        <td>Degree Sem 7 %</td>
                        <td><?php echo $deg7 ?></td>
                             <td>Degree Sem 8 %</td>
                        <td><?php echo $deg8 ?></td>
                        
                         </tr>
                        
                         <tr class="warning">
                        <td>Degree Aggrigate %</td>
                        <td><?php echo $degagg ?></td>
                        <td>Diploma Aggrigate %</td>
                        <td><?php echo $diploma ?></td>  
                        </tr>
                        <tr class="danger">
                        <td>HSC %</td>
                        <td><?php echo $hsc ?></td>
                            <td></td><td></td>
                        </tr>
                          <tr class="active">
                        <td>SSC %</td>
                        <td><?php echo $ssc ?></td>
                              <td></td><td></td>
                        </tr>
                          <tr class="warning">
                        <td>Key Skills</td>
                        <td><?php echo $key ?></td>
                              <td></td><td></td>
                        </tr>
                         <tr class="info">
                        <td>Project Title</td>
                        <td><?php echo $project ?></td>
                             <td></td><td></td>
                        </tr>
                    <tr class="danger">
                        <td></td>
                        <td></td>
                        <td>  
            <form action="updateprofile.php" method="post" id="commentform">                        <button type="submit" class="btn btn-action pull-right">Edit Profile</button>
                </form></td>
                        <td>
            <form action="mycv.php" method="post" id="commentform">      
                    <button type="submit" class="btn btn-action pull-right">My CV</button>
            </form>        
                </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
</div><br><br><br><br><Br>
<?php include "foot.html"; ?>
