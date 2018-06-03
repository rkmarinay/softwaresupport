<!DOCTYPE html>
<html>
<title>ICTC Home</title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-ascale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body{

            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        
        .Header{
	        width: 100%;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
	        font-size: 200%;
	        top: 108px
        }
        
        .SubTitle{
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        top: 155px
        }
		
        .logo{
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
		<button class="dropbtn">ICTC</button>
	  <div class="dropdown-content">
			<a href="index.php">Log Out</a>
		</div>
		</div>
		
	<ul>
	  	<ul>
	  <li style="padding:5px"><a href="ictchome.php"><img src="home.png" style="width:40px;margin-left:10px;"></a></li>
	</ul>
	</ul>

	<!-- Second Grid -->
	<div class="w3-row-padding w3-padding-64 w3-container">
		<div class="w3-content">
			<div class="w3-row-padding w3-center w3-margin-top">
				<div class="w3-third">
				<a href="ihistory.php?stat=All"> 
					<div class="w3-card w3-container  w3-button" style="min-height:300px;text-decoration:none">
					<br><h3>Request History</h3><br>
					<img src="history.png" style="width:50%">
					</div>
				</a>
				</div>
				<div class="w3-third">
				<a href="ictc.php?stat=All">
					<div class="w3-card w3-container w3-button" style="min-height:300px;text-decoration:none">
					<br><h3>View Requests<span class="badge">
					
					<?php
					include 'dbconnect.inc';
					
					$query="SELECT * FROM requests WHERE status='Queued' AND ictcstatus = 'Pending'";
					$result=mysql_query($query);
					$num_results=mysql_num_rows($result);
					
					echo $num_results;
					
					?>
					
					</span></h3>
					
					
					<br>
					<img src="status.png" style="width:50%">
					</div>
				</a>	
				</div>
				
				<div class="w3-third">
				<a href="completed2.php">
					<div class="w3-card w3-container w3-button" style="min-height:300px;text-decoration:none">
					<br><h3>Completed Requests</h3><br>
					<img src="completed.png" style="width:45%">
					</div>
				</a>
				</div>
			</div>

		</div>
	</div>



</body>


<br>
<footer>
	
	<div class="footer-info"><br>
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

</html>