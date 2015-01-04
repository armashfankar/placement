<?php
include "menu1.php"; ?>
<?php session_start(); ?>
<main id="main">
<div class="container">
	<div id="respond">
						<h3 id="reply-title">Personal Information</h3>
						<form action="data.php" method="post" id="commentform">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" class="form-control" id="inputName" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="inputEmail">Email address <i class="text-danger">*</i></label>
								<input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<label for="inputWeb">Website</label>
								<input type="nane" class="form-control" id="inputWeb" placeholder="http://">
							</div>
							<div class="form-group">
								<label for="inputComment">Comment</label>
								<textarea class="form-control" rows="6"></textarea>
							</div>
							<div class="row">
								<div class="col-md-8">
									
								</div>
								<div class="col-md-4 text-right">
  									<button type="submit" class="btn btn-action">Submit</button>
								</div>
						</form>
					</div> <!-- /respond -->
					
		
	</div>	<!-- /container -->

</main></main>
<br><Br>
<?php include "foot.html"; ?>
