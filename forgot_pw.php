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
            <h1>Reset Password</h1><br></br>
            <?php
            error_reporting(0);
            if ($_POST['submit'] == 'Send') {
                $role = $_POST['role'];
                $email = $_POST['email'];
                $code = $_GET['activation_code'];
                $connect = mysqli_connect("mysql8.000webhost.com", "a7301978_root", "Gallaudet.15", "a7301978_team1");
                $query = mysqli_query($connect, "select * from $role where emailAddress = '$email'");
				
                if (mysqli_num_rows($query) == 1) {
                    $code = uniqid(rand(100000, 999999));
                    $message = "Hello, you recently requested a password reset.
					\r\n Your activation link is: http://capstone1.host22.com/Capstone/reset_pw.php?email=$email&code=$code";
                    @mail($email, "Reset Password", $message);
                    $query2 = mysqli_query($connect, "update $role set activation_code='$code' where emailAddress='$email' ")
                    or die(mysqli_error($connect));
                    if ($query2) {
                        echo "<p>We've sent you an email that will allow you to reset your password quickly and easily.</p>";
                        echo "<br><p><a href='index.html'>Check here</a> to return homepage.</p></br>";						
                    }
                } else {
                    echo '<p>The email you entered does not exist.</p>';
					 ?>
					<form action="forgot_pw.php" method="post">
                <fieldset id="appointmentform">
                    <label>Are you staff or student?<br></br>
                        <select name="role">
                            <option value="">Please select</option>
                            <option value="mentors">Mentor</option>
                            <option value="mentees">Mentee</option>
                        </select>
                    </label>
                    <br>
                    <label>Email Address:<input type="text" name="email" style="margin-left: 10px;"></label><br/>
                    <input type="submit" name="submit" value="Send" style="
							text-align: center;                                                                  
							left: 50px;
							height: 36px;
							width: 130px;">
            </form>
					<?php
                }
            } else {

            ?>

            <form action="forgot_pw.php" method="post">
                <fieldset id="appointmentform">
                    <label>Are you staff or student?<br></br>
                        <select name="role">
                            <option value="">Please select</option>
                            <option value="mentors">Mentor</option>
                            <option value="mentees">Mentee</option>
                        </select>
                    </label>
                    <br>
                    <label>Email Address:<input type="text" name="email" style="margin-left: 10px;"></label><br/>
                    <input type="submit" name="submit" value="Send" style="
							text-align: center;                                                                  
							left: 50px;
							height: 36px;
							width: 130px;">
            </form>
            <?php
            }
            ?>
    </div>
</div>
<div id="footer"><a
        href="https://www.google.com/maps/place/Gallaudet+University/@38.908422,-76.992387,17z/data=!3m1!4b1!4m2!3m1!1s0x89b7b813d927bac3:0x7f033ffc2f87381d">Find
        us</a>,
    Team Project; David Torrance, Luis Montan &#38 Aspen Friend &#169 Copyright 2014
</div>
</body>
</html>	
