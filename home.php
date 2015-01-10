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
                $count = mysql_num_rows($result);
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
                    <th>Student Details</th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                     <form action="updateprofile.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Full Name</td>
                        <td><?php echo $fullname ?></td>
                        <td></td>   
                     </tr>
                         <tr class="active">
                        <td>DOB</td>
                        <td><?php echo $dob ?></td>
                         <td></td>  
                     </tr>
                    <tr class="success">
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                       <td></td>
                     </tr>
                    
                    <tr class="info">
                        <td>About You</td>
                        <td><?php echo $about ?></td>
                    <td></td>
                    </tr>
                    <tr class="warning">
                        <td>University Name</td>
                        <td><?php echo $university ?></td>
                    <td></td>
                    </tr>
                    
                    <tr class="warning">
                        <td>Institute Name</td>
                        <td><?php echo $institute ?></td>
                    <td></td>
                    </tr>
                    <tr class="danger">
                        <td>Department</td>
                        <td><?php echo $department ?></td>
                        <td></td>                   </tr>
                    <tr class="info">
                        <td>Batch</td>
                        <td><?php echo $batch ?></td>
                       <td></td>
                    </tr>
                         <tr class="success">
                        <td>Degree Sem 7 %</td>
                        <td><?php echo $deg7 ?></td>
                             <td></td>
                        </tr>
                        <tr class="info">
                        <td>Degree Sem 8 %</td>
                        <td><?php echo $deg8 ?></td>
                            <td></td>
                        </tr>
                         <tr class="warning">
                        <td>Degree Aggrigate %</td>
                        <td><?php echo $degagg ?></td>
                        </tr>
                         <tr class="danger">
                        <td>Diploma Aggrigate %</td>
                        <td><?php echo $diploma ?></td>
                             <td></td>
                        </tr>
                          <tr class="success">
                        <td>HSC %</td>
                        <td><?php echo $hsc ?></td>
                              <td></td>
                        </tr>
                          <tr class="danger">
                        <td>SSC %</td>
                        <td><?php echo $ssc ?></td>
                              <td></td>
                        </tr>
                          <tr class="warning">
                        <td>Key Skills</td>
                        <td><?php echo $key ?></td>
                              <td></td>
                        </tr>
                         <tr class="success">
                        <td>Project Title</td>
                        <td><?php echo $project ?></td>
                             <td></td>
                        </tr>
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-action">Edit Profile</button>
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
