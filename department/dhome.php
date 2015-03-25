<?php
include "dmenu.php"; 
	$did = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from department where did='{$did}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $dname=$row['dept_name'];
                $t=$row['total_Students'];
                //$landline=$row['landline'];
                
                
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
    <h1 class="entry-title">Department Profile</h1>
<div class="container">
	<div id="respond">
<div class="bs-example">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>Department Details</th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                     <form action="dupdate.php" method="post" id="commentform">
                    <tr class="active">
                        <td>Department Name</td>
                        <td><?php echo $dname; ?></td>
                        <td></td>   
                     </tr>
                         <tr class="active">
                        <td>Total Students</td>
                        <td><?php echo $t; ?></td>
                         <td></td>  
                     </tr>
                    <!--tr class="success">
                        <td>Landline</td>
                        <td><?php echo $landline; ?></td>
                       <td></td>
                     </tr>
                    
                    <tr class="info">
                        <td>Fax</td>
                        <td><?php echo $row['fax'] ?></td>
                    <td></td>
                    </tr>
                    <tr class="warning">
                        <td>Career</td>
                        <td><?php echo $row['career'] ?></td>
                    <td></td>
                    </tr>
                    
                    <tr class="warning">
                        <td>Establishment Year</td>
                        <td><?php echo $row['estb_year'] ?></td>
                    <td></td>
                    </tr>
                    <tr class="danger">
                        <td>Address</td>
                        <td><?php echo $row['address'] ?></td>
                        <td></td>                   </tr>
                    <tr class="info">
                        <td>HR Name</td>
                        <td><?php echo $row['hrname'] ?></td>
                       <td></td>
                    </tr>
                         <tr class="success">
                        <td>Email</td>
                        <td><?php echo $row['email'] ?></td>
                             <td></td>
                        </tr>
                        <tr class="info">
                        <td>Mobile</td>
                        <td><?php echo $row['mobile'] ?></td>
                            <td></td>
                        </tr-->
                         
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
       <br><br><Br><br><br>
    <?php include "../foot.html"; ?>
