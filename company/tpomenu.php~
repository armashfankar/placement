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
	

<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="tagline">
            
            	<?php
					$cid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from comp_login where cid='{$cid}'";
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

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="comphome.php">Home <i class="fa fa-home"></i></a></li>
					<li><a href="postjob.php">Post Job <i class="fa fa-star-half-o "></i></a></li>
					
					<li><a href="compupdate.php">Update Profile <i class="fa fa-gear "></i></a></li>
                    <li><a href="college.php">College Detail <i class="fa fa-gear "></i></a></li>
                    
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


    
    
