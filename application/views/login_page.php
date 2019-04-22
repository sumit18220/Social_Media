<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="/social_media/static/css/login.css">
    </head>
    <body class="container">
        <!--heading--->
        <div class="row">
            <div class="col heading-left">
                <div class="col logo">
                    <img src="/social_media/static/img/ungineering_logo.svg"  id="img">
                </div>
                <div class="col heading">
                    <div class="row ungineering">
                        <h2 id="ungineering-heading"><span id="red">un</span>gineering</h2>
                        <hr id="hr">
                    </div>
                    <div class="row slogan">
                        <p id="slogan-paragraph">A <span id="red">bit</span> of Knowledge is good. <br> A <span id="red">byte</span> is better</p>
                    </div>
                </div>              
            </div>
            <div class="col heading-blank">
                
            </div>
        </div>
        <!--heading over-->

        <div class="row">
            <div class="col heading-left-bottom">
                <div class="row">
                    <h1 id="user">Existing User <br>Log-in</h1>
                </div>
                <div class="row">
                    <a href="/social_media/index.php/registration" id="link">New User Create Account</a>
                </div>
            </div>

            <!--form-->
            <div class="col form">
                <div class="row">
                    <h1 id="form-heading">Log-in</h1>
                </div>
                <form action="/social_media/index.php/login/login_submit" method="POST">
                    <div class="row row-form">
                        <div class="col col-name">
                            <p id="email"> Email</p>
                        </div>
                        <div class="col col-box">
                            <input type="email" name="email" class="box" required>
                        </div>
                    </div>
                    <div class="row row-form">
                        <div class="col col-name">
                            <p id="email">Password</p>
                        </div>
                        <div class="col col-box">
                            <input type="password" name="password"  class="box" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-box" id="box-button">
                            <input type="submit" value="Log-in"  class="box button">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-box" id="anchor">
                            <a href="/social_media/index.php/registration" id="link2">New User Create Account</a>
                        </div>
                    </div>
                </form>
            </div>
            <!--form over-->
        </div>
    </body>
</html>