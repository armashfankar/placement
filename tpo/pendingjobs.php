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
	
				$sql = "SELECT * from job where approval=''";
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
                                            Pending Jobs
                </h4>
        </center>
<div class="bs-example">
            <table class="table" border="1">
                <thead>
                    <tr>
                    <th>Company name</th>
                    <th>Department</th>
                    <th>Domain</th>
                    <th>Job Location</th>
                    <th>Job Role</th>
                    <th>Salary</th>
                    <th>SSC %</th>
                    <th>HSC %</th>
                    <th>Diploma Agg. %</th>
                    <th>Degree Agg. %</th>
                    <th>Venue</th>
                    <th>Approve Job</th>    
                    
                    
                    
                    </tr>
                </thead>
                 <tbody>
                     <?php
while ($row = mysql_fetch_array($result)){
                $jid= $row['jid'];
                $compname= $row['companyname'];
                $department = $row['department'];  
                $domain = $row['domain'];      
                $location = $row['job_location'];
                $role = $row['job_role'];
                $salary = $row['salary'];
                $degagg=$row['deg_agg'];
                $diploma=$row['diploma_agg'];
                $hsc=$row['hsc'];
                $ssc=$row['ssc'];
                $venue=$row['venue'];
                
                     ?>
                    <tr class="success">
                        <td><?php echo $compname ?></td>
                        <td><?php echo $department ?></td>
                        <td><?php echo $domain ?></td>
                        <td><?php echo $location ?></td>
                        <td><?php echo $role ?></td>
                        <td><?php echo $salary ?></td>
                        <td><?php echo $degagg ?></td>
                        <td><?php echo $diploma ?></td>
                        <td><?php echo $hsc ?></td>
                        <td><?php echo $ssc ?></td>
                        <td><?php echo $venue ?></td>
                        <td>
                        <form action="approvejob.php" method="post">
                        <input type="hidden" value="<?php echo $jid; ?>" name="jid"> 
                        <button type="submit" class="btn btn-action">Approve</button> </form>    
                        </td>
                     </tr>
                    <?php } }else { echo 
"<center><h4 style=font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red>
                          Sorry :( <br>  No Record(s) Found 
                </h4>
        </center>
"; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
</div><br><br><br><br><Br>


</body>
<?php include "../foot.html"; ?>