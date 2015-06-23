<?php include "menu.php" ?>
<?php session_start(); 

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
	
				$sql = "SELECT * from news ORDER BY newsid DESC";
				$result = mysql_query($sql,$con);
	//			$row=mysql_fetch_array($result);
                
while ($row = mysql_fetch_array($result))
{
$title = $row['title'];
                $description = $row['description']; 
                $date = $row['date'];
                $venue = $row['venue'];
                $ldate = $row['last_date'];
                $contact = $row['contact'];
                $email = $row['email'];


?>

<main id="main">
	<div class="container">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
				<form method="post" action="applyevent.php">											
				<article class="post">
					<header class="entry-header">
						<div class="entry-meta"> 
							<span class="posted-on"><time class="entry-date published" date="2013-09-27"><?php echo $date; ?></time></span>			
						</div>
						<h1 class="entry-title" style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;"><font color="red"><?php echo $title; ?></font></a></h1>
					</header>
					<div class="entry-content">
						<p><?php echo $description; ?><br>
<b>Venue: <u><?php echo $venue; ?></u></b><br/>
<b>Last Date To Apply: <u><?php echo $ldate; ?></u></b><br/>
<b>Email: <u><?php echo $email; ?></u></b><br/>
<b>Contact: <u><?php echo $contact; ?></u></b><br/>
                        </p>
                    </div>
                 <!--button type="submit" class="btn btn-action">Apply</button-->
                    </form>
				</article><hr size='1'>
            </div>
        </div>
    </div>
</main><br><br>
<?php } ?>
</br><br><br><br><br><br><br>
<?php include "foot.html" ?>