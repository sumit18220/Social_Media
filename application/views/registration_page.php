<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="/static/css/registration.css">
    </head>
    <body style="margin: 0px;">
        <!--header-->
        <div class="row row1">
            <div class="row1-col1">
                <div class="row1-col1-col1">
                    <div class="row logo">
                        <img src="/static/img/ungineering_logo.svg" style="width: 54px;height: 70px;">
                    </div>
                </div>
                <div class="row1-col1-col2">
                    <div class="row heading">
                        <h2 id="ungineering"><span id="red">un</span>gineering</h2>
                        <hr id="hr">
                    </div>
                    <div class="row slogan">
                        <p id="slogan">A <span id="red">bit</span> of knowledge is good.<br>A <span id="red">byte</span> is better</p>
                    </div>
                </div>
            </div>
            <div class="row1-col2">
                
            </div>
        </div>
        <!--header over--->
        <div class="row row2">
            <!--left--->
            <div class="row2-col1">
                <div class="row row2-col1-row1">
                    <div class="newuser">
                        <h1 id="heading">New User<br>Create<br>Account</h1>
                    </div>                  
                </div>
                <div class="row row2-col1-row2">
                    <div class="link">
                        <a href="/login" id="red">Existing User Log-in</a>
                    </div>
                </div>
            </div>
            <!--left over-->

            <!--form-->
            <div class="row2-col2">
                <form action="/registration/register_submit" method="POST">
                    <div class="row2-col2-row1">
                        <div class="form-heading">
                            <h1 id="header">Create Account</h1>
                        </div>                      
                    </div>
                    <div class="row row2-col2-row2">
                        <div class="row2-col2-row2-col1">
                            <div class="name">
                                <p>Name</p>
                            </div>
                        </div>
                        <div class="row2-col2-row2-col2">
                            <div class="input">
                                <input type="text" name="username" class="box" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row2-col2-row2">
                        <div class="row2-col2-row2-col1">
                            <div class="name">
                                <p>Email</p>
                            </div>
                        </div>
                        <div class="row2-col2-row2-col2">
                            <div class="input">
                                <input type="email" name="email" class="box" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row2-col2-row2">
                        <div class="row2-col2-row2-col1">
                            <div class="name">
                                <p>Password</p>
                            </div>
                        </div>
                        <div class="row2-col2-row2-col2">
                            <div class="input">
                                <input type="password" name="password"  class="box" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row2-col2-row2">
                        <div class="button">
                            <input type="submit" value="Create Account"  class="box button">
                        </div>
                    </div>
                    <div class="row row2-col2-row2">
                        <div class="link form">
                            <a href="/login" id="red">Existing User Log-in</a>
                        </div>
                    </div>
                </form>
            </div>
            <!--form end-->

        </div>
    </body>
</html>