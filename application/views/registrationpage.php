<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="/social_media/static/css/registration.css">
	</head>
	<body style="margin: 0px;">
		<div class="container">
			<div class="row1">
				<div class="col1">
					<div class="col1_row">
					</div>
					<div class="col1_row_logo">
						<div class="col1_row_logo_col1">
						</div>
						<div class="col1_row_logo_col2">
							<img src="/social_media/static/img/ungineering_logo.svg" alt="ungineering_logo">
						</div>
						<div class="col1_row_logo_col3">
							<div class="logo_row1">
								<h1 style="margin: 0px;"><strong style="color: red;">Un</strong><strong>gineering</strong></h1>
								<hr class="hr">
							</div>
							<div class="logo_row2">
								<p id="slogan">A <span style="color: red;">bit </span>of knowledge is good</p>
							</div>
							<div class="logo_row2">
								<p id="slogan">A <span style="color:red;">byte </span>is better</p>
							</div>
							<div class="logo_row2"></div>
						</div>
					</div>
					<div class="col1_row">
					</div>
				</div>
				<div class="col2">
				</div>
			</div>
			<div class="row2">
				<div class="row2_col1">
					<div class="row2_col1_row1">
						<div class="row2_col1_row1_col1">
						</div>
						<div class="row2_col1_row1_col2">
							<h1><strong style="color:grey;">NEW USER<br>CREATE<br>ACCOUNT</strong></h1>
						</div>
					</div>
					<div class="row2_col1_row1">
						<div class="row2_col1_row1_col1">
						</div>
						<div class="row2_col1_row1_col2">
							<a href="#"  style="color: red;">Existing User Log-in</a>
						</div>
					</div>
				</div>
				<div class="row2_col2">
					<div class="row2_col2_row1">
						<div class="row2_col2_row1_col1">
						</div>
						<div class="row2_col2_row1_col2">
							<h1>Create Account</h1>
						</div>
					</div>
					<form action="/social_media/index.php/home/register_submit" method="POST" id="form">
						<div class="row2_col2_row2">
							<div class="row2_col2_row1_col1">
							</div>
							<div class="row2_col2_row1_col1">
								<p>Name</p>
							</div>
							<div class="row2_col2_row2_col3">
								<input type="text" name="username" id="form_input">
							</div>
						</div>
						<div class="row2_col2_row2">
							<div class="row2_col2_row1_col1">
							</div>
							<div class="row2_col2_row1_col1">
								<p>Email</p>
							</div>
							<div class="row2_col2_row2_col3">
								<input type="email" name="email" id="form_input">
							</div>
						</div>

						<div class="row2_col2_row2">
							<div class="row2_col2_row1_col1">
							</div>
							<div class="row2_col2_row1_col1">
								<p>Password</p>
							</div>
							<div class="row2_col2_row2_col3">
								<input type="password" name="password" id="form_input">
							</div>
						</div>

						<div class="row2_col2_row3">
							<button type="submit" onclick="submit" id="submit_button">Create Account</button>
						</div>
						<div class="row2_col2_row3">
							<a href="#" style="color: red;">Existing User Log-in</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>