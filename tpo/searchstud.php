<?php
include "tpomenu.php"; ?>
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
	
	/*			$sql = "SELECT * from student_info si,stud_login sl where si.sid=sl.sid and sl.approval='yes'";
				$result = mysql_query($sql,$con);
				                */
?>  
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    
    hr {
margin-top: 20px;
margin-bottom: 20px;
border: 0;
border-top: 1px solid #7C7A7A;
}
</style>

<body>

<div class="">
	<div id="respond">
        <center><h4 style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;">
                                           Search Students 
                </h4>
        </center>
        <div class="container">
<div class="bs-example">
            <table class="table" >
                 <tbody>
                    <tr class="success">
                        <td>Name</td>
                        <form action="searchstud.php" method="post">
                        <td><input type="text" value="" name="fullname" maxlength="10">                         </td>
                        <td>
                            <input type="hidden" value="query1" name="search">
                         <button type="submit" class="btn btn-action">Search</button>
                        </form>    
                        </td>
                     </tr>
                    <tr class="success">
                        <td>SSC %</td>
                     <form action="searchstud.php" method="post">   
                    <td><input type="text" maxlength="2" value="" name="ssc"></td>
                        <td>
                                <input type="hidden" value="query2" name="search">
                        <button type="submit" class="btn btn-action">Search</button>
                        </form>    
                        </td>
                     </tr>
                    <tr class="success">
                        <td>HSC %</td>
                        <form action="searchstud.php" method="post">
                        <td><input type="text" value="" maxlength="2" name="hsc"></td>
                        <td>
                                <input type="hidden" value="query3" name="search">
                        <button type="submit" class="btn btn-action">Search</button>
                        </form>    
                        </td>
                     </tr>
                      <tr class="success">
                        <td>Diploma Agg. %</td>
                        <form action="searchstud.php" method="post">
                 <td><input type="text" value="" maxlength="2" name="diploma_agg"></td>
                        <td>
                              <input type="hidden" value="query4" name="search">
                          <button type="submit" class="btn btn-action">Search</button>
                        </form>    
                        </td>
                     </tr>
                  
                    <tr class="success">
                        <td>Degree Agg. %</td>
                       <form action="searchstud.php" method="post">
                        <td><input type="text" value="" maxlength="2" name="deg_agg"></td>
                        <td>       
                            <input type="hidden" value="query5" name="search">
                         <button type="submit" class="btn btn-action">Search</button>
                        </form>    
                        </td>
                     </tr>
                    <tr class="success">
                        <td>Key Skills</td>
                        <form action="searchstud.php" method="post">
                        <td><input type="text" value="" maxlength="8" name="key_skills"></td>
                        <td>
                               <input type="hidden" value="query6" name="search">
                         <button type="submit" class="btn btn-action">Search</button>
                        </form>    
                        </td>
                     </tr>
                       <tr class="success">
                        <td>Department</td>
                        <form action="searchstud.php" method="post">
                <td><input type="text" value="" maxlength="10" name="department"></td>
                        <td>
                          <input type="hidden" value="query7" name="search">
                        <button type="submit" class="btn btn-action">Search</button>
                 </form>    
                        </td>
                     </tr>
                  
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
      
        <?php
$search=$_POST['search'];
if($search=='query1')
{
  include "search/query1.php";
}
elseif($search=='query2')
{
 include "search/query2.php";
}
elseif($search=='query3')
{
 include "search/query3.php";
}
elseif($search=='query4')
{
 include "search/query4.php";
}
elseif($search=='query5')
{
 include "search/query5.php";
}
elseif($search=='query6')
{
 include "search/query6.php";
}
elseif($search=='query7')
{
 include "search/query7.php";
}



?>
</body>
<?php include "../foot.html"; ?>