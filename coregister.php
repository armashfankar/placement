<?php
include "head.html";
?>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
				<a href="index.php" class="txt-default">Already have an account?</a>
			</div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Placement Register</h3>
                    <form name="compreg" action="coord_Reg.php" method="post">   
					</div>
					<div class="form-group">
						<!--<label class="control-label">Company name</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Full Name" name="fullname" />
					</div>
					<div class="form-group">
						<!--<label class="control-label">email</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Email" name="email" />
					</div>
					
                        <div class="form-group">
						<!--<label class="control-label">website</label>-->
						<input type="text" required data-validation-required-message="Please enter your name." class="form-control" placeholder="Department" name="department" />
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
</body>
</html>
