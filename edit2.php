

<?php
		include 'dbconnect.inc';
		
		$id = $_GET['id'];
		$query="UPDATE requests SET name='$_POST[name]', contactno='$_POST[contactno]', department='$_POST[department]', request='$_POST[request]', remarks='$_POST[remarks]', status='Pending' WHERE id = '$id'";
		$is_query_successful=mysql_query($query);
		if($is_query_successful)
		{ header("location:editing.php?id=$id");} 
			else
		{ echo "Error updating data. <br/>". mysql_error();}
		mysql_close();
?>