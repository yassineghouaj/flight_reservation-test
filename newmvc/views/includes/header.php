<!DOCTYPE html>
<html>
<head>
	<title>Dreams FLY</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/">	
<link rel="stylesheet" href="style/">	

</head>
<bodys >
		<nav id="navm" class="navbar navbar-expand-lg navbar-light bg-secondary">
		<a class="navbar-brand" href="#">Dreams FLY</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home">HOME </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="mesreservation">RESERVAION</a>
				</li>
        	<li class="nav-item">
					<a class="nav-link" href="acounts">ACOUNTS</a>
				</li>
				
                <li class="nav-item">
					<a class="nav-link" href="logout">LOGOUT</a>
				</li>
			
			</ul>
	 <?php
	
			echo " WELCOME" ," ".$_SESSION['fullname']."";
		
		?>
		</div>
	</nav>
 