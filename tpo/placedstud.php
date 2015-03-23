<?php
include "tpomenu.php"; ?>
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
	
				$sql = "SELECT * from student_info si,stud_login sl where si.sid=sl.sid and sl.approval='yes' and si.placed='yes'";
				$result = mysql_query($sql,$con);
      $count = mysql_num_rows($result);
            if($count==true){

				                
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

<div class="">
	<div id="respond">
        <center><h4 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;">
                                            Placed Student List
                </h4>
        </center>
<div class="bs-example">
            <table class="table" border="1">
                <thead>
                    <tr>
                    <th>Fullname</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Company Name</th>
                    <th>Job Role</th>
                    <th>Salary</th>
                    <th>Profile</th>
                    
                    </tr>
                </thead>
                 <tbody>
                     <?php
while ($row = mysql_fetch_array($result)){
                $sid= $row['sid'];
                $fullname= $row['fullname'];
                $department = $row['department'];
                $batch=$row['batch'];
                $comp=$row['company'];
                $job=$row['job_role'];
                $salary=$row['salary'];
                
                     ?>
                    <tr class="success">
                        <td><?php echo $fullname ?></td>
                        <td><?php echo $department ?></td>
                        <td><?php echo $batch ?></td>
                        <td><?php echo $comp ?></td>
                        <td><?php echo $job ?></td>
                        <td><?php echo $salary ?></td>
                        <td>
                        <form action="viewplacedstud.php" method="post">
                        <input type="hidden" value="<?php echo $sid; ?>" name="sid"> 
                         <button type="submit" class="btn btn-action">View Student</button>                             </form>    
                        </td>
                        
                     </tr>
                    <?php } }else {
                echo 
"<center><h4 style=font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red>
                          Sorry :( <br>  No Record Found 
                </h4>
        </center>
";
                     
            
            
            } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
</div><br><br><br><br><Br>


</body>
<?php include "../foot.html"; ?>