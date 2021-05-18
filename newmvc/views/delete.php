<?php 
	

if(isset($_POST['idf'])){
		$exitflight = new FlightsController();
		$exitflight->deleteFlight();
	}

else if(isset($_POST['id'])){
		$exitflight = new ReservationsController();
		$exitflight->deleteReservation();
	}
	else if(isset($_POST['idc'])){
		$exitflight = new UsersController();
		$exitflight->deleteUser();
	}

?>