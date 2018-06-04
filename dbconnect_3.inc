<?php
$hostname='localhost';
$username='root';
$password='';
$conn=mysql_connect($hostname, $username, $password) or 
die ('Error connnecting to mysql');
mysql_select_db('softwaresupport');
 ?>