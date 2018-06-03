<?php
//$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, null, NULL, NULL);
// mysqli_real_connect($con, "ictc-softwaresupport.mysql.database.azure.com", "rkmarinay@ictc-softwaresupport", "P@ssw0rd", "softwaresupport","3306");

	$hostname='ictc-softwaresupport.mysql.database.azure.com';
	$username='rkmarinay@ictc-softwaresupport';
	$password='P@ssw0rd';
	$conn=mysql_connect($hostname, $username, $password) 
		or die ('Error connnecting to mysql');mysql_select_db('oprosys');

 ?>

