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
	
				$sql1 = "SELECT * from tpo where tid='{$tpoid}'";
				$result1 = mysql_query($sql,$con);
				$row1=mysql_fetch_array($result);
                $username=$row1['username'];
               
                $sql2 = "SELECT * from tpo_info where tid='{$tpoid}'";
				$result2 = mysql_query($sql2,$con);
				$row2=mysql_fetch_array($result2);
                
                $name=$row2['name'];
                ?>
                <img class="img-circle" src="uploaded/<?php echo $name; ?> " height="160" width="160">
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
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="tpohome.php">Home <i class="fa fa-home"></i></a></li>
                    
                    <li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">News & Events <i class="fa fa-info-circle "></i></a>
						<ul class="dropdown-menu">
							<li><a href="postnews.php">Post News & Event</a></li>
							<li><a href="postednews.php">View Posted Events</a></li>
				        </ul>
					</li>
                
                    <li><a href="updateprofile.php">Update Profile <i class="fa fa-gear "></i></a></li>
                    
                    <li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Students <i class="fa fa-users"></i></a>
						<ul class="dropdown-menu">
							<!--li><a href="pendingstud.php">Pending Students &nbsp;&nbsp;<span class="badge"><?php echo  $prow['count(sid)']; ?></span> </a>
                            </li-->
							<li><a href="approvedstud.php">Approved Students &nbsp;&nbsp;<span class="badge"><?php echo  $arow['count(sl.sid)']; ?></span></a></li>
							<li><a href="placedstud.php">Placed Students &nbsp;&nbsp;<span class="badge"><?php echo  $placedrow['count(sid)']; ?></span></a></li>
						    <li><a href="search.php">Search Students</a></li>
						    <li><a href="#" id="forgotpassword" data-toggle="modal" data-target="#largeModal1">Send Email To All</a></li>
                        </ul>
					</li>
                    
            <?php
            //Pending students count query
           
            $pj="select count(jid) from job where approval=''";
            $pjresult = mysql_query($pj,$con);
				$pjrow=mysql_fetch_array($pjresult);
            
            //Approved students count query
            $aj="select count(jid) from job where approval='yes'";
            $ajresult = mysql_query($aj,$con);
				$ajrow=mysql_fetch_array($ajresult);
            
               
            
            ?>
                    <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-building-o"></i></a>
						<ul class="dropdown-menu">
							<li><a href="pendingjobs.php">Pending Jobs
    &nbsp;&nbsp;<span class="badge"><?php echo  $pjrow['count(jid)']; ?></span>
                                </a></li>
							<li><a href="approvedjobs.php">Approved Jobs&nbsp;&nbsp;<span class="badge"><?php echo  $ajrow['count(jid)']; ?></span></a></li>
                            <li><a href="appliedstud.php">Applied Students</a></li>
						</ul>
					</li>

        <li><a href="graph/mygraph.php" target="_blank">Stats&nbsp;<i class="fa fa-bar-chart-o"></i></a></li>
		
		<li><a href="../logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>


    <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-          labelledby="largeModal" aria-hidden="true">
    <form id="companyemail" action="emailtoall.php" method="post" class="form-horizontal" role="form">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <h4 class="modal-title" id="myModalLabel">Send Email To All Students</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                           <div class="panel-body" >
        <div style="margin-bottom: 30px" class="input-group">
            <!--select name="department" required>
                            <option value ="computer" selected>Computer Engineering</option>
                            <option value ="electronics&tele">Electronics & Tele.</option>
                            <option value ="civil" >Civil Engineering</option>
                            <option value ="mechanical">Mechanical Engineering</option>
                            <option value ="electrical">Electrical Engineering</option>
                            </select-->
    <input type="checkbox" name="check_list[]" value="computer"><label>Computer</label>&nbsp;
<input type="checkbox" name="check_list[]" value="electronics&tele"><label>Electronics & Tele.Comm.</label> &nbsp;
<input type="checkbox" name="check_list[]" value="civil"><label>Civil Engineering</label>&nbsp;<br>
<input type="checkbox" name="check_list[]" value="mechanical"><label>Mechanical Engineering</label>&nbsp;
<input type="checkbox" name="check_list[]" value="electrical"><label>Electrical Engineering</label><br/>

            <textarea name="message" rows="6" cols="50" ></textarea>
        </div>
        		                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
         <button id="btn-login" type="submit" class="btn btn-default">Send Email  </button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


    
