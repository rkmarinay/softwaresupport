<!DOCTYPE html>
<html>
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
			width:800px;
			float:left;
			padding:30px;
			margin-left:360px;
		}
		
		.reqq {
			text-align:left;
			width:300px;
			float:left;
		}
		
		.update{
			text-align:left;
			width:300px;
			float:left;
			margin-left:20px;
		}
		
		input[type=text], input[type=date] {
			border: 1px solid gray;
			border-radius: 2px;
			width: 300px;
		}
		
		td {
			padding:6px;
			vertical-align:top;
		}
		
			.block {
			display: block;
			width: 20%;
			border: none;
			background-color: #4CAF50;
			color: white;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
			text-align: center;
			border-radius: 8px;
			margin-left:160px;
		}

		.block:hover {
			background-color: #5FDE64;
			color: black;
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
		
				body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
		.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
		.fa-anchor,.fa-coffee {font-size:200px}
		
		
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
		echo $_GET['name'];
		$name=$_GET['name'];
		$uname=$_GET['uname'];
		?>
		</button>
	  <div class="dropdown-content">
			<a href="login.html">Log Out</a>
		</div>
		</div>
	
	<ul>
	  	<ul>
		<?php
	 echo "<li style='padding:5px'><a href='requestor.php?name=$name&&uname=$uname'><img src='home.png' style='width:40px;margin-left:10px;'></a></li>";
	  ?>
	</ul>
	</ul>
	

<center> 
<div class="main-body">
	

	<br>
<?php
	echo "<a href='requestor.php?name=$name&&uname=$uname'> Go back to inbox<br> </a>"; ?>
	<div class="viewreq">
	<?php
		$id = $_GET['id'];
		include 'dbconnect.inc';
		
		echo "<form action='edit2.php?id=$id' method='POST'>";
		
		$query="SELECT * FROM requests";
		$result=mysql_query($query);
		while($req=mysql_fetch_assoc($result))
		{
			$date = $req['date'];
			$name = $req['name'];
			$contactno = $req['contactno'];
			$department = $req['department'];
			$request = $req['request'];
			$remarks = $req['remarks'];
			
			if ($id == $req['id'])
			{
				echo "<table><tr>";
					echo "<td> Date: </td>";
					echo "<td> $date </td></tr>";
				echo "<tr>";
					echo "<td>  Name:  </td>";
					echo "<td> <input type='text' name='name' value='$name'> </td></tr>";
				echo "<tr>";
					echo "<td> Local/Contact No:  </td>";
					echo "<td> <input type='text' name='contactno' value='$contactno'> </td></tr>";
				echo "<tr>";
					echo "<td>  Requested For:  </td>";
					echo "<td> <input type='text' name='department' value='$department' > </td></tr>";
				echo "<tr>";
					echo "<td> Request Description:  </td>";
					echo "<td> <textarea name='request' style='height:100px;width:300px'>$request</textarea> </td></tr>";
				echo "<tr>";
					echo "<td> Remarks: </td>";
					echo "<td> <textarea name='remarks' style='height:100px;width:300px' >$remarks</textarea> </td></tr></table>";	
			}
			}
?>

	<br>
	<button class="block">Submit</button>
	</form>
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