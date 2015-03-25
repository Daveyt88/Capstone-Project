<?php
//connect to database
mysql_connect('mysql8.000webhost.com', 'a7301978_root', 'Gallaudet.15');
mysql_select_db('a7301978_team1');

//get the email
$email = mysql_real_escape_string($_POST['email']);

//mysql query to select field email if it's equal to the email that we check '
$result = mysql_query('SELECT mentors.emailAddress, mentees.emailAddress FROM mentors , 
mentees WHERE mentors.emailAddress = "'. $email .'" OR mentees.emailAddress = "'. $email .'"');

//if number of rows fields is bigger them 0 that means it's NOT available '
if(mysql_num_rows($result)>0){
	//and we send 0 to the ajax request
	echo 0;
}else{
	//else if it's not bigger then 0, then it's available '
	//and we send 1 to the ajax request
	echo 1;
}

?>