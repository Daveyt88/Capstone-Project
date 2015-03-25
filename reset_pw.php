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
            <h1>Reset Password</h1><br></br>
            <?php
            if (isset($_GET['code'])) {
                $acode = $_GET['code'];
            }
            if (isset($_POST['password'])) {
                $password = md5($_POST['password']);
                $confirmnewpassword = md5($_POST['confirm_pw']);


                $connect = mysqli_connect("mysql8.000webhost.com", "a7301978_root", "Gallaudet.15", "a7301978_team1");

                if (mysqli_connect_error()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $query = mysqli_query($connect, "select * from mentors where activation_code='$acode'")
                or die(mysqli_error($connect));
				
				$query2 = mysqli_query($connect, "select * from mentees where activation_code='$acode'")
                or die(mysqli_error($connect));

                if (mysqli_num_rows($query) == 1 || mysqli_num_rows($query2) == 1) {
                    if ($password == $confirmnewpassword) {
                        $query3 = mysqli_query($connect, "update mentors set password='$password' where activation_code='$acode'")
                        or die(mysqli_error($connect));
						$query4 = mysqli_query($connect, "update mentees set password='$password' where activation_code='$acode'")
						or die(mysqli_error($connect));


                        if ($query3) {
                            echo "<p>Your password has been reset successfully!</p>";
                            echo "<br><p><a href='login.php'>Check here</a> to log in.</p></br>";
                        }
						elseif ($query4) {
                            echo "<p>Your password has been reset successfully!</p>";
                            echo "<br><p><a href='login.php'>Check here</a> to log in.</p></br>";
						}
                    } else {
                        echo "<p>Your new password must match with the confirm password field</p>";
                    }
                } else {
                    echo '<p>Invalid activation code</p>';
                }
            } else {
            ?>

            <form action="reset_pw.php?code=<?php echo $_GET['code']; ?>" method="post">
                <fieldset id="appointmentform">
                    <!--
                        <label>Are you staff or student?<br></br>
                            <select name="role">
                                <option value="">Please select</option>
                                <option value="mentors">Mentor</option>
                                <option value="mentees">Mentee</option>
                            </select>
                        </label>
                        -->
                    <br>
                    <label>New password:<input type="password" name="password" required style="margin-left: 10px;" ></label><br/>
                    <br>
                    <label style="margin-top: -20;">Confirm password:<input type="password" name="confirm_pw" required
                                                                            style="margin-left: 10px;"></label><br/>
                    <input type="submit" name="submit" value="Reset" style="
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
    Team Project; David Torrance, Luis Figueroa Montanez &#38 Aspen Friend &#169 Copyright 2014
</div>
</body>
</html>	
