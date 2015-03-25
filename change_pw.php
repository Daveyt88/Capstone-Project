<?php include "session.php"; ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="form.css"/>
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
        <div class="link"><a href="login.php">Directory</a></div>
        <div class="link"><a href="faqs.html">FAQs</a></div>
        <div class="link"><a href="contactus.html">Contact Us</a></div>
    </div>


    <div class="container" style="height: 500px;width: 618px;padding-top: 10px;">
        <fieldset id="appointmentform">
            <h1>Change Password</h1><br></br>
            <?php
            //Disable notices and warnings
            error_reporting(0);
            if (isset($_POST['submit'])) {
                if (!empty($_SESSION['username'])) {

                    $user = $_SESSION ['username'];
                    $currentpassword = md5($_POST['oldpassword']);
                    $newpassword = md5($_POST['newpassword']);
                    $confirmnewpassword = md5($_POST['confirmnewpassword']);
                    $role = $_POST ['role'];
                    $result = mysql_query("SELECT count(*) FROM $role WHERE Username='$user'");
					$result2 = mysql_query("SELECT password FROM $role WHERE Username='$user'");

					while($row = mysql_fetch_array($result2))
					{
					  $password = $row['password'];
					}
					
                    if (mysql_result($result, 0) == 1) {
						if($password == $currentpassword) {
							if ($newpassword == $confirmnewpassword) {
								$sql = mysql_query("UPDATE $role SET password='$newpassword' WHERE Username='$user' AND password='$password'");
								if ($sql) {
									echo "<p>You have successfully changed your password!</p>";
								}
							} else {
								echo "<p>Your new password must match with the confirm password field</p>";
                        }
					}	else {
							echo "<p>Your current password is invalid</p>";
						}
                    } else {
                        echo "<p>You have entered a wrong username or password</p>";
                    }
                } else {
                    echo "<p>Please enter login first</p>";
                }
            }
            ?>

            <form action="change_pw.php" method="post">
                <fieldset id="appointmentform">
                    <label>Are you staff or student?<br></br>
                        <select name="role">
                            <option value="">Please select</option>
                            <option value="mentors">Mentor</option>
                            <option value="mentees">Mentee</option>
                        </select>
                    </label>
                    <br>
                    <label>Current password:<input type="text" name="oldpassword"
                                                   style="margin-left: 10px;"></label><br/>
                    <label style="bottom: 20px;">New password:<input type="password" name="newpassword"
                                                                     style="margin-left: 10px;"></label><br/>
                    <label style="bottom: 40px;">Confirm password:<input type="password" name="confirmnewpassword"
                                                                         style="margin-left: 10px;">
                    </label><br/>
                    <input type="submit" name="submit" value="Change password" style="
							text-align: center;                                                                  
							left: 50px;
							height: 36px;
							width: 130px;">
            </form>

    </div>
</div>
<div id="footer"><a
        href="https://www.google.com/maps/place/Gallaudet+University/@38.908422,-76.992387,17z/data=!3m1!4b1!4m2!3m1!1s0x89b7b813d927bac3:0x7f033ffc2f87381d">Find
        us</a>,
    Team Project; David Torrance, Luis Figueroa Montanez &#38 Aspen Friend &#169 Copyright 2014
</div>
</body>
</html>	
