<?php
session_start();
			$studentid = $_SESSION['s_id'];

?>
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
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Upload Your Resume/CV</h3>
					</div>
				<center> 
        <form action ='postresume.php' method='POST' enctype='multipart/form-data'>
	
                        <input type='file' name='myresume'><br>
                    <div class="text-center">
                        <h6>Please Upload Resume In PDF Format.</h6>
						<button class="btn btn-primary" type="Submit">Upload</a>
					</div>
        </form>
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
