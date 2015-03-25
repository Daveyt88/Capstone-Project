<?php
//connect to database
mysql_connect('mysql8.000webhost.com', 'a7301978_root', 'Gallaudet.15');
mysql_select_db('a7301978_team1');

//get the username
$username = mysql_real_escape_string($_POST['username']);

//mysql query to select field username if it's equal to the username that we check '
$result = mysql_query('SELECT mentors.Username, mentees.Username FROM mentors , 
mentees WHERE mentors.Username = "'. $username .'" OR mentees.Username = "'. $username .'"');

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