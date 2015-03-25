<?php include "menu.php" ?>
<?php session_start(); 

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
	
            
			/*	$mysql = "SELECT * from student_info where sid='{$studentid}'";
                $myresult = mysql_query($mysql) or die("cannot execute query");
                //$count = mysql_num_rows($result);
                $row2 = mysql_fetch_array($myresult);
                $degagg=$row['deg_agg'];
              
            	$sql = " select * from student_info as s,job as j 
                where s.deg_agg>=j.deg_agg and s.sid='$studentid' 
                and j.approval='yes'";
			
            $sql= " select * from job where approval='yes' and jid not in
                (select jid from applied_stud where sid in(select sid from student_info where sid='$studentid' ))"; */

$sql= " select j.*,s.sid from job as j,student_info as s  where j.approval='yes'and s.deg_agg>=j.deg_agg and s.sid='$studentid' and s.placed='' and j.jid not in (select jid from applied_stud where sid in(select sid from student_info where sid='$studentid'))";

        $result = mysql_query($sql,$con);
	   $count = mysql_num_rows($result);
if($count=='NULL')
{
    echo "<center><h4  style=font-family:Acadian;
                            font-size:0.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:100;><font color=red>You Have Already Applied For Jobs OR You Are Placed.</font></h6></center>";
    
}
else{
    
while ($row = mysql_fetch_array($result))
{               $jid=$row['jid'];
                $fullname=$row['fullname'];
                $compname = $row['companyname']; 
                $dept = $row['department'];
                $domain = $row['domain'];
                $location = $row['job_location'];
                $job = $row['job_role'];
                $ssc = $row['ssc'];
                $hsc = $row['hsc'];
                $deg = $row['deg_agg'];
                $dip = $row['diploma_agg'];
                $approval = $row['approval'];
 
?>

<main id="main">
	<div class="container">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
				
				<article class="post">
					<header class="entry-header">
						<h1 class="entry-title" style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;"><font color="red"><?php echo $compname; ?></font></a></h1>
					</header>
					<div class="entry-content">
<div class="container">
	<div id="respond">
<div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Job Details</th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                    <tr class="active">
                        <td>Department</td>
                        <td><?php echo $dept; ?></td>
                        <td></td>   
                     </tr>
                         <tr class="active">
                        <td>Domain</td>
                        <td><?php echo $domain ?></td>
                         <td></td>  
                     </tr>
                    <tr class="success">
                        <td>Location</td>
                        <td><?php echo $location ?></td>
                       <td></td>
                     </tr>
                    
                    <tr class="info">
                        <td>Job Role</td>
                        <td><?php echo $job; ?></td>
                    <td></td>
                    </tr>
                           <tr class="danger">
                        <td>SSC %</td>
                        <td><?php echo $ssc ?></td>
                    <td></td>
                    </tr>
                    <tr class="warning">
                        <td>HSC %</td>
                        <td><?php echo $hsc ?></td>
                    <td></td>
                    </tr>
                    <tr class="success">
                        <td>Degree Agg. %</td>
                        <td><?php echo $deg ?></td>
                    <td></td>
                    </tr>
                            <tr class="warning">
                        <td>Diploma %</td>
                        <td><?php echo $dip ?></td>
                    <td></td>
                    </tr>


                     </tbody></table></div></div></div>
                    
                    </div>
                    <form action="applyjob.php" method="post">
                    <input type="hidden" value="<?php echo $jid; ?>" name="jid">
                    <input type="hidden" value="<?php echo $studentid; ?>" name="sid">
                    <input type="hidden" value="<?php echo $job; ?>" name="job_role">
             <button type="submit" class="btn btn-action pull-right">Apply</button>
                    </form>
				</article> 
            </div>
        </div>
    </div>
</main>
<?php } } ?>
</br><br>
<br><br>
<br><br> 
<?php include "foot.html" ?>