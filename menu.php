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
	<link href="assets/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!--	<link href="assets/css/font-awesome.css" rel="stylesheet">-->
	
    <!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="tagline">
            
            	<?php
					$studentid = $_SESSION['s_id'];


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
	
				$sql1 = "SELECT * from student_info where sid='{$studentid}'";
				$result1 = mysql_query($sql1,$con);
				$row1=mysql_fetch_array($result1);
                $username=$row1['username'];
                ?>
                <img class="img-circle" src="uploaded/<?php echo $username; ?>" height="160" width="160">
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
					<li class="active"><a href="home.php">Home <i class="fa fa-home"></i></a></li>
					<li><a href="news.php">News & Events <i class="fa fa-info-circle "></i></a></li>
					
					<li><a href="updateprofile.php">Update Profile <i class="fa fa-gear "></i></a></li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification  <i class="fa fa-bell-o "></i></a>
						<ul class="dropdown-menu">
							<li><a href="latestjobs.php">Job Notification</a></li>
							<li><a href="#" id="forgotpassword" data-toggle="modal" data-target="#largeModal1">Other</a></li>
							
						</ul>
					</li>
                    
        <!--li><a href="latestjobs.php">Job Notification <i class="fa fa-star-half-o "></i></a></li-->
		
		<li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>

<?php
$sug = "SELECT domain from job where approval='yes' and domain not in (select key_skills from student_info where sid='{$studentid}')";
				$myresult = mysql_query($sug,$con);
				
    ?>
     <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-          labelledby="largeModal" aria-hidden="true">
    <form id="companyemail" action="emailtoall.php" method="post" class="form-horizontal" role="form">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <h4 class="modal-title" id="myModalLabel">Suggestions</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
            <div class="panel-body" >
        <p> Hello <?php echo $username;?><br>
            Companies are posting jobs for
            (<?php 
            while($myrow=mysql_fetch_array($myresult)){
                $key=$myrow['domain'];
            echo $key; ?>  <?php } ?>)
        </p>
                                            </div>
        		                        
                                    </div>
                                </div>
                                <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


    

    
