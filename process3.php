

<?php
		include 'dbconnect.inc';
		
		$id = $_GET['id'];
		if ($_POST['approval']=='Approve')
		{
			$query="UPDATE requests SET ictcstatus='Queued', comments2='$_POST[comments2]' WHERE id = '$id'";
			$is_query_successful=mysql_query($query);
			if($is_query_successful)
			{ header("location:ictcviewrequest.php?id=$id");} 
				else
			{ echo "Error updating data. <br/>". mysql_error();}
		}
		
		else
		{
			$query="UPDATE requests SET status='Disapproved', ictcstatus='Disapproved', ssstatus='Disapproved', comments2='$_POST[comments2]' WHERE id = '$id'";
			$is_query_successful=mysql_query($query);
			if($is_query_successful)
			{ header("location:ictcviewrequest.php?id=$id");} 
				else
			{ echo "Error updating data. <br/>". mysql_error();}
		}

		mysql_close();
?>