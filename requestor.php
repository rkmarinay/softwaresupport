<!DOCTYPE html>
<html>
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
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size:18px;

        }
        
        li{
            padding-left: 70px;
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
        
        .main-body{
	        width: 1300px;
			padding-bottom:150px;
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
        
		.rows{
			padding-top:4px;
			padding-bottom:4px;
			text-align:left;
			color:black;
			text-decoration:none;
			border-bottom:1px solid #D1D1D1;
			width:1100px;
		}
		
		.roww{
			margin-top:5px;
			text-align:left;
			color:black;
			text-decoration:none;
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
			margin-right:60px;
			border-radius:10px;
			color:white;
			font-family:Calibri;
			font-size:20px;
		}
		
		.delete{
			position:static;
			float:left;
			text-align:left;
			width:100px;
			margin-left:120px;
			padding-top:5px;
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
			padding: 13px 50px;
			font-size: 16px;
			border: none;
			cursor: pointer;
			font-family: "Montserrat", sans-serif
		}
				
		.dropdown {
		position: relative;
		display: inline-block;
		float:right;
		font-family: "Montserrat", sans-serif
	}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			font-family: "Montserrat", sans-serif
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			font-family: "Montserrat", sans-serif
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
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
		
		.enclosed{
			float:left;
		}
		
		.stattt{
			text-align:center;
			margin-left:50px;
			float:left;
			width:120px;
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


<div class="main-body">
	
	<br>
	
	<div class="stattt" style="background-color:#323CDA"> Queued </div> <div class="enclosed"> &ensp;*approved by Immediate Superior </div>
	<div class="stattt" style="background-color:#E1913C"> Queued </div> <div class="enclosed"> &ensp;*approved by ICTC </div>
	<div class="stattt" style="background-color:#C3E13C"> Queued </div> <div class="enclosed"> &ensp;*performed by Software Support </div>

	<br><br>
	<?php
		include 'dbconnect.inc';
		
		$query="SELECT * FROM requests WHERE user= '$uname' ORDER BY id DESC";
		$result=mysql_query($query);
		$num_results=mysql_num_rows($result);
		echo "<i> $num_results request(s) found </i> <br><br>";
		
		
		while($row=mysql_fetch_assoc($result))
		{	
			echo "<div class='rows'>";
			
			if($row['status'] == 'Pending')
			{
				echo "<strong style='color:red;margin-left:50px;font-size:20px'></strong>";
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
			
			if($row['status'] == 'Queued' && $row['ictcstatus'] == 'Pending')
			{
			echo "<div class='stat' style='background-color:#323CDA'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Queued' && $row['ictcstatus'] == 'Queued' && $row['ssstatus'] == 'Pending')
			{
			echo "<div class='stat' style='background-color:#E1913C'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Queued' && $row['ssstatus'] == 'Queued')
			{
			echo "<div class='stat' style='background-color:#C3E13C'><strong>".$row['status']."</strong></div>";
			}
			
			echo "<div class='request'>".$row['request']."</div>";
			echo "<div class='name'>".$row['name']."</div>";
			echo "<div class='date'>".$row['date']."</div>";
			echo "<div class='id'>".$row['id']." </div>";
			echo "</div></a>";
			$id = $row['id'];
			
		}
		
			mysql_close();
	
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