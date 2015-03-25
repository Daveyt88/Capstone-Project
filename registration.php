<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="form_reg.css"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">

    window.onload = function () {
        document.getElementById("pwd1").onchange = validatePassword;
        document.getElementById("pwd2").onchange = validatePassword;
    }
    function validatePassword() {
        var pass2 = document.getElementById("pwd2").value;
        var pass1 = document.getElementById("pwd1").value;
        if (pass1 != pass2)
            document.getElementById("pwd2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("pwd2").setCustomValidity('');
    }
	
function roleCheck() {
    if (document.getElementById('displayMentor').checked) {
        document.getElementById('Mentor').style.display = 'block';
    }
    else document.getElementById('Mentor').style.display = 'none';

}
  $(document).ready(function() {
		var min_chars = 3;
		var characters_error = 'Minimum amount of characters is 4';
		var checking_html = 'Checking...';
		
		//when button is clicked
		$('#check_username_availability').click(function(){
			//run the character number check
			if($('#username').val().length < min_chars){
				//if it's bellow the minimum show characters_error text
				$('#username_availability_result').html(characters_error);
			}else{			
				//else show the cheking_text and run the function to check
				$('#username_availability_result').html(checking_html);
				check_availability();
			}
		});		
  });

//function to check username availability	
function check_availability(){		

		var username = $('#username').val();		
		$.post("check_username.php", { username: username },
			function(result){
				if(result == 1){
					$('#username_availability_result').html('<span class="is_available"><b>' + username + '</b> is Available</span>');
				}else{
					$('#username_availability_result').html('<span class="is_not_available"><b>' + username + '</b> is not Available</span>');
				}
		});
}

</script>
<style type='text/css'>
.is_available{
	color:green;
}
.is_not_available{
	color:red;
}
</style>
    <title>Registration</title>
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

<div class="header">
    <h1>Registration</h1>
</div>
</label>
<form method="post" action="" id="register">
    <fieldset id="contactinfo">
        <legend><span>Become a member</span></legend>
        <fieldset id="registerinfo">
            <legend>Membership Information</legend>
                <span class="req">*</span>Are you student or professor?<br>
				<label>
				Mentee <input type="radio" name="role" value= "Mentee" onclick="javascript:roleCheck();" id="displayMentee" checked style="
				left: 0px;
				width: 100px;
				margin-bottom: 0px;"/>				
            </label>
			<label>
				Mentor <input type="radio" name="role" value= "Mentor" onclick="javascript:roleCheck();" id="displayMentor" style=" 
				left: 0px;
				width: 100px;
				margin-bottom: 0px;"/> 
				</label>
			<div id="Mentor" style="display:none">
            <label>
                If you are professor, please select your skill area.<br><br>
                <select name="skill" style="margin-left: -100;">
                    <option value="">Please select</option>
                    <option value="Computer security">Computer security</option>
                    <option value="Web design">Web design</option>
                    <option value="Web programming">Web programming</option>
                    <option value="Network">Network</option>
                    <option value="Discrete mathematics">Discrete mathematics</option>
                    <option value="Database">Database</option>
                </select>
            </label>
			</div>
        </fieldset>
        <fieldset>
            <legend>Member Information</legend>
            <label>
			<span class="req">*</span>ID University
                <input type="text" name="id" pattern="\d*" maxlength="7"
                       title="Please fill out your University ID with only numbers" placeholder="01234567" required/>
            </label>
            <label>
                <span class="req">*</span>First name
                <input type="text" name="fname" pattern="[a-zA-Z]+"
                       title="Please enter only alphabets"
                       placeholder="First name" maxlength="35" required/>
            </label>
            <label>
                <span class="req">*</span>Last name
                <input type="text" name="lname" pattern="[a-zA-Z]+"
                       title="Please enter only alphabets"
                       placeholder="Last name" maxlength="35" required/>
            </label>
            <label>
                <span class="req">*</span>Address line 1
                <input type="text" name="line1" placeholder=""/>
            </label>
            <label>
                Address line 2
                <input type="text" name="line2" placeholder=""/>
            </label>
            <label>
                <span class="req">*</span>City
                <input type="text" name="city" placeholder=""/>
            </label>
            <label>
                <span class="req">*</span>State
                <select name="state" id="inputreg2" required>
                    <option value="">Please select</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </label>
            <label>
                <span class="req">*</span>Zip Code
                <input type="text" name="zip" required placeholder="5 or 9 digits"
                       pattern="^\d{5}(-\d{4})?$" title="Either 5 or 9 digits"/>
            </label>
            <label>
                <span class="req">*</span>Phone
                <input type="tel" name="phone" placeholder="999-999-9999"
                       pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Must be 999-999-999 format"/>
            </label>
        </fieldset>
        <fieldset>
            <legend>Registration Information</legend>
            <label>
                <span class="req">*</span>E-mail
                <input type="email" id="email" name="email" placeholder="address@example.com"/>
				</label>
            <label>
                <span class="req">*</span>Username
                <input type="text" id='username' name="username"/><input type='button' id='check_username_availability' value='Check Availability'
				style="margin-left: 210px;width: 116px;">
				<div id='username_availability_result' style="padding-top: 10px;padding-left: 110px;"></div>
            </label>
            <label>
                <span class="req">*</span>Password
                <input name="pw" id="pwd1" type="password"/>
            </label>
            <label>
                <span class="req">*</span>Confirm<br>password
                <input id="pwd2" type="password"/>
            </label>
        </fieldset>
        <p id="instructions"><span class="req">*</span>Required</p>
    </fieldset>
	            <div class="g-recaptcha" data-sitekey="6LckuAITAAAAALcLIyZVRXbrAmVjIZldopAZyynh"></div>
    <fieldset id="buttons">
        <legend style="margin-left: 80px;">Submit Your Membership</legend>
        <input type='submit' name='submit' value="Join Now"/>
        <input type="reset" id="reset" value="Reset Fields"/><br>
    </fieldset>
</form>
<?php
//Disable notices and warnings
error_reporting(0);

    $database = mysql_connect("mysql8.000webhost.com", "a7301978_root", "Gallaudet.15");
    mysql_select_db("a7301978_team1", $database);

if (isset($_POST['submit'])) {
	
			if(isset($_POST['g-recaptcha-response'])){
				$captcha=$_POST['g-recaptcha-response'];
				}
			
			if(!$captcha){
			  echo "<script>alert('The captcha you have entered is incorrect, try again.'); javascript:history.back()</script>";
			  exit;
			}
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=+++6LckuAITAAAAAGAK3FY7yuMgfqsRhRhaJokQyGwW+++&response=" . 
		$captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

	
    $id = $_POST["id"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $role = $_POST["role"];
    $skill = $_POST["skill"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $pw = md5($_POST["pw"]);
    $line1 = $_POST["line1"];
    $line2 = $_POST["line2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipCode = $_POST["zip"];	
	
	$checkid = 'SELECT mentors.UniversityID, mentees.UniversityID FROM mentors , 
	mentees WHERE mentors.UniversityID = "'. $id .'" OR mentees.UniversityID = "'. $id .'"';
	
	$checkusername = 'SELECT mentors.Username, mentees.Username FROM mentors , 
	mentees WHERE mentors.Username = "'. $username .'" OR mentees.Username = "'. $username .'"';
	
	$checkemail = 'SELECT mentors.emailAddress, mentees.emailAddress FROM mentors , 
	mentees WHERE mentors.emailAddress = "'. $email .'" OR mentees.emailAddress = "'. $email .'"';
	
	$check = mysql_query($checkid); 
	$check2 = mysql_query($checkusername); 
	$check3 = mysql_query($checkemail); 
	$number_of_rows = mysql_num_rows($check);
	$number_of_rows2 = mysql_num_rows($check2);
	$number_of_rows3 = mysql_num_rows($check3);
	
	if ($number_of_rows > 0) {
	 echo "<script>alert('Sorry, that ID university is already taken. Please go back and try again.'); javascript:history.back()</script>";
	} elseif ($number_of_rows2 > 0) {
		echo "<script>alert('Sorry, that username is already taken. Please go back and try again.'); javascript:history.back()</script>";
	} elseif ($number_of_rows3 > 0) {
		echo "<script>alert('Sorry, that email is already taken. Please go back and try again.'); javascript:history.back()</script>";
	} else {
	
    if ($_POST["role"] == 'Mentee') {

        $query = "INSERT INTO mentees" .
            "(UniversityID, firstName, lastName, role, Phone, emailAddress, Username, password)" .
            "VALUES ('$id', '$firstName', '$lastName', '$role', '$phone', '$email', '$username', '$pw')";
    }

    if ($_POST["role"] == 'Mentor') {

        $query = "INSERT INTO mentors" .
            "(UniversityID, firstName, lastName, role, Phone, emailAddress, Username, password, skills)" .
            "VALUES ('$id', '$firstName', '$lastName', '$role', '$phone', '$email', '$username', '$pw', '$skill')";
    }

    $query1 = "INSERT INTO addresses" .
        "(UniversityID, line1, line2, city, state, zipCode)" .
        "VALUES ('$id', '$line1', '$line2', '$city', '$state', '$zipCode')";

        if ($query1) {
            header("Location: http://capstone1.host22.com/Capstone/submit.html");
        }
    }

    $result1 = mysql_query($query, $database);
    $result2 = mysql_query($query1, $database);
    $result3 = mysql_query($checkemail, $database);
    mysql_close($database);
}
?>
</form>
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
			