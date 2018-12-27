<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
		if(isset($_COOKIE['user_id']) || isset($_COOKIE['user_name']))
		{
			$user_name=$_COOKIE['user_name'];
			$user_id=$_COOKIE['user_id'];
		}
		else
		{
			$user_name=NULL;
			$user_id=NULL;
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" href="/social_media/static/css/bootstrap.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" style="background: #e6e2d3;">
				<div class="col-sm-1">
					<img src="/social_media/static/img/ungineering_logo.svg" style="width: 50px;height: 62px;">
				</div>
				<div class="col-sm-6" style="margin-top: 15px; color: black">
					<h4>Ungineering Social Account</h4>
				</div>

				<div class="col-sm-1" style="margin-top: 15px">
					<?php if ($user_name!=NULL) {
						echo " <h4 style='color:black'>".$user_name."</h4>";
					}
					?>
				</div>
				
				<div class="col-sm-2" style="margin-top: 8px">
					<a href="/social_media/index.php/home/dashboard" class="btn"><h4 style="color: black">DashBoard</h4> </a>
				</div>
				
				<div class="col-sm-2" style="margin-top: 8px;">
					<?php if($user_name!=NULL)
							echo "<a href='/social_media/index.php/home/logout' class='btn'><h4 style='color: black'>Logout</h4></a>";

							else
								echo  "<a href='/social_media/index.php/home/login' class='btn'><h4 style='color: black'>Login</h4></a>"?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h6><?php if($user_name!=NULL)
                            echo "Hi..".$user_name;
                        ?>
                    </h6>
				</div>
				<div class="col-sm-6">
					<form action="/social_media/index.php/home/status_submit"  method="POST">
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
