<?php
					$tpoid = $_SESSION['s_id'];
$sid=$_POST['sid'];

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
$option2=$_POST['option2'];
$term2=$_POST['term2'];
$option3=$_POST['option3'];
$term3=$_POST['term3'];
//echo $option2."<br>".$term2."<br>".$option3."<br>".$term3;


if($option2=='fullname' || $option3=='department'){
				$mquery = "SELECT * from student_info as si,stud_login as sl where                         si.$option2 like '%$term2%' and si.$option3 like '%$term3%' and si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
 elseif($option2=='deg_agg' && $option3=='diploma_agg'  )
    {
				$mquery = "SELECT * from student_info as si,stud_login as sl where                         si.$option2>='$term2' and si.$option3>='$term3' and  si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
   
    elseif($option2=='department' || $option2=='fullname' && $option3=='deg_agg' || $option3=='diploma_agg')
    {
				$mquery = "SELECT * from student_info as si,stud_login as sl where                         si.$option2 like '%$term2%' and si.$option3>='$term3' and si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
    elseif($option2=='kt' && $option3=='department'  )
    {
				$mquery = "SELECT * from student_info as si,stud_login as sl where                         si.$option2='$term2' and si.$option3 like '%$term3%' and  si.placed='' and sl.approval='yes' and si.sid=sl.sid";
    }
    
    elseif($option2=='deg_agg' || $option3=='diploma_agg' || $option3=='ssc' || $option3=='hsc' )    {
        $mquery = "SELECT * from student_info as si,stud_login as sl where                         si.$option2>='$term2' and si.$option3>='$term3' and si.placed='' and sl.approval='yes' and  si.sid=sl.sid";
    }
    
    $mresult = mysql_query($mquery,$con);
       

header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=spreadsheet.xls" );
	
	// print your data here. note the following:
	// - cells/columns are separated by tabs ("\t")
	// - rows are separated by newlines ("\n")
	
	// for example:
		echo 'Full Name' . "\t" . 'DOB' . "\t" . 'Gender' . "\t" . 'About' ."\t".'Institute'."\t".'University'."\t".'Department'."\t".'Batch'
."\t".'Sem1'
."\t".'Sem2'
."\t".'Sem3'
."\t".'Sem4'
."\t".'Sem5'
."\t".'Sem6'
."\t".'Sem7'
."\t".'Sem8'
."\t".'Degree Agg'."\t".'Diploma'."\t".'hsc'."\t".'ssc'."\t".'Key Skills'."\t".'Project'."\n";
	

while ($rowq1 = mysql_fetch_array($mresult)){
                $sid= $rowq1['sid'];
                $fullname= $rowq1['fullname'];
                $dob = $rowq1['dob'];  
                $gender = $rowq1['gender'];      
                $about = $rowq1['about_you'];
                $institute = $rowq1['institute'];
                $university = $rowq1['university'];
                $department = $rowq1['department'];
                $batch=$rowq1['batch'];
                $deg1=$rowq1['deg_sem1'];
                $deg2=$rowq1['deg_sem2'];
                $deg3=$rowq1['deg_sem3'];
                $deg4=$rowq1['deg_sem4'];
                $deg5=$rowq1['deg_sem5'];
                $deg6=$rowq1['deg_sem6'];
               
                $deg7=$rowq1['deg_sem7'];
                $deg8=$rowq1['deg_sem8'];
                $degagg=$rowq1['deg_agg'];
                $diploma=$rowq1['diploma_agg'];
                $hsc=$rowq1['hsc'];
                $ssc=$rowq1['ssc'];
                $key=$rowq1['key_skills'];
                $project=$rowq1['project_title'];
    
      echo $fullname . "\t" . $dob . "\t" . $gender ."\t".$about."\t".$institute."\t".$university."\t".$department."\t".$batch.  "\t".$deg1."\t".$deg2."\t".$deg3."\t".$deg4."\t".$deg5."\t".$deg6."\t".$deg7."\t".$deg8."\t".$degagg."\t".$diploma."\t".$hsc."\t".$ssc."\t".$key."\t".$project. "\n";

} 
?>
