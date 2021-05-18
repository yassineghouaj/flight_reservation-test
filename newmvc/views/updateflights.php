<?php   

		$data = new FlightsController();
		$flights = $data->getOneFlight();

    if(isset($_POST['update'])){

		$update = new FlightsController();
		$update->updateFlight();
	}



?>


    
                <div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">update vol </div>
				<div class="card-body bg-dark">
					<a href="home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<?php foreach($flights as $flight):?>
					<form  method="post">
						<div class="form-group">
							<label for="idf">idv*</label>
							<input type="text" name="idf" class="form-control" placeholder="idf"
							value="<?php echo $flight['idf'];?>"
							>
						</div>
						<div class="form-group">
							<label for="depart">depart*</label>
							<input type="text" name="depart" class="form-control" placeholder="depart"
							value="<?php echo $flight['depart'];?>"
							>
						</div>
						<div class="form-group">
							<label for="destination">destination*</label>
							<input type="text" name="destination" class="form-control" placeholder="destination"
							value="<?php echo $flight['destination'];?>"
							>
						</div>
                        <div class="form-group">
							<label for="prix">price*</label>
							<input type="text" name="price" class="form-control" placeholder="price"
							value="<?php echo $flight['price'];?>"
							>
						</div>

                        <div class="form-group">
							<label for="datedepart">date*</label>
							<input type="text" name="dates" class="form-control" placeholder="dates"
							value="<?php echo $flight['dates'];?>"
							>
						</div>

						<div class="form-group">
							<label for="nbplace">nbplace*</label>
							<input type="text" name="nbplace" class="form-control" placeholder="nbplace"
							value="<?php echo $flight['nbplace'];?>"
							>
						</div>
                       
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="update">update</button>
						</div>
					</form>
						<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>