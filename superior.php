<!DOCTYPE html>
<html>
<title>Immediate Superior Inbox</title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
</head>
    
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        
		
        .ServiceTitle{
	        width: 1290px;
	        height: 30px;
	        background-color: #151815;
			color: white
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
	        left: 1100px;
	        top: 155px
		}
		
        .logo{
	        position: absolute;
	        left: 608px;
	        top: 10px;
        }
        
        .main-body{
	        width: 1300px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: #f2f2f2;
	        margin-top: 20px;
	        padding-bottom:100px;
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
        
		.rows{
			padding-top:4px;
			padding-bottom:4px;
			text-align:left;
			color:black;
			text-decoration:none;
			border-bottom:1px solid #D1D1D1;
			width:1100px;
		}
		
		.rows:hover{
			background-color: #DFDFDF;
			display:block;
			text-decoration:none;
		}
		
		.stat{
			position:static;
			float:right;
			text-align:center;
			width:120px;
			margin-right:30px;
			border-radius:10px;
			color:white;
			font-family:Calibri;
			font-size:20px;
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
			width:400px;
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
	
		.button {
			background-color:#4CAF50;
			border:none;
			width:50px;
			margin-left:10px;
			color:white;
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
			<a href="login.html">Log Out</a>
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
	

	<?php
		include 'dbconnect.inc';
		$stat = $_GET['stat'];
		
		echo "<form action='superior.php?stat={$stat}' method='GET'>";
		
		echo "<select name='stat' style='width:160px'>";
		echo "<option value= $stat' type='hidden'> $stat </option>";
		echo "<option value='All'> All </option>";
		echo "<option value='Queued'> Queued </option>";
		echo "<option value='Pending'> Pending </option>";
		echo "<option value='Disapproved'> Disapproved </option></select>";
		echo "<button class='button'> OK </button><br>";
		
		if ($stat=='All')
		{
		$query="SELECT * FROM requests WHERE status!='Completed' ORDER BY id DESC";
		}
		
		else{
			$query="SELECT * FROM requests WHERE status !='Completed' AND status='$stat' ORDER BY id DESC";
		}
		$result=mysql_query($query);
		$num_results=mysql_num_rows($result);
		echo "<i> $num_results request(s) found </i> <br><br>";
		while($row=mysql_fetch_assoc($result))
		{	
			echo "<a href='viewrequest.php?id={$row['id']}'style='text-decoration:none;'>";
			echo "<div class='rows'>";
			
			if($row['status'] == 'Pending')
			{
				echo "<strong style='color:red;margin-left:50px;font-size:20px'>&#8226;</strong><strong>";
			}
			else { echo "<strong style='color:#f2f2f2;margin-left:50px;font-size:20px'>&#8226;</strong>";}
			
			if($row['status'] == 'Pending')
			{
			echo "<div class='stat' style='background-color:gray'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Completed')
			{
			echo "<div class='stat' style='background-color:#4CAF50'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Disapproved')
			{
			echo "<div class='stat' style='background-color:#EC3A3A'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Queued')
			{
			echo "<div class='stat' style='background-color:#323CDA'><strong>".$row['status']."</strong></div>";
			}
			
			echo "<div class='request'>".$row['request']."</div>";
			echo "<div class='name'>".$row['name']."</div>";
			echo "<div class='date'>".$row['date']."</div>";
			echo "<div class='id'>".$row['id']." </div>";
			echo "</div></a></strong>";
			$id = $row['id'];
		}
			mysql_close();
	
	?>
	
	</form>
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