<?php include "session.php"; ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="form.css"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <title>Login</title>
</head>

<body>
<div id="page">
    <form id="search" method="get" action="http://capstoneproject1.netau.net/">
        <table cellpadding="0px" cellspacing="0px">
            <tr>
                <a href='http://capstone1.host22.com/Capstone/login.php'><font color="white">Login/Register</font></a>
            </tr>
        </table>
    </form>
    <div id="header">
        <h1>Team Project #1</h1>
    </div>
    <div class="logo2">
        <img src="images/logo.png" alt="logo" width="110" height="80"></a>
    </div>

    <div id="bar">
        <div class="link"><a href="index.html">Home</a></div>
        <div class="link"><a href="aboutus.html">About Us</a></div>
        <div class="link"><a href="registration.php">Registration</a></div>
        <div class="link"><a href="directory.php">Directory</a></div>
        <div class="link"><a href="faqs.html">FAQs</a></div>
        <div class="link"><a href="contactus.html">Contact Us</a></div>
    </div>

    <div class="container" style="height: 500px;">
        <form method="post" action="login.php">
            <fieldset id="appointmentform">
                <?php if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['username'])) { ?>
                <h1>Member Area</h1>

                <p>Welcome and thanks for logging in! Your username is <code><?= $_SESSION['username'] ?></code>.</p>

                <p>Please <a href=http://capstone1.host22.com/Capstone/directory.php>click here to go to directory
                        page</a>.</p>
                <br><h4 align="center"><a href="http://capstone1.host22.com/Capstone/logout.php">Click here to log
                        out</a></h4></br>
                <br><h4 align='center'><a href='http://capstone1.host22.com/Capstone/change_pw.php'>
                        Click here to change your password</a></h4></br>
	            </fieldset>
				
            <?php
            } elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

                $role = mysql_real_escape_string($_POST['role']);
                $username = mysql_real_escape_string($_POST['username']);
                $password = md5(mysql_real_escape_string($_POST['password']));

                $checklogin = mysql_query("SELECT *  FROM  " . $role . " WHERE Username = '" . $username . "' AND password = '" . $password . "'");

                if (mysql_num_rows($checklogin) == 1) {
                    $row = mysql_fetch_array($checklogin);

                    $_SESSION['username'] = $username;
                    $_SESSION['LoggedIn'] = 1;
                    echo "<fieldset id='appointmentform' style='width: 590px;'>";
                    echo "<h1>Success</h1>";
                    echo "<p>We are now redirecting you to the directory page.</p>";
                    echo "<meta http-equiv='refresh' content='2; url=http://capstone1.host22.com/Capstone/directory.php'/>";
                    echo "</fieldset>";
                } else {
                    echo "<fieldset id='appointmentform' style='width: 590px;'>";
                    echo "<h1>Error</h1>";
                    echo "<p>Sorry, your account could not be found. Please <a href='http://capstone1.host22.com/Capstone/login.php'>click here to try again</a>.</p>";
                    echo "<br><h4 align='center'>Forgot password?<a href='http://capstone1.host22.com/Capstone/forgot_pw.php'/>
					Click here to reset your password</a></h4></br>";
                    echo "</fieldset>";
                }
            } else {
                ?>

                <h1>Member Login</h1>

                <p>Please either login below.</p>

                <form method="post" action="login.php">
                    <fieldset id="appointmentform">
                        <label>Are you staff or student?<br></br>
                            <select name="role">
                                <option value="">Please select</option>
                                <option value="mentors">Mentor</option>
                                <option value="mentees">Mentee</option>
                            </select>
                        </label>
                        <br>
                        <label for="username">Username:<input type="text" name="username" id="username"></label><br/>
                        <label for="password" style="bottom: 20px;">Password:<input type="password" name="password"
                                                                                    id="password"></label><br/>

                        <p align='center' style="margin-top: -30;margin-bottom: 50px;">
                            Forgot password?<a href='http://capstone1.host22.com/Capstone/forgot_pw.php'/>
                            Click here to reset your password</a></p>
                        <p align='center' style="margin-top: -30;margin-bottom: 50px;">
                            Want to join? <a href="http://capstone1.host22.com/Capstone/registration.php">Click
                            here to create an account</a></p>
                        <input type="submit" name="login" id="login" value="Login" style="
							text-align: center;                                                                  
							left: 50px;
							height: 36px;
							width: 76px;">
                    </fieldset>

                </form>

            <?php
            }
            ?>

    </div>
</div>
<div id="footer"><a
        href="https://www.google.com/maps/place/Gallaudet+University/@38.908422,-76.992387,17z/data=!3m1!4b1!4m2!3m1!1s0x89b7b813d927bac3:0x7f033ffc2f87381d">Find
        us</a>,
    Team Project; David Torrance, Luis Figueroa Montanez &#38 Aspen Friend &#169 Copyright 2014
</div>
</body>
</html>	