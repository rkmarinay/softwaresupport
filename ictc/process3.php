

<?php
		include 'dbconnect.inc';
		
		$id = $_GET['id'];
		
		$query="UPDATE requests SET ictcstatus='Disapproved' WHERE id = '$id'";
		$is_query_successful=mysql_query($query);
		if($is_query_successful)
		{ header("location:/softwaresupport/ictcviewrequest.php?id=$id");} 
			else
		{ echo "Error updating data. <br/>". mysql_error();}
		mysql_close();
?>