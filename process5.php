

<?php
		include 'dbconnect.inc';
		
		$id = $_GET['id'];
		
		$query="UPDATE requests SET ssstatus='Queued' WHERE id = '$id'";
		$is_query_successful=mysql_query($query);
		if($is_query_successful)
		{ header("location:ssviewrequest.php?id=$id");} 
			else
		{ echo "Error updating data. <br/>". mysql_error();}
		mysql_close();
?>