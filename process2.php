

<?php
		include 'dbconnect.inc';
		
		$id = $_GET['id'];
		if ($_POST['approval']=='Approve')
		{
			$query="UPDATE requests SET status='Queued', comments='$_POST[comments]' WHERE id = '$id'";
			$is_query_successful=mysql_query($query);
			if($is_query_successful)
			{ header("location:viewrequest.php?id=$id");} 
				else
			{ echo "Error updating data. <br/>". mysql_error();}
		}
		
		else
		{
			$query="UPDATE requests SET status='Disapproved', comments='$_POST[comments]' WHERE id = '$id'";
			$is_query_successful=mysql_query($query);
			if($is_query_successful)
			{ header("location:viewrequest.php?id=$id");} 
				else
			{ echo "Error updating data. <br/>". mysql_error();}
		}

		mysql_close();
?>