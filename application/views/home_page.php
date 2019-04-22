<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	if(isset($_COOKIE['user_id']) || isset($_COOKIE['user_name']))
	{
		//echo "1";
		$user_name=$_COOKIE['user_name'];
		$user_id=$_COOKIE['user_id'];
	}
	else
	{
		$user_name=NULL;
		$user_id=NULL;
	}
	//print_r($statuses);	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" type="text/css" href="/social_media/static/css/homepage.css">
	</head>
	<body class="container">
		<div class="row">
			<div class="col left-header">
				<div class="col logo1">
					<img class="img" src="/social_media/static/img/ungineering_logo.svg">
				</div>
				<div class="col logo">
					<div class="row">
						<h2 class="ungineering"><span class="red">un</span>gineering</h2>
						<hr class="hr">
					</div>
					<div class="row">
						<p class="slogan">A <span class="red">bit</span> of knowledge is good <br> A <span class="red">byte</span> is better</p>
					</div>
				</div>
			</div>
			<div class="col right-header">
				<?php if($user_name != NULL) { ?>
					<div class="col username">
						 <h4 class="dash user">Hi.. <?php echo $user_name ?> </h4> 
					</div>
				<?php } ?>

				<?php if($user_name!=NULL) { ?> 
					<div class="col dashboard">
						<a href="/social_media/index.php/dashboard" class="dash"> My Dashboard </a>
					</div>
				<?php } ?>

				<div class="col logout">
					<?php if($user_name!=NULL) { ?>
						<a href="/social_media/index.php/login/logout" class="dash log" >Logout</a>
					<?php } 	

						else {?>
							<a href="/social_media/index.php/login" class="dash log" id="padd">Login</a>
					<?php } ?>
				</div>

				<?php if($user_name==NULL) { ?>
					<div class="col new-user">
						<a href="/social_media/index.php/registration" class="new">New user</a>
					</div>
				<?php } ?>
			</div>
		</div>
		<!--header over-->
		<div class="row back">
			<?php if($user_name!=NULL) { ?>
			<div class="row">
				<div class="col something">
					<h1 class="font-style">Write something here</h1>
				</div>
			</div>

			<!--Comment box-->
			<form action='/social_media/index.php/homepage/status_submit'  method='POST'>
				<div class="row">
					<div class="col something">
						<input type="text" name="status" class="comment-box">
					</div>
				</div>
				<div class="row">
					<div class="col something">
						<input type="submit" value="Submit" class="button-box">
						<hr class="underline">
					</div>
				</div>
			</form>
		<!--comment box ends-->
		<?php } ?>

		<?php if($user_name==NULL){ ?>
				<div class="row blank">
					
				</div>
		<?php } ?>

		<?php foreach ($statuses as $status) { ?>
			<div class="row">
				<div class="col stat">
					<h4 class="status-name"> <?php echo $status['name']?></h4>
					<p class="font-style"> <?php echo $status['status']; ?> </p>
					<p class="time">Time :<?php echo $status['date']?> </p>
				</div>
			</div>
		<?php } ?>

			
		</div>
	</body>
</html>