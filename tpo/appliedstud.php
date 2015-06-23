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
	
				$sql = "SELECT a.aid,a.jid,a.sid,j.*,s.fullname from applied_stud as a,job as j,student_info as s where a.jid=j.jid and a.sid=s.sid ";
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
                                            Applied Students 
                </h4>
        </center>
<div class="bs-example">
            <table class="table" border="1">
                <thead>
                    <tr>
                    <th>Student Name</th>
                    <th>Company name</th>
                    <th>Job Role</th>
                    </tr>
                </thead>
                 <tbody>
                     <?php
while ($row = mysql_fetch_array($result)){
                $aid= $row['aid'];
                $jid= $row['jid'];
                $sid= $row['sid'];
                $job= $row['job_role'];
                $compname= $row['companyname'];
                $fullname = $row['fullname'];  
                
                     ?>
                    <tr class="success">
                        <td><?php echo $fullname ?></td>
                        <td><?php echo $compname ?></td>
                        <td><?php echo $job ?></td>
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