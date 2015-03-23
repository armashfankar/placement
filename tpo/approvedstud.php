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
	
				$sql = "SELECT * from student_info si,stud_login sl where si.sid=sl.sid and sl.approval='yes' and si.placed=''";
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
                                            Approved Student List
                </h4>
        </center>
<div class="bs-example">
            <table class="table" border="1">
                <thead>
                    <tr>
                    <th>Fullname</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>About</th>
                    <th>Institute</th>
                    <th>University</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Sem 7</th>
                    <th>Sem 8</th>
                    <th>Degree Agg.</th>
                    <th>Diploma Agg.</th>
                    <th>HSC</th>
                    <th>SSC</th>
                    <th>Key Skills</th>
                    <th>Project</th>
                    <th>Approve Student</th>    
                    
                    
                    
                    </tr>
                </thead>
                 <tbody>
                     <?php
while ($row = mysql_fetch_array($result)){
                $sid= $row['sid'];
                $fullname= $row['fullname'];
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
                    <tr class="success">
                        <td><?php echo $fullname ?></td>
                        <td><?php echo $dob ?></td>
                        <td><?php echo $gender ?></td>
                        <td><?php echo $about ?></td>
                        <td><?php echo $institute ?></td>
                        <td><?php echo $university ?></td>
                        <td><?php echo $department ?></td>
                        <td><?php echo $batch ?></td>
                        <td><?php echo $deg7 ?></td>
                        <td><?php echo $deg8 ?></td>
                        <td><?php echo $degagg ?></td>
                        <td><?php echo $diploma?></td>
                        <td><?php echo $hsc ?></td>
                        <td><?php echo $ssc ?></td>
                        <td><?php echo $key ?></td>
                        <td><?php echo $project ?></td>
                        <td>
                        <form action="viewstud.php" method="post">
                        <input type="hidden" value="<?php echo $sid; ?>" name="sid"> 
                         <button type="submit" class="btn btn-action">View</button>                             </form>    
                        </td>
                        
                     </tr>
                    <?php } }else { echo 
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
                     
            }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
</div><br><br><br><br><br><br><br><br><br><br><Br>


</body>
<?php include "../foot.html"; ?>