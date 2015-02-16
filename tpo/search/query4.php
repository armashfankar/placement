  <center><h4 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red    ">
                                           Results 
                </h4>
        </center>
 
<?php

$term=$_POST['diploma_agg'];
  $query1 = "select * from student_info where diploma_agg>='$term' and placed=''";
				$resultq1 = mysql_query($query1,$con);
				

?>

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
                    <th>Contact Student</th>    
                    
                    
                    
                    </tr>
                </thead>
                 <tbody>
                     <?php
while ($rowq1 = mysql_fetch_array($resultq1)){
                $sid= $rowq1['sid'];
                $fullname= $rowq1['fullname'];
                $dob = $rowq1['dob'];  
                $gender = $rowq1['gender'];      
                $about = $rowq1['about_you'];
                $institute = $rowq1['institute'];
                $university = $rowq1['university'];
                $department = $rowq1['department'];
                $batch=$rowq1['batch'];
                $deg7=$rowq1['deg_sem7'];
                $deg8=$rowq1['deg_sem8'];
                $degagg=$rowq1['deg_agg'];
                $diploma=$rowq1['diploma_agg'];
                $hsc=$rowq1['hsc'];
                $ssc=$rowq1['ssc'];
                $key=$rowq1['key_skills'];
                $project=$rowq1['project_title'];
                
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
                         <button type="submit" class="btn btn-action">Send Email</button></form>    
                        </td>
                     </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
