<?php 


	if(isset($_POST['search'])){
	$data = new FlightsController();
		$vols = $data->findFlights();

	 $depart=  $_POST['depart'];
   $destination=  $_POST['destination'];
   $datedepart=  $_POST['datedepart'];
   $trip=$_POST['trip'];

  

$data = new FlightsController();
		$flights = $data->findFlights();


	
	}
?>

<div class="scrold">
<form action="reservation" method="post">
	<table class="table table-striped table-dark">
					  <thead>
					    <tr>
					      <th>flight ID</th>
                    <th>depart</th>
                    <th>destination </th>
                    <th>price</th>
                  
                    <th>nbplace</th>
                    <th>datedepart</th>
                    <th>Select</th>
                     <th>travelers number</th>
					    </tr>
					  </thead>
					  <tbody>
               <?php foreach($flights as $flight):?>
		<tr>
   


<td><?php  echo  $flight['idf'];?></td>
   <td><?php  echo  $flight['depart'];?></td>
   <td><?php  echo $flight['destination'];?></td>
  
   <td><?php  echo $flight['price'];?></td>
   <td><?php  echo $flight['dates'];?></td>
   <td><?php  echo $flight['nbplace'];?></td>
   <td><input type="radio" name="idf" required value="<?php  echo  $flight['idf'];?>"></td>
   <td>		<input type="number"  name="np"  required>
</td>
    <td><input type="hidden" name="dates" value="<?php  echo $flight['depart'];?>"></td>
        						</tr>;
				
		<?php endforeach;?>
        </tbody>
            </table>

            <?php 

   $trip=$_POST['trip'];
     if ($trip==2 ){



echo "<p><strong>CHOISIR LA DATE DE RETOUR <strong></p>";

echo '<table class="table table-striped table-dark">';
echo '<thead>';
echo '<tr>';
echo '<th>flight ID</th>';

echo '<th>price</th>';
echo '';
echo '<th>date de retour</th>';
echo '<th>Select</th>';

echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach($volrs as $volr):

echo '<td>'; echo  $volr['idf'];  echo '</td>';
echo '<td>'; echo  $volr['price'];  echo '</td>';
echo '<td>'; echo  $volr['depart'];  echo '</td>';

 echo '<td><input type="radio" name="idvr" value="'; echo  $volr['idf']; echo'"required ></td>';
 
 
 
  


 endforeach;
      
echo '</tbody>';
echo '</table>';
     }
 
	
	
?>
    					
<div style="
    display: flex;
    justify-content: center;
" > 
<input type="submit" value="Select vol" name="Select">
</div>
</form>




</div>
