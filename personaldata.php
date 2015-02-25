<?php
include "menu1.php"; ?>

<?php session_start(); ?>
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
	
				$sql = "SELECT * from stud_login where sid='{$studentid}'";
                $result = mysql_query($sql) or die("cannot execute query");
                $count = mysql_num_rows($result);
                $username = $row['username'];
                
				?>

<main id="main">
<div class="container">
	<div id="respond">
						<h3 id="reply-title">Personal Information</h3>
						<form action="studinfo.php" method="post" id="commentform">
							
    
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
                        <td>Full Name</td>
                        <td><input type="text" class="form-control" name="fullname" id="inputName" placeholder="Full Name" required>
                        </td>  <td></td> <td></td>
                     </tr>
                    <tr class="success">
                        <td>DOB</td>
                        <td><!--<input type="text" class="form-control" id="inputaddress"                  placeholder="DD/MM/YYYY" name="dob"-->
                            <input type="date" name="dob" required>
                        </td>  <td></td> <td></td>

                     </tr>
                    <tr class="danger">
                        <td>Gender</td>
                        <td><input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female" required>Female
                            
                        </td> <td></td> <td></td>
                    </tr>

                    <tr class="info">
                        <td>Address</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Residential Address" name="address" required>
                        </td><td></td><td></td>
                    </tr> 
                    <tr class="success">
                        <td>About You</td>
                        <td><input type="text" class="form-control" id="inputabout"                  placeholder="Hobbies" name="about_you" required>
                        </td><td></td><td></td>
                    </tr> 
                    <tr><td><h3 id="reply-title">Educational Information</td></h3>
						</tr><td></td>
                    <tr class="warning">
                        <td>Institute Name</td>
                       <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="Institute name" name="institute" required>
                        </td><td></td><td></td>
                    </tr>
                     <tr class="success">
                        <td>University Name</td>
                       <td><input type="text" class="form-control" id="inputinstitute"                  placeholder="University name" name="university" required>
                        </td><td></td><td></td>
                    </tr>
                    
                    <tr class="danger">
                        <td>Department</td>
                        <td><select name="department" required>
                            <option value ="computer" selected>Computer Engineering</option>
                            <option value ="electronics&tele">Electronics & Tele.</option>
                            <option value ="civil" >Civil Engineering</option>
                            <option value ="mechanical">Mechanical Engineering</option>
                            <option value ="electrical">Electrical Engineering</option>
                            </select>
                        </td><td></td><td></td>
                    </tr>
                    <tr class="active">
                        <td>Batch</td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Batch" name="batch" required>
                        </td><td></td><td></td>
                    </tr>
             <tr class="warning">
                        <td>Degree Sem 1 %</td>
                        <td><input type="number" class="form-control"                  placeholder="Please Insert Accurate % " data-fv-integer-message="The value is not an integer" maxlength="2" name="deg_sem1" required>
                        </td>
                  <td>Degree Sem 2 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric" placeholder="Please Insert Accurate % "  data-fv-integer-message="The value is not an integer" name="deg_sem2" required>
                        </td>
                    </tr>
             <tr class="warning">
                        <td>Degree Sem 3 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"   placeholder="Please Insert Accurate % " data-fv-integer-message="The value is not an integer"  name="deg_sem3" required>
                        </td>
                  <td>Degree Sem 4 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"  data-fv-integer-message="The value is not an integer" placeholder="Please Insert Accurate % " name="deg_sem4" required>
                        </td>
                    </tr>    
             <tr class="warning">
                        <td>Degree Sem 5 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"          data-fv-integer-message="The value is not an integer"        placeholder="Please Insert Accurate % " name="deg_sem5" required>
                        </td>
                  <td>Degree Sem 6 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"        data-fv-integer-message="The value is not an integer"          placeholder="Please Insert Accurate % " name="deg_sem6" required>
                        </td>
                    </tr>            
             
             
             <tr class="warning">
                        <td>Degree Sem 7 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"          data-fv-integer-message="The value is not an integer"        placeholder="Please Insert Accurate % " name="deg_sem7" required>
                        </td>
                 <td>Degree Sem 8 %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"     data-fv-integer-message="The value is not an integer"             placeholder="Please Insert Accurate % " name="deg_sem8" required>
                        </td>
                    </tr>
                         <tr class="active">
                        <td>Degree Aggrigate %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"   data-fv-integer-message="The value is not an integer"               placeholder="Please Insert Accurate % " name="deg_agg" required>
                        </td>
                             <td>Diploma Aggrigate %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"  data-fv-integer-message="The value is not an integer"                placeholder="Please Insert Accurate % " name="diploma_agg" required>
                        </td>
              
                    </tr>
                 <tr class="success">
              <td>HSC %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"  data-fv-integer-message="The value is not an integer"                placeholder="Please Insert Accurate % " name="hsc" required>
                        </td>
                     <td>SSC %</td>
                        <td><input type="number" class="form-control" maxlength="2" id="txtNumeric"  data-fv-integer-message="The value is not an integer"                placeholder="Please Insert Accurate % " name="ssc" required>
                        </td>
                </tr>
              <tr class="danger">
                        <td>Key Skill</td>
                        <td><select name="key_skills" required>
                            <option value ="java" selected>Java</option>
                            <option value ="python">Python</option>
                            <option value ="c" >C</option>
                            <option value ="c++">C++</option>
                            <option value ="php">Php</option>
                            <option value ="database">Database</option>
                            <option value ="networking">Networking</option>
                            <option value =".net">.Net</option>
                            </select>
                        </td>
                  <td></td><td></td>
                    </tr>     
                <tr class="info">
              <td>Project Titile</td>
                        <td><input type="text" class="form-control" id="inputbacth"                  placeholder="Project Title" name="project_title" required>
                        </td><td></td><td></td>
                </tr>
                    <tr class="info">
                        <td></td>
                        <td></td><td></td>                        <td>
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
<?php include "foot.html"; ?>
