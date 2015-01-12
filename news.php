<?php include "menu.php" ?>
<?php session_start(); 

/*	$studentid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from news";
                $result = mysql_query($sql) or die("cannot execute query");
                $count = mysql_num_rows($result);
                $title = $row['title'];
                $description = $row['description']; */
?>

<main id="main">
	<div class="container">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
															
				<article class="post">
					<header class="entry-header">
						<div class="entry-meta"> 
							<span class="posted-on"><time class="entry-date published" date="2013-09-27">September 27, 2013</time></span>			
						</div>
						<h1 class="entry-title">Hello world!</a></h1>
					</header>
					<div class="entry-content">
						<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, molestias, architecto, adipisci, numquam dolor iusto eos reprehenderit placeat quam debitis quas magni eveniet. Saepe, nam, iste consectetur quae necessitatibus dolores provident veritatis possimus rerum facilis quia dicta itaque sapiente iusto natus quidem magni quibusdam. Explicabo nesciunt vel rem obcaecati reprehenderit eveniet culpa repudiandae. Distinctio, quia, provident illum necessitatibus repellendus rem voluptates exercitationem numquam inventore itaque atque sint nihil eveniet consequuntur eius! Laborum, at sit animi quae quidem ex tempora facilis.
                        
<b><u>Venue:</u></b>
<b><u>Email:</u></b>
<b><u>Contact:</u></b>
                        
                        </pre>
                    </div>				
				</article>
            </div>
        </div>
    </div>
</main><br><br></br><br>
<?php include "foot.html" ?>