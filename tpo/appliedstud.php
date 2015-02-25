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
	
				$sql = "SELECT * from applied_stud as a,job as j,student_info as s where a.jid=j.jid and a.sid=s.sid ";
				$result = mysql_query($sql,$con);
				                
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
                    <th>Company name</th>
                    <th>Student Name</th>
                    <!--th>View Company</th-->    
                    
                    
                    
                    </tr>
                </thead>
                 <tbody>
                     <?php
while ($row = mysql_fetch_array($result)){
                $aid= $row['aid'];
                $jid= $row['jid'];
                $sid= $row['sid'];
                $compname= $row['companyname'];
                $fullname = $row['fullname'];  
                
                     ?>
                    <tr class="success">
                        <td><?php echo $compname ?></td>
                        <td><?php echo $fullname ?></td>
                <!--The below comment is for button for giving some action to tpo-->        
                        <!--td>
                        <form action="#" method="post">
           <input type="hidden" value="<?php echo $jid; ?>" name="jid">
                    <input type="hidden" value="<?php echo $studentid; ?>" name="sid">
                    <input type="hidden" value="<?php echo $compname; ?>" name="companyname">
                    <input type="hidden" value="<?php echo $fullname; ?>" name="fullname">             <button type="submit" class="btn btn-action">View</button> </form>    
                        </td-->
                     </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
</div><br><br><br><br><Br>


</body>
<?php include "../foot.html"; ?>