
	<?php
		include 'dbconnect.inc';
		
		$username = $_POST['username'];
		$pw = $_POST['password'];
		
		$query="SELECT * FROM users WHERE username = '$username' and password = '$pw'";
		$result=mysql_query($query);
		$row=mysql_fetch_assoc($result);
	
		
		if($row['username'] == $username && $row['password'] == $pw){
			header("location:home.php");
			$uname=$_REQUEST['username'];
			$name=$row['name'];
			session_start();
			$_SESSION['uname']=$uname;
			$_SESSION['name']=$name;
			}
	
		elseif($_POST['username'] == 'immediate_superior' && $_POST['password'] == '1234')
		{
			header("location:superiorhome.php");
		}
		
		elseif($_POST['username'] == 'ICTC' && $_POST['password'] == '1234')
		{
			header("location:ictchome.php");
		}
		
		elseif($_POST['username'] == 'software_support' && $_POST['password'] == '1234')
		{
			header("location:supporthome.php");
		}
		
		elseif($_POST['username'] == 'administrator' && $_POST['password'] == '1234')
		{
			header("location:adminhome.php");
		}
		
		else {
			echo "Incorrect username/password. Please try again.<br>";
			echo "<a href='index.php'> Back to Login Page. </a>";
			print_r($row['username']);
		}
		
?>