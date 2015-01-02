<?php
include "head.html";
?>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

<!--#####################
Additional Styles (required)
######################-->
<style>
html,body {
	height:100%;
	width:100%;
	position:relative;
}
#background-carousel{
	position:fixed;
	width:100%;
	height:100%;
	z-index:-1;
}
.carousel,
.carousel-inner {
	width:100%;
	height:100%;
	z-index:0;
	overflow:hidden;
}
.item {
	width:100%;
	height:100%;
	background-position:center center;
	background-size:cover;
	z-index:0;
}

#content-wrapper {
	position:absolute;
	z-index:1 !important;
	min-width:100%;
	min-height:100%;
}
</style>


<body>
    <div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(img/slider1.jpg)"></div>
        <div class="item" style="background-image:url(img/slider2.jpg)"></div>
        <div class="item" style="background-image:url(img/slider3.jpg)"></div>  
          <div class="item" style="background-image:url(img/slider4.jpg)"></div>  
      
      </div>
    </div>
</div>

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<!--<div class="text-right">
				<a href="index.php" class="txt-default">Already have an account?</a>
			</div>-->
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="">Placement Register</h3>
                        <div class="text-right">
				<a href="index.php" >Already have an account?</a>
			</div>
                        <div class="page-header"></div>
                 <!--- FORM STARTS HERE-->
                    <form name="studreg" action="stud_reg.php" method="post">   
					</div>
					<div class="form-group">
						<!--<label class="control-label">Username</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Username" name="username" />
					</div>
					<div class="form-group">
						<!--<label class="control-label">E-mail</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Email" name="email" />
					</div>
					<div class="form-group">
						<!--<label class="control-label">Password</label>-->
						<input type="password"  required data-validation-required-message="Please enter your name." class="form-control" placeholder="Password" name="password" />
					</div>
                        <div class="form-group">
						<!--<label class="control-label">Confirm Password</label>-->
						<input type="password"  required data-validation-required-message="Please enter your name." class="form-control" placeholder="Repeat Password" name="repeatpassword" />
					</div>
					
					<div class="text-center">
						<button type="submit" class="btn btn-small btn-primary">Register</button>
					</div>
                    </form>
                    <br>
                    <div class="omb_login">
    	<div class="row omb_row-sm-offset-3 omb_loginOr">
		</div>
        <div class="row  omb_socialButtons">
                    <div class="container-fluid">
                    <div class="col-md-6">
                    <a href="compregister.php" class="btn btn-small btn-block btn-primary">
			        <span class="hidden-xs">Company Signup</span>
		        </a>
                        </div>
                        
                     <div class="col-md-6">   
                    <a href="coregister.php" class="btn btn-small btn-block btn-primary">
			        <span class="hidden-xs">Coordinator Signup</span>
		        </a>
                         </div>
                        </div>
                        </div>
        	</div>
                    

		</div>
                    
    
				</div>
			</div>
		</div>
	</div>
</div>
<script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
	$('#myCarousel').carousel({
		pause: 'none'
	})	
});
</script>


</body>
</html>
