<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="form.css"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <title>Contact Us</title>
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


    <div class="container" style="height: 200px;">
        <form method="post" action="login.php">
            <fieldset id="appointmentform">

                <?php

                if (isset($_POST['email'])) {
                    $email_to = "david.torrance@gallaudet.edu";
                    $email_subject = "Test";

                    function died($error)
                    {
                        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                        echo "These errors appear below.<br /><br />";
                        echo $error . "<br /><br />";
                        echo "Please go back and fix these errors.<br /><br />";
                        die();
                    }

                    if (!isset($_POST['fname']) ||
                        !isset($_POST['lname']) ||
                        !isset($_POST['email']) ||
                        !isset($_POST['phone']) ||
                        !isset($_POST['comments'])
                    ) {
                        died('We are sorry, but there appears to be a problem with the form you submitted.');
                    }

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $comments = $_POST['comments'];
                    $error_message = "";
                    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                    if (!preg_match($email_exp, $email)) {
                        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
                    }

                    $string_exp = "/^[A-Za-z .'-]+$/";
                    if (!preg_match($string_exp, $fname)) {
                        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
                    }

                    if (!preg_match($string_exp, $lname)) {
                        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
                    }

                    if (strlen($comments) < 2) {
                        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
                    }

                    if (strlen($error_message) > 0) {
                        died($error_message);
                    }

                    $email_message = "Form details below.\n\n";

                    function clean_string($string)
                    {
                        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                        return str_replace($bad, "", $string);
                    }

                    $email_message .= "First Name: " . clean_string($fname) . "\n";
                    $email_message .= "Last Name: " . clean_string($lname) . "\n";
                    $email_message .= "Email: " . clean_string($email) . "\n";
                    $email_message .= "Telephone: " . clean_string($phone) . "\n";
                    $email_message .= "Comments: " . clean_string($comments) . "\n";

// create email headers

                    $headers = 'From: ' . $email . "\r\n" .
                        $from = $email . "\r\n" .
                            'IT Capstone-Mailer: PHP/' . phpversion();
                    @mail($email_to, $email_subject, $email_message, $headers);
                    echo "Thank you for contacting us. We will be in touch with you very soon.";
                    echo "<meta http-equiv='refresh' content='5; url=http://capstone1.host22.com/Capstone/index.html'/>";
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