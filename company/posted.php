<?php
include "compmenu.php"; 
	$cid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from comp_info where cid='{$cid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $compname=$row['companyname'];
                
                
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
                </style>  <body>
    <h1 class="entry-title">Posted Jobs</h1>
<div class="container">
	<div id="respond">
<div class="bs-example">
    <?php 				
                $mysql = "SELECT * from job where compname='{$compname}' and approval='yes'";
				$result2 = mysql_query($mysql,$con);
				$row2=mysql_fetch_array($result2);
                $dept=$row2['department'];
                $domain=$row2['domain'];
                $joblocation=$row2['job_location'];
                $jobrole=$row2['job_role'];
                $ssc=$row2['ssc'];
                $hsc=$row2['hsc'];
                $dip=$row2['diploma_agg'];
                $deg=$row2['deg_agg'];
                $venue=$row2['venue'];
                $approval=$row2['approval'];
        if($approval=='yes')
        {            
?>
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Company Details</th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                     <form action="compupdate.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Company Name</td>
                        <td><?php echo $compname; ?></td>
                        <td></td>   
                     </tr>
                         <tr class="active">
                        <td>Department</td>
                        <td><?php echo $dept; ?></td>
                         <td></td>  
                     </tr>
                    <tr class="success">
                        <td>Domain</td>
                        <td><?php echo $domain; ?></td>
                       <td></td>
                     </tr>
                    
                    <tr class="info">
                        <td>Job Location</td>
                        <td><?php echo $joblocation; ?></td>
                    <td></td>
                    </tr>
                    <tr class="warning">
                        <td>Job Role</td>
                        <td><?php echo $jobrole; ?></td>
                    <td></td>
                    </tr>
                    
                    <tr class="warning">
                        <td>SSC</td>
                        <td><?php echo $ssc; ?></td>
                    <td></td>
                    </tr>
                    <tr class="danger">
                        <td>HSC</td>
                        <td><?php echo $hsc; ?></td>
                        <td></td>                   </tr>
                    <tr class="info">
                        <td>Diploma %</td>
                        <td><?php echo $dip; ?></td>
                       <td></td>
                    </tr>
                         <tr class="success">
                        <td>Degree %</td>
                        <td><?php echo $deg; ?></td>
                             <td></td>
                        </tr>
                        <tr class="info">
                        <td>Venue</td>
                        <td><?php echo $venue; ?></td>
                            <td></td>
                        </tr>
                         
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-action">Edit Profile</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
        <br><br><br>           
                    
                
<?php
        }
  else 

{
echo "<b><center><h3><font color=red>No job Posted</font></h3></center></b>";
      echo "<center><a href=postjob.php>Post New JOb</a></center>";
}
  ?></body>
