<!DOCTYPE html>
<html>
<title>View Request</title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
    
    <style>
        body{
            background: #344e35 ;
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
		
		.LogIn{
			position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 1100px;
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
        
		.viewreq {
			text-align:left;
			width:700px;
			float:center;
			padding:50px;
		}

		.inbox{
			width:60px;
			height:30px;
			background-color:#D5D5D5;
			float:left;
			margin-left:350px;
			border: 1px solid #909090;
		}
		
		.inbox:hover{
		background-color:#909090;
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
		
		.dropbtn {
			background-color: #4CAF50;
			color: white;
			padding: 13px;
			font-size: 16px;
			border: none;
			cursor: pointer;
			font-family: "Montserrat", sans-serif;
		}
				
		.dropdown {
		position: relative;
		display: inline-block;
		float:right;
		font-family: "Montserrat",sans-serif;
	}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			font-family: "Montserrat", sans-serif;
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
		
		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
		.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
		.fa-anchor,.fa-coffee {font-size:200px}
		
		.reqq{
			line-height:35px;
		}
		
		.block {
			width: 25%;
			border: none;
			background-color: #4CAF50;
			color: white;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
			text-align: center;
			border-radius: 8px;
		}
		
    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center> <div class="Title">ICTC ONLINE </div> </center>
		<center> <div class="SubTitle">De La Salle Lipa </div> </center>
		
	</div>
	
		<div class="dropdown">
		<button class="dropbtn">Immediate Superior</button>
	  <div class="dropdown-content">
			<a href="index.php">Log Out</a>
		</div>
		</div>
		
	<ul>
	  	<ul>
	  <li style="padding:5px"><a href="superiorhome.php"><img src="home.png" style="width:40px;margin-left:10px;"></a></li>
	</ul>
	</ul>

<center> 
<div class="main-body">
	

	<br>
	<a href="superior.php?stat=All"> Go back to inbox<br> </a>
	<div class="viewreq">
	<?php
		$id = $_GET['id'];
		include 'dbconnect.inc';
		
		echo "<form action='process2.php?id=$id' method='POST'>";
		$query="SELECT * FROM requests";
		$result=mysql_query($query);
		while($req=mysql_fetch_assoc($result))
		{
			if ($id == $req['id'])
			{
				
			echo "<div class='reqq'>";
			echo "<strong>Date</strong>: ".$req['date'];
			echo "<strong><br>Name</strong>: ".$req['name'];
			echo "<strong><br>Contact No:</strong> ".$req['contactno'];
			echo "<strong><br>Department:</strong> ".$req['department'];
			echo "<strong><br>Request:</strong> ".$req['request'];
			echo "<strong><br>Remarks:</strong> ".$req['remarks'];
			
			echo "<strong><br>Status:</strong> ".$req['status'];
			
			echo "<br></div>";
			
			
				if ($req['status'] == 'Pending')
				{
					echo "_______________________________________________________<br><br>";
					echo "<strong> Comments: </strong> <br><textarea name='comments' style='height:100px;width:600px'></textarea><br><br>";
		
					echo "<center><input type='submit' class='block' name='approval' value='Approve'>";
					echo"&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;";
					echo "<input type='submit' class='block' style='background-color:#FF4A4A' name='approval' value='Disapprove'></button></a></center><br>";
				}
			
			}
			}
			
			echo "</form>";
		
		
?>
	</div>
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