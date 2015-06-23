<?php
include "compmenu.php"; ?>
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
	$did = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from department where did='{$did}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $dname=$row['dept_name'];
                $username=$row['website'];
                $landline=$row['landline'];
                $fax=$row['fax'];
                $career=$row['career'];
                $estb_year=$row['estb_year'];
                $address=$row['address'];
                $hrname=$row['hrname'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                
                
                ?><div class="container">
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
                    <th>Company Details</th>
                     <th>Update Your Details</th>
                    </tr>
                </thead>
                 <tbody>
                     <form action="compupdate.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Company Name</td>
                        <td><?php echo $compname ?></td>
                        <td><input type="text" class="form-control" name="companyname" id="inputName" placeholder="Update Company Name" value="<?php echo $compname ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr class="active">
                        <td>Website</td>
                        <td><?php echo $website ?></td>
                        <td><input type="text" class="form-control" name="website" id="inputName"                                     placeholder="Update Website" value="<?php echo $website ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr class="danger">
                        <td>Landline</td>
                        <td><?php echo $landline ?></td>
                        <td><input type="text" class="form-control" id="inputmobile"                  placeholder="Update Company Landline" name="landline" value="<?php echo $landline ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>  
                    </tr>

                    <tr class="success">
                        <td>Fax</td>
                        <td><?php echo $fax ?></td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Update Company Fax " name="fax" value="<?php echo $fax ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   

                     </tr>
                    
                    <tr class="info">
                        <td>Career</td>
                        <td><?php echo $career ?></td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Update Career" name="career" value="<?php echo $career ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr> 
                    <tr class="warning">
                        <td>Establishment Year</td>
                        <td><?php echo $estb_year ?></td>
                    <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Update Establishment year" name="estb_year" value="<?php echo $estb_year ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                    <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Update Company Address" name="address" value="<?php echo $address ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    
                         <tr class="danger">
                        <td>HR Name</td>
                        <td><?php echo $hrname ?></td>
                        <td><input type="text" class="form-control" id="inputdepartment"                  placeholder="Update Company HR name" name="hrname" value="<?php echo $hrname ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                    <tr class="info">
                        <td>HR Email</td>
                        <td><?php echo $email ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update Company Email" name="email" value="<?php echo $email ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                    </tr>
                         <tr class="info">
                        <td>HR Mobile</td>
                        <td><?php echo $mobile ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update Mobile" name="mobile" value="<?php echo $mobile ?>" required data-validation-required-message="Cannot Be Blank">
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
<?php include "../foot.html"; ?>
