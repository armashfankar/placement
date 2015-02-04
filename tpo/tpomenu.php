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
	
				$sql = "SELECT * from tpo where tid='{$tpoid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
                $username=$row['username'];
               
                $sql1 = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result1 = mysql_query($sql1,$con);
				$row1=mysql_fetch_array($result1);
                
                $name=$row1['name'];
                ?>
                <img class="img-circle" src="uploaded/<?php echo $username; ?> " height="160" width="160">
                <?php
                echo "<font color=white>".Welcome."&nbsp;".$name."</font>";
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
					<li class="active"><a href="tpohome.php">Home <i class="fa fa-home"></i></a></li>
					<li><a href="postnews.php">Post News & Events <i class="fa fa-star-half-o "></i></a></li>
					
					
                    <!--li><a href="tpostudent.php">Student <i class="fa fa-gear "></i></a></li>
                    <li><a href="tpocompany.php">Company <i class="fa fa-gear "></i></a></li-->
                    <li><a href="tpoupdate.php">Update Profile <i class="fa fa-gear "></i></a></li>
                    
                    <li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Student <i class="fa fa-bell-o "></i></a>
						<ul class="dropdown-menu">
							<li><a href="pendingstud.php">Pending Students</a></li>
							<li><a href="approvedstud.php">Approved Students</a></li>
							<li><a href="viewstud.php">View Student Profile</a></li>
						</ul>
					</li>
                    
                    <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-bell-o "></i></a>
						<ul class="dropdown-menu">
							<li><a href="pendingjobs.php">Pending Jobs</a></li>
							<li><a href="approvedjobs.php">Approved Jobs</a></li>
							<li><a href="viewcomp.php">View Company Details</a></li>
						</ul>
					</li>

		<li><a href="../logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>


    
    
