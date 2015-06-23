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

  $query1 = "SELECT count(si.sid) from student_info si,stud_login sl where si.sid=sl.sid and sl.approval='yes' and si.placed='yes'";
				$resultg = mysql_query($query1,$con);
      
$row = mysql_fetch_array($resultg);

 
 $stud = $row['count(si.sid)'];
 $tit="Placed Students Statistics";
//echo $stud;

//link:
//http://phpmygraph.abisvmm.nl/#verticalSimpleColumnGraph
    //Set content-type header
    header("Content-type: image/png");

    //Include phpMyGraph5.0.php
    include_once('phpMyGraph5.0.php');
    
    //Set config directives
    $cfg['title'] = $tit;
    $cfg['width'] = 1200;
    $cfg['height'] = 750;
    


    //Set data
    $data = array(
        '2015' => $stud,
        '2016' => 0,
        '2017' => 0,
        '2019' => 0,
        '2020' => 0,
        '2021' => 0,
        
            ); 
    
    //Create phpMyGraph instance
    $graph = new phpMyGraph();

    //Parse
    $graph->parseVerticalColumnGraph($data, $cfg);
   
?>	
