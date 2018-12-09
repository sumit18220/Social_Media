<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="/Social_Media/static/css/bootstrap.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-offset-2">
        				<img src="/Social_Media/static/img/ungineering_logo.svg">
        			</div>
        			<div class="col-sm-10">
    					<h1 class="display-3">Ungineering Social Account</h1>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-sm">
        			<h3 style="text-align: center;">Log In to Ungineering Social Account</h3>
        		</div>
        	</div>
    		<div class="container">
    			<form action="/Social_Media/index.php/home/login_submit" method="POST">
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" name="email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control"  name="password">
					  </div>
					  <div class="form-group form-check">
					    <label class="form-check-label">
					      <input class="form-check-input" type="checkbox"> Remember me
					    </label>
					  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
    		</div>
    		<div>
    			<p style="text-align: right;">New User..?<a href="/Social_Media/index.php/home/registration">Resgiter</a>Here</p>
    		</div>
        </div>
    </body>
</html>

