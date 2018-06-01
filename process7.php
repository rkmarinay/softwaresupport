

<?php
		include 'dbconnect.inc';
		
		$id = $_GET['id'];
		$name = $_GET['name'];
		$uname = $_GET['uname'];
		
		$query="UPDATE requests SET status='Completed', ictcstatus='Completed', ssstatus='Completed' WHERE id = '$id'";
		$is_query_successful=mysql_query($query);
		if($is_query_successful)
		{ header("location:requestor.php?&&name=$name&&uname=$uname");} 
			else
		{ echo "Error updating data. <br/>". mysql_error();}
		mysql_close();
?>