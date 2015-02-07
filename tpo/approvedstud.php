<?php
include "tpomenu.php"; ?>
<?php
				//	$tpoid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from student_info si,stud_login sl where si.sid=sl.sid and sl.approval='yes'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $fullname= $row['fullname'];
                $address = $row['address'];
                $dob = $row['dob'];  
                $gender = $row['gender'];      
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

<body>

<div class="container">
	<div id="respond">
<div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>student Details</th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                     <form action="updateprofile.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Full Name</td>
                        <td><?php echo $fullname ?></td>
                        <td></td><td></td>  <td></td> 
                     </tr>
                    <tr class="warning">
                        <td>Department</td>
                        <td><?php echo $department ?></td>
                         <td></td>  <td></td><td></td>
                     </tr>
                    <tr class="success">
                        <td>Batch</td>
                        <td><?php echo $batch ?></td>
                       <td></td><td></td><td></td>
                     </tr>
                    
                    <tr class="info">
                        <td>Degree Agg.</td>
                        <td><?php echo $degagg ?></td>
                    <td></td>
                        <td></td><td></td>
                    </tr>
                    
                    <tr class="danger">
                        <td>Diploma</td>
                        <td><?php echo $diploma?></td>
                    <td></td>
                        <td></td><td></td>
                    </tr>
                                     
                    <tr class="info">
                        <td>SSC</td>
                        <td><?php echo $ssc ?></td>
                    <td></td>
                        <td></td><td></td>
                    </tr>    
                                                            
                    <tr class="active">
                        <td>HSC</td>
                        <td><?php echo $hsc ?></td>
                    <td></td>
                        <td></td><td></td>
                    </tr>   
                         
                    <tr class="danger">
                        <td>Key skill</td>
                        <td><?php echo $key ?></td>
                    <td></td>
                        <td></td><td></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
</div><br><br><br><br><Br>


</body>
<?php include "../foot.html"; ?>s