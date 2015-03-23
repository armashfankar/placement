<?php
include "tpomenu.php"; ?>
<?php session_start(); 

$compname=$_POST['companyname'];
	//$studentid = $_SESSION['s_id'];


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
	
				$sql3 = "SELECT * from comp_info where companyname='$compname'";
                $result3= mysql_query($sql3) or die("cannot execute query");
                $count3 = mysql_num_rows($result3);
                 $row3 = mysql_fetch_array($result3);
                $uname= $row3['username'];    
                $cname= $row3['companyname'];
                $website = $row3['website'];
                $landline = $row3['landline'];  
                $fax = $row3['fax'];
                $career = $row3['career'];
                $estb = $row3['estb_year'];
                $address = $row3['address'];
                $hrname=$row3['hrname'];
                $email=$row3['email'];
                $mobile=$row3['mobile'];
                
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

<h1 class="entry-title" style="font-family:Acadian;
                            font-size:1.5em;
                            font-variant:small-caps;
                            font-style:oblique;
                            font-weight:800;"><?php echo $cname;?> Profile</h1>
<div class="container">
	<div id="respond">
<div class="bs-example">
    <!--form action="emailtocomp.php" method="post">
        <input type="hidden" value="<?php echo $email ?>" name="email">
        <button type="submit" class="btn btn-action pull-right">Send Email</button>
    </form-->
    <button type="submit" id="forgotpassword" data-toggle="modal" data-target="#largeModal1" class="btn btn-action pull-right">Send Email</button>
        <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    
                    </tr>
                </thead>
                 <tbody>
                    <tr class="active">
                        <td><b>Company Name</b></td>
                        <td><b><font color="red"><?php echo $cname ?></b></font></td>
                        <td><img class="img-circle" src="../company/uploaded/<?php echo $uname; ?>" height="160" width="160"></td> 
                        
                     </tr>
                         <tr class="active">
                        <td>Website</td>
                        <td><?php echo $website ?></td>
                         <td></td>  
                     </tr>
                    <tr class="success">
                        <td>Landline</td>
                        <td><?php echo $landline ?></td>
                       <td></td>
                     </tr>
                    
                    <tr class="info">
                        <td>Fax</td>
                        <td><?php echo $fax ?></td>
                    <td></td>
                    </tr>
                    <tr class="warning">
                        <td>Career</td>
                        <td><?php echo $career ?></td>
                    <td></td>
                    </tr>
                    
                    <tr class="warning">
                        <td>Establishment Year</td>
                        <td><?php echo $estb ?></td>
                    <td></td>
                    </tr>
                    <tr class="danger">
                        <td>Address</td>
                        <td><?php echo $address ?></td>
                        <td></td>                   </tr>
                    <tr class="info">
                        <td>HR Name</td>
                        <td><?php echo $hrname ?></td>
                       <td></td>
                    </tr>
                         <tr class="success">
                        <td>Email</td>
                        <td><?php echo $email ?></td>
                             <td></td>
                        </tr>
                        <tr class="info">
                        <td>Mobile Number</td>
                        <td><?php echo $mobile ?></td>
                            <td></td>
                        </tr>
                       <tr class="info">
                        <td></td>
                        <td></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>



<div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-          labelledby="largeModal" aria-hidden="true">
    <form id="companyemail" action="emailtocomp.php" method="post" class="form-horizontal" role="form">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <h4 class="modal-title" id="myModalLabel">Send Email To <?php echo $compname; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="col-sm-5">
                                            <div class="panel-body" >
        <div style="margin-bottom: 50px" class="input-group">
        <textarea name="message" rows="3"></textarea>
        <input type="hidden" value="<?php echo $email; ?>" name="email">
        </div>
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

</div><br><br><br><br><Br>
<?php include "../foot.html"; ?>
