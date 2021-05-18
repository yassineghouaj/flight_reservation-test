<?php 

		$data = new FlightsController();
		$flights = $data->getAllFlights();

if(isset($_POST['add'])){
		$newflight = new FlightsController();
		$newflight->addFlight();
	}
        

	

	
?>
	<table class="table table-striped table-dark">
					  <thead>
					    <tr>
					     
					      <th scope="col">idf</th>
					      <th scope="col">depart</th>
					      <th scope="col">destination</th>
					      <th scope="col">price</th>
					      <th scope="col">nbplace</th>
					      <th scope="col">date</th>
                          <th scope="col">update/cancel</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($flights as $flight):?>
					    	<tr>
						     
						      <td><?php echo $flight['idf'];?></td>
						      <td><?php echo $flight['depart'];?></td>
						      <td><?php echo $flight['destination'];?></td>
						      <td><?php echo $flight['price'];?></td>
                              <td><?php echo $flight['nbplace'];?></td>
                              <td><?php echo $flight['dates'];?></td>
						 
						      <td class="d-flex flex-row">
                                  	<form method="post" class="mr-1" action="updateFlights" >
						      		<input type="hidden" name="idf" value="<?php echo $vol['idf'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="idv" value="<?php echo $vol['idf'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
<button onclick="" class="btn btn-primary" style="
    float: right;
" >add vol</button>




<div class="fp" id="myForm" >

        <div class="container">
		
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">update vol  </div>
				<span class="btn cancel" onclick="">X</span>
				<div class="card-body bg-dark">
					<a href="home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>

	<form  method="post">
					
						<div class="form-group">
							<label for="depart">depart*</label>
							<input type="text" name="depart" class="form-control" placeholder="depart"
							value=""
							>
						</div>
						<div class="form-group">
							<label for="destination">destination*</label>
							<input type="text" name="destination" class="form-control" placeholder="destination"
							value=""
							>
						</div>
                        <div class="form-group">
							<label for="prix">prix*</label>
							<input type="text" name="price" class="form-control" placeholder="price"
							value=""
							>
						</div>
						<div class="form-group">
							<label for="nbplace">nbplace*</label>
							<input type="text" name="nbplace" class="form-control" placeholder="nbplace"
							value=""
							>
						</div>
                        <div class="form-group">
							<label for="datedepart">datedepart*</label>
							<input type="date" name="dates" class="form-control" placeholder="datedepart"
							value=""
							>
						</div>
					
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="add">add</button>
						</div>
					</form>
					</div>
			</div>
		</div>
	</div>
</div>
</div>
