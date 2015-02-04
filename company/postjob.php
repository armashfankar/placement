<?php
include "compmenu.php"; 
	$cid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from comp_info where cid='{$cid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $compname=$row['companyname'];
                $website=$row['website'];
                $landline=$row['landline'];
                $fax=$row['fax'];
                $career=$row['career'];
                $estb_year=$row['estb_year'];
                $address=$row['address'];
                $hrname=$row['hrname'];
                $email=$row['email'];
                $mobile=$row['mobile'];
    
                
                
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
                    .btn-input {
   display: block;
}

.btn-input .btn.form-control {
    text-align: left;
}

.btn-input .btn.form-control span:first-child {
   left: 10px;
   overflow: hidden;
   position: absolute;
   right: 25px;
}

.btn-input .btn.form-control .caret {
   margin-top: -1px;
   position: absolute;
   right: 10px;
   top: 50%;
}
</style>

				

	            
                
                <div class="container">
    <div id="respond">
        <!---UPDATE INFO BLOCK STARTS--->
        <div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Company Details</th>
                     <th></th>
                    </tr>
                </thead>
                 <tbody>
                     <form action="jobpost.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Company Name</td>
                        <td><input type="text" class="form-control" name="compname" id="inputName" placeholder="Enter Company Name" value="<?php echo $compname ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>
                        <td></td>
                     </tr>
                    <tr class="warning">
                        <td>Department</td>
                        <td> 
                             <select name="department">
                                  <option value="co">COMPUTER</option>
                                  <option value="extc">ELECTRONICS & TELE.</option>
                                  <option value="ce">CIVIL</option>
                                  <option value="me">MECHANICAL</option>
                                <option value="ee">ELECTRICAL</option>
                           
                            </select>
      </td> 
                        <td></td>
                     </tr>
                    <tr class="danger">
                        <td>Domain</td>
                        <td><input type="text" class="form-control" id="inputmobile"                  placeholder="Enter Domain" name="domain" value="" required data-validation-required-message="Cannot Be Blank">
                        </td>  <td></td>
                    </tr>

                    <tr class="success">
                        <td>Job Location</td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Enter Job Location " name="job_location" value="" required data-validation-required-message="Cannot Be Blank">
                        </td> <td></td>  

                     </tr>
                    
                    <tr class="info">
                        <td>Job Role</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Enter Job Role" name="job_role" value="" required data-validation-required-message="Cannot Be Blank">
                        </td> <td></td>
                    </tr> 
                    <tr class="warning">
                        <td>Salary</td>
                     <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Enter Salary" name="salary" value="" required data-validation-required-message="Cannot Be Blank">
                        </td> <td></td>
                    </tr>
                    <tr class="danger">
                        <td>SSC</td>
                    <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Enter SSC %" name="ssc" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr>
                    
                         <tr class="success">
                        <td>HSC</td>
                        <td><input type="text" class="form-control" id="inputdepartment"                  placeholder="Enter HSC %" name="hsc" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr>
                    <tr class="info">
                        <td>Diploma_Aggregate</td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Enter Diploma_Aggregate " name="diploma_agg" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr>
                         <tr class="warning">
                        <td>BE Aggregate</td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Enter BE Aggregate" name="deg_agg" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                    </tr>
                      <tr class="danger">
                        <td>Venue</td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Enter Venue" name="venue" value="" required data-validation-required-message="Cannot Be Blank">
                        </td><td></td>
                  
                      
                    
                         
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




<?php include "../foot.html"; ?>