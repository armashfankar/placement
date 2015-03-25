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
$option1=$_POST['option1'];
$term1=$_POST['term1'];

if($option1=='fullname' || $option1=='department'){
				$squery = "SELECT * from student_info as si,stud_login as sl where                         si.$option1 like '%$term1%' and si.placed='' and sl.approval='yes' and                         si.sid=sl.sid";
    	$sresult = mysql_query($squery,$con);


    }
    else
    {
        $squery = "SELECT * from student_info as si,stud_login as sl where                         si.$option1>='$term1' and si.placed='' and sl.approval='yes' and                         si.sid=sl.sid";
        	$sresult = mysql_query($squery,$con);


    }
    

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
	

while ($rowq1 = mysql_fetch_array($sresult)){
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
