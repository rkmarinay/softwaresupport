<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 18px;

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
			margin-right:40px;
			border-radius:10px;
			color:white;
			font-family:Calibri;
			font-size:20px;
		}
		
		.stat2{
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
		
		
		.delete{
			position:static;
			float:left;
			text-align:left;
			width:100px;
			margin-left:150px;
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
	<a href="admin_addrequest.php" style="text-decoration:none"><button class="block">Add request</button></a>
	<br>
	<?php
		include 'dbconnect.inc';
		
		echo "<form action='search.php' method='GET'>";
		echo "<input name='search' type='text' size='35'>";
		
		echo "<select name='value' style='width:160px;margin-left:5px'>";
		echo "<option value='ID'> ID </option>";
		echo "<option value='Name'> Name </option></select>";
		echo "<a href='administrator.php'><button style='background-color:#BDBDBD;border:none;width:50px;margin-left:5px'> OK </button></a><br><br>";
		
		
		$query="SELECT * FROM requests ORDER BY id DESC";
		$result=mysql_query($query);
		$num_results=mysql_num_rows($result);
		echo "<i> $num_results request(s) found </i> <br><br>";
		
		echo "<div class='row'>";
		echo "<strong> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;ID &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Date&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Name &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Superior&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; ICTC &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Support</strong>";
		echo "</div>";
		
		echo "<table>";
		while($row=mysql_fetch_assoc($result))
		{	
			echo "<div class='delete'> <a href='process6.php?id={$row['id']}' style='text-decoration:none;'> <img src='delete.png' width=30px style='margin-bottom:3px'> </a>";
			//edit
			echo "</div>";
			echo "<a href='editing.php?id={$row['id']}'style='text-decoration:none;'>";
			echo "<div class='rows'>";
			
			echo "<strong style='color:#f2f2f2;margin-left:10px;font-size:20px'>&#8226;</strong>";
			
			echo "<strong>".$row['id']."</strong>";
			echo "&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;".$row['date'];
			echo "&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;".$row['name'];
			
			
			//software support
			if($row['ssstatus'] == 'Pending')
			{
			echo "<div class='stat2' style='background-color:gray'><strong>".$row['ssstatus']."</strong></div>";
			}
			
			if($row['ssstatus'] == 'Completed')
			{
			echo "<div class='stat2' style='background-color:#4CAF50'><strong>".$row['ssstatus']."</strong></div>";
			}
			
			if($row['ssstatus'] == 'Queued')
			{
			echo "<div class='stat2' style='background-color:#323CDA'><strong>".$row['ssstatus']."</strong></div>";
			}
			
			if($row['ssstatus'] == 'Disapproved')
			{
			echo "<div class='stat2' style='background-color:#EC3A3A'><strong>".$row['ssstatus']."</strong></div>";
			}
			 
			//ictc
			if($row['ictcstatus'] == 'Pending')
			{
			echo "<div class='stat' style='background-color:gray'><strong>".$row['ictcstatus']."</strong></div>";
			}
			
			if($row['ictcstatus'] == 'Completed')
			{
			echo "<div class='stat' style='background-color:#4CAF50'><strong>".$row['ictcstatus']."</strong></div>";
			}
			
			if($row['ictcstatus'] == 'Queued')
			{
			echo "<div class='stat' style='background-color:#323CDA'><strong>".$row['ictcstatus']."</strong></div>";
			}
			
			if($row['ictcstatus'] == 'Disapproved')
			{
			echo "<div class='stat' style='background-color:#EC3A3A'><strong>".$row['ictcstatus']."</strong></div>";
			}
			
			//superior
			if($row['status'] == 'Pending')
			{
			echo "<div class='stat' style='background-color:gray'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Queued')
			{
			echo "<div class='stat' style='background-color:#323CDA'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Disapproved')
			{
			echo "<div class='stat' style='background-color:#EC3A3A'><strong>".$row['status']."</strong></div>";
			}
			
			if($row['status'] == 'Completed')
			{
			echo "<div class='stat' style='background-color:#4CAF50'><strong>".$row['status']."</strong></div>";
			}
		
			$id = $row['id'];
			
			echo "</div></a>";
			
		}
		echo "</table>";
		
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