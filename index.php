<!DOCTYPE html>
<html>
<title>Login</title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    
    <style>
        body{
		      background: #151815;
            font-family: 'Arial';
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
        
		input[type=text], input[type=password] {
			border: 1px solid gray;
			border-radius: 2px;
			width: 200px;
		}
		
		td {
			padding:8px;
		}

		.container {
			width: 40%;
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
		  
		 .block {
			display: block;
			width: 50%;
			border: none;
			background-color: #4CAF50;
			color: white;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
			text-align: center;
			border-radius: 8px;
		}

		.block:hover {
			background-color: #5FDE64;
			color: black;
		}
		
    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center> <div class="Title">ICTC ONLINE </div> </center>
		<center> <div class="SubTitle">De La Salle Lipa </div> </center>
		
	</div>

	
<center>

<br>
<i style="color: #5FDE64">SOFTWARE SUPPORT SERVICE</i><br><br>

	<div class="container">
	
		<br>
		<form action="process.php" method="POST">
		<table>
		<tr>
			<td> <input type="text" name="username" placeholder="Username" required> </td>
		</tr>
		<tr>
			<td> <input type="password" name="password" placeholder="Password" required> </td>
		</tr>
		</table>
		<br>
		<button class="block">Login</button>
		</form>
	
	</div>
</center>



<br>

</body>
</html>