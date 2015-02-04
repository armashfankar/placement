<?php
include "menu1.php"; ?>
<?php session_start(); ?>
 <?php
					$compid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from comp_login where cid='{$compid}'";
                $result = mysql_query($sql) or die("cannot execute query");
                $count = mysql_num_rows($result);
                $username = $row['username'];
                
				?>

<main id="main">
<div class="container">
	<div id="respond">
						<h3 id="reply-title">Company Information</h3>
						<form action="hrinfo.php" method="post" id="commentform">
							
    
         <div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                     <th></th>
                    </tr>
                </thead>
                 <tbody>
                    <tr class="active">
                        <td>Company Name</td>
                        <td><input type="text" class="form-control" name="companyname" id="inputName"                  placeholder="Company Name">
                        </td>   <td></td>
                     </tr>
                    <tr class="success">
                        <td>Website</td>
                        <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Company Website" name="website">
                        </td><td></td>   

                     </tr>
                    <tr class="danger">
                        <td>Company Landline</td>
                       <td><input type="text" class="form-control" id="inputaddress"                  placeholder="Company Landline" name="landline">
                        </td>  <td></td> 

                    </tr>

                    <tr class="info">
                        <td>Fax No.</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Company Fax" name="fax">
                        </td><td></td>
                    </tr> 
                    <tr class="success">
                        <td>Career</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Career For Students" name="career">
                        </td>
                        <td></td>
                    </tr> 
                      <tr class="danger">
                        <td>Establishment Year</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Company Establishment year" name="estb_year">
                        </td><td></td>
                    </tr> 
                      <tr class="info">
                        <td>Address</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Company Address" name="address">
                        </td><td></td>
                    </tr> 
                    <tr><td><h3 id="reply-title">HR Details</td></h3>
						</tr>
                    <tr class="warning">
                        <td>Name</td>
                       <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="HR name" name="hrname"><td></td>
                        </td>
                    </tr>
                     <tr class="success">
                        <td>Email</td>
                       <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="HR email" name="email"><td></td>
                        </td>
                    </tr>
                    
                    <tr class="danger">
                        <td>Mobile</td>
                        <td><input type="text" class="form-control" id="inputdepartment"                  placeholder="HR mobile" name="mobile"><td></td>
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
    </form>
</div> <!-- /respond -->
</div>	<!-- /container -->

</main></main>
<br><Br>
<?php include "../foot.html"; ?>
