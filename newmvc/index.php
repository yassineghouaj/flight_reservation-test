<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';



$home = new HomeController();  

$pages = ['add','update','delete','logout','flight','reservation','ticket','myreservations','acounts'];
$pagesa = ['add','update','delete','logout','flight','reservation','ticket','dashboard','flight','updateflights','reservations','users'];


if(isset($_SESSION['logged'])  && $_SESSION['logged'] === true){

	if(isset($_GET['page'])&& $_SESSION['user_type'] === 'user'){
		require_once './views/includes/header.php';
		if(in_array($_GET['page'],$pages)){
			$page = $_GET['page'];
			$home->index($page);
			require_once './views/includes/footer.php';
		}else{
			include('views/includes/404.php');
		}
	}
else if(isset($_GET['page'])&& $_SESSION['user_type'] === 'Admin'){
	require_once './views/includes/headerA.php';
		if(in_array($_GET['page'],$pagesa)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}
	}




	else{
		$home->index('home');
	}





}



else if(isset($_GET['page']) && $_GET['page'] === 'signp'){
	$home->index('signp');
}else{
	$home->index('login');
}