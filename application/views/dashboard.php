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
<html>
    <head>
        <link rel="stylesheet" href="/social_media/static/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="/social_media/static/css/dashboard_css.css" type="text/css">
        <title>Dashboard</title>
    </head>
    
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <img class="logo" src="/social_media/static/img/ungineering_logo.svg">
                    </div>
                    <div class="col-lg-10">
                        <h1 class="display-3">Update Your Account Here</h1>
                    </div>
                    <div class="col-lg-1">
                        <a href=" /social_media/index.php/home/homepage"><button class="btn btn-success ">Home</button></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg">
            <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form id="log" action="/social_media/index.php/home/dashboard_submit" method="POST">
                        <h1>Update User's Information</h1>
                        <img class="img img-thumbnail" src="/social_media/static/img/img_avatar.png"/>
                        <div>
                            <label>College Name:</label>
                            <input class="form-control" type="text" name="college" placeholder="college name" required=""/><br/>
                        </div>
                        <div>
                            <label>Mobile Number:</label>
                            <input class="form-control" type="text" name="mobile_no" placeholder="123456789" required=""/><br/>
                        </div>
                        <div>
                            <button class="btn btn-success form-control" type="submit">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
            </div>
        </div>
    </body>
</html>