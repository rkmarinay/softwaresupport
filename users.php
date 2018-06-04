<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 18px;

        }

         .Header{
	        width: 100%;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
	        font-size: 200%;
	        top: 108px
        }
        
        .SubTitle{
	        font-size: 20px;
	        top: 155px
        }
		
        .logo{
	        top: 10px;
        }

        .LogIn{
			position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 1200px;
	        top: 155px
		}
		
        .main-body{
	        width: 1300px;
	        height: 800px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: #f2f2f2;
	        margin-top: 20px;
	        
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
		
		.stat{
			position:static;
			float:right;
			text-align:left;
			width:100px;
			margin-right:5px;
		}
		
		.id{
			position:static;
			float:right;
			text-align:left;
			width:50px;
			margin-right:50px;
		}
		
		.date{
			position:static;
			float:right;
			text-align:left;
			width:100px;
			margin-right:40px;
		}
		
		.name{
			position:static;
			float:right;
			text-align:left;
			width:200px;
			margin-right:20px;
		}
		
		.request{
			position:static;
			float:right;
			text-align:left;
			width:430px;
			margin-right:40px;
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
			font-family: "Montserrat", sans-serif;
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
			font-family: "Montserrat", sans-serif;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}		
		
		td {
			width:200px;
			height:50px;
		}
		
		table {
			font-family:calibri;
			text-align:center;
		}
		
		.block {
			display: block;
			width: 20%;
			border: none;
			background-color: black;
			color: white;
			padding: 10px 28px;
			font-size: 20px;
			cursor: pointer;
			text-align: center;
			border-radius: 8px;
		}
		
		.block:hover{
			background-color:gray;
		}
		
		body,h1,h2,h3,h4,h5,h6 {font-family:Calibri}
		.fa-anchor,.fa-coffee {font-size:200px}
    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center> <div class="Title">ICTC ONLINE </div> </center>
		<center> <div class="SubTitle">De La Salle Lipa </div> </center>
		
	</div>
 <div class="dropdown">
		<button class="dropbtn">Administrator</button>
	  <div class="dropdown-content">
			<a href="index.php">Log Out</a>
		</div>
		</div>
	<ul>
	  	<ul>
	  <li style="padding:5px"><a href="adminhome.php"><img src="home.png" style="width:40px;margin-left:10px;"></a></li>
	</ul>
	</ul>


<center>


<div class="main-body">
	
	<br>
	
	<a href="adduser.php" style="text-decoration:none"><button class="block">Add user</button></a><br>
	
	<?php
	
		include 'dbconnect.inc';
		echo "<div class='w3-container'  style='width:60%'>";
		echo "<table class='w3-table-all w3-centered'>";
		echo "<tr style='color:white;background-color:black'>";
			echo "<th>NAME</th>";
			echo "<th>USERNAME</th>";
			echo "<th>PASSWORD</th><tr>";
		echo "<tr>";
			echo "<td>Immediate Superior</td>";
			echo "<td>immediate_superior</td>";
			echo "<td>1234</td><tr>";
		echo "<tr>";
			echo "<td>ICTC</td>";
			echo "<td>ictc</td>";
			echo "<td>1234</td><tr>";
		echo "<tr>";
			echo "<td>Software Support</td>";
			echo "<td>software_support</td>";
			echo "<td>1234</td><tr>";
		
		$query="SELECT * FROM users";
		$result=mysql_query($query);
		while($row=mysql_fetch_assoc($result))
		{	
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td style='width:180px'>".$row['password']."</td><tr>";
			
		}
	
		echo "</table></div>";
	
	
	
	?>
	
</div>




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