<?php
include "head.html";
session_start();
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
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Company Signup</h3>
			<div class="text-right">
				<a href="index.php" >Already have an account?</a>
			</div>
                        
                    <form name="studreg" action="comp_reg.php" method="post">   
					</div>
					<div class="form-group">
						<!--<label class="control-label">Company name</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Company Name" name="companyname" />
					</div>
					
					
                        <div class="form-group">
						<!--<label class="control-label">website</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Website" name="website" />
					</div>
                         <div class="form-group">
						<!--<label class="control-label">username</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Username" name="username" />
					</div>
					<div class="form-group">
					<!--	<label class="control-label">Password</label>-->
						<input type="password"  required data-validation-required-message="Please enter your name." class="form-control" placeholder="Password" name="password" />
					</div>
                        <div class="form-group">
						<!--<label class="control-label">Confirm Password</label>-->
						<input type="password"  required data-validation-required-message="Please enter your name." class="form-control" placeholder="Confirm Password" name="repeatpassword" />
					</div>
					
					<div class="text-center">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
                    </form>
                    
                    

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
