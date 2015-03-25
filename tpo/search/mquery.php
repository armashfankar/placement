<?php
session_start();
					$tpoid = $_SESSION['s_id'];
?> 
<?php
$option2=$_POST['option2'];
$term2=$_POST['term2'];
$option3=$_POST['option3'];
$term3=$_POST['term3'];
//echo $option2."<br>".$term2."<br>".$option3."<br>".$term3;
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
	if($option2=='fullname' || $option3=='department'){
				$sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option2 like '%$term2%' and si.$option3 like '%$term3%' and si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
 elseif($option2=='deg_agg' && $option3=='diploma_agg'  )
    {
				$sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option2>='$term2' and si.$option3>='$term3' and  si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
   
    elseif($option2=='department' || $option2=='fullname' && $option3=='deg_agg' || $option3=='diploma_agg')
    {
				$sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option2 like '%$term2%' and si.$option3>='$term3' and si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
    elseif($option2=='kt' && $option3=='department'  )
    {
				$sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option2='$term2' and si.$option3 like '%$term3%' and  si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
    
    elseif($option2=='deg_agg' || $option3=='diploma_agg' || $option3=='ssc' || $option3=='hsc' )    {
        $sql = "SELECT * from student_info as si,stud_login as sl where                         si.$option2>='$term2' and si.$option3>='$term3' and si.placed='' and sl.approval='yes' and  si.sid=sl.sid";
    }
   
                $result = mysql_query($sql) or die("cannot execute query");
   
                $count = mysql_num_rows($result);
            if($count==true){
          //   $row = mysql_fetch_array($result);
?>
<center><h4 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;
                            color :red    ">
                        <?php echo $count." Record(s) Found"; ?>
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

<?php
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
          
                 <tbody>
         
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
                         <form action="search/mexcel.php" method="post">
                        <input type="hidden" value="<?php echo $option2; ?>" name="option2"> 
                             <input type="hidden" value="<?php echo $term2; ?>" name="term2"> 
                             <input type="hidden" value="<?php echo $option3; ?>" name="option3"> 
                             <input type="hidden" value="<?php echo $term3; ?>" name="term3"> 
                        
                         <button type="submit" class="btn btn-action">Generate</button></form>        
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
"; }
                     ?>

                     </tbody></table></div>
               