<?php
include "dmenu.php"; ?>
<?php session_start(); 

$sid=$_POST['sid'];
	//$studentid = $_SESSION['s_id'];


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
	
				$sql3 = "SELECT * from student_info as si,stud_login as sl where si.sid='$sid' and sl.sid='$sid'";
                $result3= mysql_query($sql3) or die("cannot execute query");
                $count3 = mysql_num_rows($result3);
                 $row3 = mysql_fetch_array($result3);
                $username = $row3['username'];
                $email = $row3['email'];
                $fullname= $row3['fullname'];
                $address = $row3['address'];
                $dob = $row3['dob'];  
                $about = $row3['about_you'];
                $institute = $row3['institute'];
                $university = $row3['university'];
                $department = $row3['department'];
                $batch=$row3['batch'];
                $deg7=$row3['deg_sem7'];
                $deg8=$row3['deg_sem8'];
                $degagg=$row3['deg_agg'];
                $diploma=$row3['diploma_agg'];
                $hsc=$row3['hsc'];
                $ssc=$row3['ssc'];
                $key=$row3['key_skills'];
                $project=$row3['project_title'];
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

<h1 class="entry-title" style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;"><?php echo $username;?> Profile</h1>
<div class="container">
	<div id="respond">
<div class="bs-example">
      
  <br><Br><br>
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                    <tr class="active">
                        <td><b>Full Name</b></td>
                        <td><b><font color="red"><?php echo $fullname ?></b></font></td>
                        <td><img class="img-circle" src="../uploaded/<?php echo $username; ?>" height="160" width="160"></td>   
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
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
        


<div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-          labelledby="largeModal" aria-hidden="true">
    <form id="companyemail" action="emailtostud.php" method="post" class="form-horizontal" role="form">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <h4 class="modal-title" id="myModalLabel">Send Email To <?php echo $fullname; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="col-sm-5">
                                            <div class="panel-body" >
        <div style="margin-bottom: 50px" class="input-group">
        <textarea name="message" rows="3"></textarea>
        <input type="hidden" value="<?php echo $email; ?>" name="email">
        </div>
                                            </div>
        		                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
         <button id="btn-login" type="submit" class="btn btn-default">Send Email  </button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>
</div><br><br><br><br><Br>
<?php include "../foot.html"; ?>
