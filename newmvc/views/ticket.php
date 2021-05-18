<?php 
 if(isset($_POST['submit'])){
		$newPassenger = new PassengersController();
		$newPassenger->addPassenger();


			$newReservation = new ReservationsController();
		$newReservation->addReservation();
		
	}			
      
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-10 mx-auto">
			<div class="card-body">
				<div class="text-center p-5 rounded bg-secondary">
					<h2 class="text-white">
						ticket Page 
					</h2>
					<a href="" class="btn btn-outline-secondary text-white">Accueil</a>
				</div>
			</div>
		</div>
	</div>
</div>