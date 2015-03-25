<?php include "session.php"; ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="form_reg.css"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <title>Directory</title>
    <STYLE type="text/css">
        .p1 {
            padding-left: 100px
        }
    </STYLE>
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


    <div class="container">
        <form method="post" action="">
            <fieldset id="contactinfo">
                <?php if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['username'])) { ?>

                <legend><span>Search Users (Mentees and Mentors)</span></legend>
                <label>
                    <span class="dir">*</span>First name:
                    <input type="text" name="fname" placeholder="First name"
                           style="left: 135px;"/>
                </label>
                <label>
                    <span class="dir">*</span>Last name:
                    <input type="text" name="lname" placeholder="Last name"
                           style="left: 135px;"/>
                </label>
                <label>People:
                    <select name="role" style="left: 130px;width: 172px;">
                        <option value="">Please select</option>
                        <option value="mentors">Staff</option>
                        <option value="mentees">Student</option>
                    </select>
                </label>

                <div class=p1>
                    <p>OR</p>
                </div>
                <label>
                    Professor's skill areas:
                    <select name="skills" style="left: 130px;width: 172px;">
                        <option value="">Please select</option>
                        <option value="Network">Network</option>
                        <option value="Database">Database</option>
                        <option value="Web design">Web design</option>
                        <option value="Web programming">Web programming</option>
                        <option value="Discrete mathematics">Discrete mathematics</option>
                        <option value="Computer security">Computer security</option>
                    </select>
                </label>

                <div class=p1>
                    <p>OR</p>
                </div>
                <br>

                <p>Click here to see all <a href="http://capstone1.host22.com/Capstone/mentees.php">mentees
                    </a>or <a href="http://capstone1.host22.com/Capstone/mentors.php">mentors</a></p>
                <label>
                    <p id="instructions"><span class="dir">*</span>Required</p>
                </label>
                </br>
                <input type='submit' name='submit'/>
            </fieldset>
            <br>
            <fieldset id="contactinfo">
                <legend><span>Result</span></legend>
                <?php
                //Disable notices and warnings
                error_reporting(0);

                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $skills = $_POST['skills'];


                    if (!empty($_POST['skills'])) {
                        $query = "SELECT UniversityID, firstName, lastName, emailAddress, phone, skills, role FROM mentors WHERE skills = '$skills'";
                    }

                    if (!empty($_POST['fname']) && !empty($_POST['role'])) {
                        $query = "SELECT UniversityID, firstName, lastName, emailAddress, phone, skills, role FROM $role WHERE firstName = '$fname'";
                    }

                    if (!empty($_POST['lname']) && !empty($_POST['role'])) {
                        $query = "SELECT UniversityID, firstName, lastName, emailAddress, phone, skills, role FROM $role WHERE lastName = '$lname'";
                    }

                    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['role'])) {
                        $query = "SELECT UniversityID, firstName, lastName, emailAddress, phone, skills, role FROM $role WHERE firstName='$fname' AND lastName = '$lname'";
                    }


                    if (!($database = mysql_connect("mysql8.000webhost.com", "a7301978_root", "Gallaudet.15")))
                        die("Could not connect to database </body></html>");

                    if (!mysql_select_db("a7301978_team1", $database))
                        die("Could not open database </body></html>");

                    if (!($result = mysql_query($query, $database))) {
                        print("<p>Please try again.</p>");
                        die(mysql_error() . "</body></html>");
                    }
                    mysql_close($database);
                }
                ?>


                <div style="border:1px solid black;width:550px;overflow-x:scroll;">
                    <table BORDER="2" CELLPADDING="6" CELLSPACING="2">
                        <thead>
                        <tr>
                            <th>ID University</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th style="padding-right: 60px;">Phone</th>
                            <th>Skills</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <?php

                        $i = 1;
                        while ($row = mysql_fetch_row($result)) {
                            print("<tr>");

                            foreach ($row as $value) {
                                print("<td>$value</td>");
                                $i++;
                            }
                            print("</tr>");
                        }
                        ?>
                    </table>
                </div>
            </fieldset>
        </form>

        <?php
        } else {
            ?>

            <meta http-equiv="refresh" content="0; url=http://capstone1.host22.com/Capstone/login.php"/>

        <?php
        }
        ?>
    </div>
    <div class="contentBorder">
        _________________________________________________________________________________________________
        <ul id="socialbar">
            <li id="facebook"><a target="_blank" href="http://www.facebook.com/username"><IMG
                        src="http://www.topproducerwebsite.com/images/site_defaults/generic/facebook.png"></a></li>
            <li id="twitter"><a target="_blank" href="http://twitter.com/username"><IMG
                        src="http://www.topproducerwebsite.com/images/site_defaults/generic/twitter.png"></a></li>
            <li id="Googleplus"><a target="_blank" href="https://plus.google.com/u/0/profilepageaddress"><IMG
                        src="http://www.topproducerwebsite.com/images/site_defaults/generic/Googleplus.png"></a></li>
            <li id="Reddit"><a target="_blank" href="http://reddit.com/user/username"><IMG
                        src="http://www.topproducerwebsite.com/images/site_defaults/generic/Reddit.png"></a></li>
            <li id="youtube"><a target="_blank" href="http://youtube.com/username"><IMG
                        src="http://www.topproducerwebsite.com/images/site_defaults/generic/youtube.png"></a></li>
        </ul>
        <style>#socialbar img {
                border: 0px;
            }

            #socialbar li img {
                width: 24px;
                height: 24px;
            }

            #socialbar li a:hover {
                position: relative;
                top: 2px;
            }

            #socialbar {
                padding: 0px;
                list-style: none outside none;
                margin: 0px;
                position: static;
            }

            #socialbar li {
                display: inline;
                padding-right: 2px;
            }

            #socialbar {
                width: 180px;
                text-align: center;
            }</style>
    </div>
</div>
<div id="footer"><a
        href="https://www.google.com/maps/place/Gallaudet+University/@38.908422,-76.992387,17z/data=!3m1!4b1!4m2!3m1!1s0x89b7b813d927bac3:0x7f033ffc2f87381d">Find
        us</a>,
    Team Project; David Torrance, Luis Figueroa Montanez &#38 Aspen Friend &#169 Copyright 2014
</div>
</body>
</html>