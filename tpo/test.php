<?php
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
	
				$sql1 = "SELECT * from student_info where sid='54'";
                $result1 = mysql_query($sql1) or die("cannot execute query");
                $count1 = mysql_num_rows($result1);
                $row1 = mysql_fetch_array($result1)
                $username = $row1['username'];
        echo $username;
?>