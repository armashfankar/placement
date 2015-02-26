  <center><h4 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red    ">
                                           Results 
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
                    <th>Excel File</th>    
                    
                    
                    
                    </tr>
                </thead>
                 <tbody>

<?php
$option1=$_POST['option1'];

$option2=$_POST['option2'];
$term1=$_POST['term1'];
$term2=$_POST['term2'];
//echo $option1."<br>".$option2."<br>".$term1."<br>".$term2;
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
	
				$sql = "SELECT * from student_info where $option1 like '%$term1%' or
                $option2 like '%$term2%' and placed=''";
                
                $result = mysql_query($sql) or die("cannot execute query");
                //$count = mysql_num_rows($result);
             //   $row = mysql_fetch_array($result);
while ($row = mysql_fetch_array($result)){

                $username = $row['username'];
                $email = $row['email'];
                $fullname= $row['fullname'];
                $address = $row['address'];
                $dob = $row['dob'];  
                $about = $row['about_you'];
                $institute = $row['institute'];
                $university = $row['university'];
                $department = $row['department'];
                $batch=$row['batch'];
                $deg1=$row['deg_sem1'];
                $deg2=$row['deg_sem2'];
                $deg3=$row['deg_sem3'];
                $deg4=$row['deg_sem4'];
                $deg5=$row['deg_sem5'];
                $deg6=$row['deg_sem6'];
                
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
                         <form action="search/excel8.php" method="post">
                        <input type="hidden" value="<?php echo $option1; ?>" name="option1"> 
                             <input type="hidden" value="<?php echo $option2; ?>" name="option2"> 
                             <input type="hidden" value="<?php echo $term1; ?>" name="term1"> 
                             <input type="hidden" value="<?php echo $term2; ?>" name="term2"> 
                         <button type="submit" class="btn btn-action">Generate</button></form>        
                        </td>
                    
                    </tr>
                                         <?php }  ?>

                     </tbody></table></div>
                    