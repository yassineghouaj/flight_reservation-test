<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Dreams FLY</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/">	
</head>
<body >

<div class="pos">
<div class="login-box">
  <h2>Login</h2>
  <?php include('./views/includes/alert.php');?>
  <form method="post">
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>email</label>
    </div>
    <div class="user-box">
      <input type="password" name="psd" required="">
      <label>Password</label>
    </div>
		<div class="sho">

					passanger <input type='radio' name='user_type' value='passanger' checked/> Admin <input type='radio' name='user_type' value='Admin'/>

				      	</div>
   <div class="cen">
     <button name="submit" class="btn btn-outline-dark">Connexion</button>
	 	<a href="signp" class="btn btn-link">Inscription</a>
   </div>
  </form>
  
				
				
</div>
</div>