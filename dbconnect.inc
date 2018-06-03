<?php
	$connect=mysqli_init(); //mysqli_ssl_set($connect, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($connect, "ictc-softwaresupport.mysql.database.azure.com", "rkmarinay@ictc-softwaresupport", "P@ssw0rd", "softwaresupport", "3306");

	mysqli_select_db($connect,"softwaresupport");
	if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>