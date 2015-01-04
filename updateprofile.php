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
	
				$sql = "SELECT * from student where sid='{$studentid}'";
                $result = mysql_query($sql) or die("cannot execute query");
                $count = mysql_num_rows($result);
                $fullname = $row['fullname'];
                $address = $row['address'];
                $mobile = $row['mobile'];
                $about = $row['about_you'];
                $institute = $row['institute'];
                $department = $row['department'];
                $batch=$row['batch'];


				?>
<div class="container">
    <div id="respond">
       <!----UPLOAD PHOTO BLOCK--->
        <h3>Upload Your Photo Here.</h3>
        <h7>Note:Please choose file less than 200Kbs</h7>
        <form action ='uploadfile.php' method='POST' enctype='multipart/form-data'>
	           <input type='file' name='myfile'>
	           <input type ='submit' name='Upload'>
        </form>
        
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
                     <form action="updateinfo.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Full Name</td>
                        <td><?php echo $fullname ?></td>
                        <td><input type="text" class="form-control" name="fullname" id="inputName"                  placeholder="Update Name">
                        </td>   
                     </tr>
                    <tr class="success">
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Update Address" name="address">
                        </td>   

                     </tr>
                    <tr class="danger">
                        <td>Mobile Number</td>
                        <td><?php echo $mobile ?></td>
                        <td><input type="text" class="form-control" id="inputmobile"                  placeholder="Update Mobile Number" name="mobile">
                        </td>  
                    </tr>

                    <tr class="info">
                        <td>About You</td>
                        <td><?php echo $about ?></td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Update about you" name="about_you">
                        </td>
                    </tr> 
                    <tr class="warning">
                        <td>Institute Name</td>
                        <td><?php echo $institute ?></td>
                    <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Update institute name" name="institute">
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>Department</td>
                        <td><?php echo $department ?></td>
                        <td><input type="text" class="form-control" id="inputdepartment"                  placeholder="Update Department" name="department">
                        </td>
                    </tr>
                    <tr class="info">
                        <td>Bacth</td>
                        <td><?php echo $batch ?></td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Update batch" name="batch">
                        </td>
                    </tr>
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-action">Submit</button>
                        </td>
                    </tr>
                    
                </tbody>
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
				  <input type="password" class="form-control" id="inputpassword" placeholder="Enter your new password">
				</div>
				<div class="form-group">
                                <input type="password" class="form-control" id="inputpassword"  placeholder="Confirm Password">
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
