 <?php

	$conn = mysql_connect('localhost','root','') or die('Database Not Connected');
	$db = mysql_select_db('blogs',$conn) or die('Database Not Connected');

?>