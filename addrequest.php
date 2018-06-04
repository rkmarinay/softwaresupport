<!DOCTYPE html>
<html>
<title>Request Sent</title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <?php 
		session_start();
		include 'dbconnect.inc';  
	?>
    <style>
        body{
            background: #white;
            font-family: 'Arial';
            font-size: 20px;

        }
      
        .Header{
	        width: 1349px;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
	        font-size: 200%;
	        position: absolute;
	        left: 530px;
	        top: 108px
        }
        
        .SubTitle{
	        position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 610px;
	        top: 155px
        }

        .LogIn{
			position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 1250px;
	        top: 155px
		}
		
        .logo{
	        position: absolute;
	        left: 608px;
	        top: 10px;
        }
        
        footer{
	        width: 100%;
	        height: 320px;
	        background-color: #21282E; 
	        border-style: solid;
	        border-width: 2px;
	        border-color: #444;
	        color: white;
	        font-family: 'open_sans_condensedlight', sans-serif;
        }
        
        .footer-info{
	        margin-left: 50px;
	        margin-top: 0px;
	        font-size: 80%;
        }
        
		.container {
			width: 50%;
			position: relative;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px 0 30px 0;
		} 
		
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #f3f3f3;
			text-decoration: none;
			height:50px;
			width:1161x;
		}

		li {
			float: left;
		}

		li a{
			text-decoration: none;
			display: block;
			color: black;
			text-align: center;
			font-size:18px;
		}

		li a:hover:not(.active) {
			text-decoration: none;
			color:#27AE60;
		}

		li a.active {
			background-color: #27AE60;
			text-decoration: none;
			color:black;
		}
		
		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
		.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
		.fa-anchor,.fa-coffee {font-size:200px}
		
		.badge{
			background-color:#AF2020;
			color:white;
			margin-left:20px;
		}

		.dropbtn {
			background-color: #4CAF50;
			color: white;
			padding: 13px 60px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}
				
		.dropdown {
		position: relative;
		display: inline-block;
		float:right;
	}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}		
		
		

    </style>
    
<body>
	
	<div class="Header">
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		<center> <div class="Title">ICTC ONLINE </div> </center>
		<center> <div class="SubTitle">De La Salle Lipa </div> </center>
	</div>

		<div class="dropdown">
	 
		<button class="dropbtn">
		
		<?php
		$uname=$_SESSION['uname'];
		echo $_SESSION['name'];
		?>
		</button>
	  <div class="dropdown-content">
			<a href="index.php">Log Out</a>
		</div>
		</div>
		
	<ul>
	  	<ul>
		<?php
	 echo "<li style='padding:5px'><a href='home.php'><img src='home.png' style='width:40px;margin-left:10px;'></a></li>";
	  ?>
	</ul>
	</ul>
	
<center>

<br>
<div class="container">

	<br>
	<strong style="font-size:40px"> Your Request has been sent! Thank you. </strong> <br> <br>
	<img src="sent.png" style="width:10%">
	
	<?php
		include 'dbconnect.inc';
		$query="INSERT INTO requests (date, name, contactno, department, request, remarks, status, ictcstatus, ssstatus, user)
		VALUES ('$_POST[date]','$_POST[name]','$_POST[contactno]','$_POST[department]','$_POST[request]','$_POST[remarks]','Pending','Pending','Pending','$_POST[user]')";
		$is_query_succesful=mysql_query($query);
		if($is_query_succesful)
		{ echo "Request sent";}
		else {echo "Error inserting data";}
		
		?>
	

	
	
</div>
</center>



<br>
<footer>
	
	<div class="footer-info">
		<br>
	<center>
	<div class="footer-img">
	<img src="images/footer-img1.png">
	<img src="images/footer-img2.png">
	</div>

	<br>
	De La Salle Lipa; ICTC<br>
	1962 JP Laurel National Highway<br>
	Mataas Na Lupa, Lipa City 4217<br>
	Tel. No. 63.43.756-5555<br>
	Telefax: 756-3117<br>
	© Copyright 2018
	<br>
	</center>
	</div>
		

</footer>

</body>
</html>