<?php
include "menu.php"; ?>
<?php session_start(); ?>
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
            <?php
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
<div class="container">
    <div id="respond">
       <!----UPLOAD PHOTO BLOCK--->
       
 <div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th> Upload Your Photo Here.</th>
                    <th></th>
                     <th></th>
                    </tr>
                </thead>
                 <tbody>
        <form action ='uploadfile.php' method='POST' enctype='multipart/form-data'>
	
        <tr class="success">
                        <td><input type='file' name='myfile'></td>
                    
                  
	          <td> <input type ='submit' name='Upload'> </td>
		<td>Note:Please choose file less than 200Kbs</td>
	</tr>

        </form></tbody></table></div>

        
       <!----UPLOAD PHOTO BLOCK ENDS--->
        <!---UPDATE INFO BLOCK STARTS--->
        <div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Student Details</th>
                     <th>Update Your Details</th>
                    </tr>
                </thead>
                 <tbody>
                     <form action="updatestudent.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Full Name</td>
                        <td><?php echo $fullname ?></td>
                        <td><input type="text" class="form-control" name="fullname" id="inputName"                                     placeholder="Update Name" value="<?php echo $fullname ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr class="active">
                        <td>DOB</td>
                        <td><?php echo $dob ?></td>
                        <td><input type="text" class="form-control" name="dob" id="inputName"                                     placeholder="Update DOB DD/MM/YYYY" value="<?php echo $dob ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr class="danger">
                        <td>Gender</td>
                        <td><?php echo $gender ?></td>
                        <td><input type="text" class="form-control" id="inputmobile"                  placeholder="Update Gender" name="gender" value="<?php echo $gender ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>  
                    </tr>

                    <tr class="success">
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Update Address" name="address" value="<?php echo $address ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   

                     </tr>
                    
                    <tr class="info">
                        <td>About You</td>
                        <td><?php echo $about ?></td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Update about you" name="about_you" value="<?php echo $about ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr> 
                    <tr class="warning">
                        <td>Institute Name</td>
                        <td><?php echo $institute ?></td>
                    <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Update institute name" name="institute" value="<?php echo $institute ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>University Name</td>
                        <td><?php echo $university ?></td>
                    <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Update institute name" name="university" value="<?php echo $university ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="danger">
                        <td>Department</td>
                        <td><?php echo $department ?></td>
                        <td><input type="text" class="form-control" id="inputdepartment"                  placeholder="Update Department" name="department" value="<?php echo $department ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    <tr class="info">
                        <td>Batch</td>
                        <td><?php echo $batch ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update batch" name="batch" value="<?php echo $batch ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                         <tr class="info">
                        <td>Degree Sem 7 %</td>
                        <td><?php echo $deg7 ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update degree sem 7 %" name="deg_sem7" value="<?php echo $deg7 ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="info">
                        <td>Degree Sem 8 %</td>
                        <td><?php echo $deg8 ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update degree sem 8 %" name="deg_sem8" value="<?php echo $deg8 ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="info">
                        <td>Degree Aggrigate %</td>
                        <td><?php echo $degagg ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update degree %" name="deg_agg" value="<?php echo $degagg ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="info">
                        <td>Diploma Aggrigate %</td>
                        <td><?php echo $diploma ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update diploma %" name="diploma_agg" value="<?php echo $diploma ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="info">
                        <td>HSC %</td>
                        <td><?php echo $hsc ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update hsc %" name="hsc" value="<?php echo $hsc ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="info">
                        <td>SSC %</td>
                        <td><?php echo $ssc ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update ssc %" name="ssc" value="<?php echo $ssc ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                       <tr class="info">
                        <td>Key Skills</td>
                        <td><?php echo $key ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update key skills" name="key_skills" value="<?php echo $key ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                       <tr class="info">
                        <td>Project </td>
                        <td><?php echo $project ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update project" name="project_title" value="<?php echo $project ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-action">Submit</button>
                        </td>
                    </tr>
                    </form>
                </tbody></div></div></div>
            </table>
        </div>
    </div>
</div>
        
        <!---UPDATE INFO BLOCK ENDS--->
                
        <!---UPDATE PASSWORD BLOCK STARTS--->
<div class="container">
	<div id="respond">
        <h3 id="reply-title">Update Password</h3>
            <form action="updatepass.php" method="post" id="commentform">
				<div class="form-group">
				  <input type="password" class="form-control" id="inputpassword" placeholder="Enter your new password" name="password">
				</div>
				<div class="form-group">
                                <input type="password" class="form-control" id="inputpassword"  placeholder="Confirm Password"  name="repeatpassword">
				</div>
				<div class="row">
				    <div class="col-md-8"></div>
				        <div class="col-md-4 text-right">
  						    <button type="submit" class="btn btn-action">Submit</button>
				        </div>
				</div> <!-- /respond -->
            </form>
	</div>	<!-- /container -->
</div>

        <!---UPDATE INFO BLOCK ENDS--->
<?php include "foot.html"; ?>
