<?php

	include 'dbconnect.inc';
	$id = $_GET['id'];
	
	$query="DELETE FROM requests WHERE id='$id'";
	$is_query_successful=mysql_query($query);
	if($is_query_successful)
		{ header("location:administrator.php");}
	else
		{ echo "Error deleting data. <br/>".mysql_error(); }
		mysql_close();
?>