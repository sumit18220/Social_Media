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
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/social_media/static/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="/social_media/static/css/homepage.css">
</head>
    <body class="container">
        <div class="row">
            <div class="col left-header">
                <div class="col logo1">
                    <a href="/social_media/index.php/homepage"><img class="img" src="/social_media/static/img/ungineering_logo.svg"> </a>
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
                    <div class="col my_dash">
                        <p>My Dashboard</p>
                    </div>

                <div class="col logout">
                        <a href="/social_media/index.php/login/logout" class="dash log" >Logout</a>
                </div>
            </div>
        </div>
        <!--header end-->

        <div class="row">
            <div class="col detail">
                <div class="row">
                    <div class="col right-col">
                        <h1 class="account">My Account Details</h1>
                    </div>
                </div>
                <form action="/social_media/index.php/dashboard/dashboard_submit" method="POST">
                    <div class="row">
                        <div class="col left-col">
                            <p class="para">Name</p>
                        </div>
                        <div class="col right-col">
                            <input type="text" name="name" class="text-box" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col left-col">
                            <p class="para">Email</p>
                        </div>
                        <div class="col right-col">
                            <input type="email" name="email" class="text-box" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col left-col">
                            <p class="para">Password</p>
                        </div>
                        <div class="col right-col">
                            <input type="password" name="password" class="text-box" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col left-col">
                            <p class="para">College</p>
                        </div>
                        <div class="col right-col">
                            <input type="text" name="college_name" class="text-box">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col left-col">
                            <p class="para">Phone Number</p>
                        </div>
                        <div class="col right-col">
                            <input type="text" name="phone_number" class="text-box">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Update" class="update">
                    </div>
                </form>
            </div>
            <div class="col posts">
                <div class="row">
                    <h1 class="my-post">My Posts</h1>
                </div>
                <?php foreach ($statuses as $status) { ?>
                    <div class="row status">
                        <p class="time">Time : <?php echo $status['date']?> </p>
                        <p class="font-style"> <?php echo $status['status']; ?> </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>