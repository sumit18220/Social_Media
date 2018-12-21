<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" href="/Social_Media/static/css/bootstrap.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" style="background: #e6e2d3;">
				<div class="col-sm-1">
					<img src="/Social_Media/static/img/ungineering_logo.svg" style="width: 50px;height: 62px;">
				</div>
				<div class="col-sm-7" style="margin-top: 15px; color: black">
					<h4>Ungineering Social Account</h4>
				</div>
				<div class="col-sm-2" style="margin-top: 8px">
					<a href="#" class="btn"><h4 style="color: black">DashBoard</h4> </a>
				</div>
				<div class="col-sm-2" style="margin-top: 8px;">
					<?php if($name!=NULL)
							echo "<a href='#' class='btn'><h4 style='color: black'>Logout</h4></a>"; ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h6>Hi.. <?php echo $name ?></h6>
				</div>
				<div class="col-sm-6">
					<form action="/Social_Media/index.php/home/status_submit"  method="POST">
						<div class="form-group shadow-textarea">
							<label for="post">Write Your Post Here</label>
							<textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="status"></textarea>
							<button type="submit" class="btn btn-primary float-right">Post</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</body>
</html>