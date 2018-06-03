<?php
	$hostname='ictc-softwaresupport.mysql.database.azure.com';
	$username='rkmarinay@ictc-softwaresupport';
	$password='P@ssw0rd';
	$conn=mysql_connect($hostname, $username, $password)
		or die ('Error connecting to mysql'); mysql_select_db('softwaresupport');
?>