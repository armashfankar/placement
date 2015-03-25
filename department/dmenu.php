<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="shortcut icon" href="../img/p.png">
		<title>Placement</title>
		<meta name="placement" content="description">
		<meta name="placement" content="placement">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
	<link href="../assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!--	<link href="assets/css/font-awesome.css" rel="stylesheet">-->
	
    <!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="../assets/css/styles.css">
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="tagline">
            
            	<?php
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
                $username=$row['username'];
                ?>
                <img class="img-circle" src="uploaded/<?php echo $username; ?> " height="160" width="160">
                <?php
                echo "<font color=white>".Welcome."&nbsp;".$username."</font>";
				?>
                </span>
			
		</h1>
	</div>
	<?php
            //Pending students count query
           
            $pending="select count(sid) from stud_login where approval=''";
            $presult = mysql_query($pending,$con);
				$prow=mysql_fetch_array($presult);
            
            //Approved students count query
            $approved="select count(sl.sid) from stud_login as sl,student_info as si where si.sid=sl.sid and  sl.approval='yes' and si.placed=''";
            $aresult = mysql_query($approved,$con);
				$arow=mysql_fetch_array($aresult);
            
            //Placed students count query   
            $placed="select count(sid) from student_info where placed='yes'";
            $placedresult = mysql_query($placed,$con);
				$placedrow=mysql_fetch_array($placedresult);
               
            
            ?>
		
	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="dhome.php">Home <i class="fa fa-home"></i></a></li>
					
					<li><a href="pendingstud.php">Pending Students &nbsp;&nbsp;<span class="badge"><?php echo  $prow['count(sid)']; ?></span> </a>
                            </li>
							<li><a href="approvedstud.php">Approved Students &nbsp;&nbsp;<span class="badge"><?php echo  $arow['count(sl.sid)']; ?></span></a></li>
							<li><a href="placedstud.php">Placed Students &nbsp;&nbsp;<span class="badge"><?php echo  $placedrow['count(sid)']; ?></span></a></li>
				
                    
                    
                    <!--li class="dropdown">
					<	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification  <i class="fa fa-bell-o "></i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Notification 1</a></li>
							<li><a href="#">Notification 2</a></li>
							<li><a href="#">Notification 3</a></li>
						</ul>
					</li>-->

		<li><a href="../logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>


    
    
