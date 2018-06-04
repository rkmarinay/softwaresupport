<!DOCTYPE html>
<html>
<title> Generate Report </title>
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
			padding-bottom:100px;
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

		body,h1,h2,h3,h4,h5,h6 {font-family:Calibri}
		.fa-anchor,.fa-coffee {font-size:200px}
		
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
			<a href="login.html">Log Out</a>
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

	<?php
		include 'dbconnect.inc';
		
		$stat = $_GET['stat'];
		
		echo "<button class='block' onclick='myFunction()'>Generate Report</button>";
		echo "<br>";
		
		echo "<form action='generatereport.php?stat={$stat}' method='GET' >";
		
		echo "<select name='stat' style='width:160px'>";
		echo "<option value= $stat' type='hidden'> $stat </option>";
		echo "<option value='All'> All </option>";
		echo "<option value='Queued'> Queued </option>";
		echo "<option value='Pending'> Pending </option>";
		echo "<option value='Completed'> Completed </option>";
		echo "<option value='Disapproved'> Disapproved </option></select>";
		echo "<button style='background-color:#4CAF50;border:none;width:50px;margin-left:10px'> OK </button><br>";
		
		if ($stat=='All')
		{
		$query="SELECT * FROM requests ORDER BY id DESC";
		}
		
		else{
			$query="SELECT * FROM requests WHERE ictcstatus='$stat' ORDER BY id DESC";
		}

		$result=mysql_query($query);
		$num_results=mysql_num_rows($result);
		echo "<i> $num_results request(s) found </i> <br><br>";
		
		echo "<div class='w3-container' style='width:95%;font-size:18px;'>";
		echo "<table class='w3-table w3-striped w3-bordered'>";
		echo "<tr style='background-color:black;color:white'>";
				echo "<th>ID</th>";
				echo "<th>DATE</th>";
				echo "<th>NAME</th>";
				echo "<th>DEPARTMENT</th>";
				echo "<th>CONTACT NO.</th>";
				echo "<th>REQUEST</th>";
				echo "<th>STATUS</th></tr>";
				
		while($row=mysql_fetch_assoc($result))
		{	
			if ($row['ictcstatus']=='Queued'){
				echo "<tr style='background-color:#C8C9FF'>";}
			elseif ($row['ictcstatus']=='Pending'){
				echo "<tr style='background-color:#DFDFDF'>";}
			elseif ($row['ictcstatus']=='Disapproved'){
				echo "<tr style='background-color:#FFCBCB'>";}
			else{
				echo "<tr style='background-color:#BFFFC3'>";}
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['date']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['department']."</td>";
					echo "<td>".$row['contactno']."</td>";
					echo "<td>".$row['request']."</td>";
					echo "<td>".$row['ictcstatus']."</td></tr>";
		}
		echo "</table></div>";
		
			mysql_close();
	
	?>
	
	</form>
</div>

		<script>
		function myFunction() {
			window.print();
		}
		</script>


<br>

</body>
</html>