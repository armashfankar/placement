<?php
include "tpomenu.php"; ?>
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
					$tpoid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $name=$row['name'];
                $degree=$row['degree'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                
                                
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
                    <th>TPO Details</th>
                     <th>Update Your Details</th>
                    </tr>
                </thead>
                 <tbody>
                     <form action="tpoupdate.php" method="post" id="commentform">
                    <tr class="active">
                       <td>Name</td>
                        <td><?php echo $name ?></td>
                        <td><input type="text" class="form-control" name="name" id="inputName" placeholder="Update Name" value="<?php echo $name ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr class="active">
                        <td>Degree</td>
                        <td><?php echo $degree ?></td>
                        <td><input type="text" class="form-control" name="degree" id="inputName"                                     placeholder="Update Degree" value="<?php echo $degree ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr class="danger">
                        <td>Email</td>
                        <td><?php echo $email ?></td>
                        <td><input type="text" class="form-control" id="inputmobile"                  placeholder="Update Email" name="email" value="<?php echo $email ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>  
                    </tr>

                    <tr class="success">
                        <td>Mobile</td>
                        <td><?php echo $mobile ?></td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Update Mobile" name="mobile" value="<?php echo $mobile ?>" required data-validation-required-message="Cannot Be Blank">
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
<br><br><br><br><br>
        <!---UPDATE INFO BLOCK ENDS--->
<?php include "../foot.html"; ?>
