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
$fullname1=$_POST['fullname'];
$query1 = "select * from student_info where fullname like '%$fullname1%' and placed=''";
				$result = mysql_query($query1,$con);



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
	

while ($rowq1 = mysql_fetch_array($result)){
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
    
      echo $fullname . "\t" . $dob . "\t" . $gender ."\t".$about."\t".$institute."\t".$university."\t".$department."\t".$batch.  "\t".$deg1."\t".$deg2."\t".$deg3."\t".$deg4."\t".$deg5."\t".$deg6."\t".$deg7."\t".$deg8."\t".$degagg."\t".$diploma."\t".$hsc."\t".$ssc."\t".$key."\t".$project. "\n";

}
?>
