<?php


class FlightsController{


    public function getAllFlights(){
         $flights = Flight::getAll();
         return $flights;
    }


public function findFlights(){
        if(isset($_POST['search'])){
            $data = array(
                  'depart' => $_POST['depart'],
                  'destination' => $_POST['destination']

            );
        }
        $flights = Flight::getBySearch($data);
        return $flights;

       }
      

       public function find2Flights(){

        if(isset($_POST['search'])){
            $data = array(
                  'destination' => $_POST['depart'],
                  'depart' => $_POST['destination']

            );
        }
        $flights2 = Flight::getBySearch($data);
        return $flights2;
       }

      
       public function getOneFlight(){
             
         if (isset($_POST['idf'])){
             $data = array(

                 'idf' => $_POST['idf']

             );
             $flight = Flight::getFlight($data);
             return $flight;
         }
       }

        
       public function updateFlight(){
		if(isset($_POST['update'])){
			$data = array(
				'idf' => $_POST['idf'],
				'depart' => $_POST['depart'],
				'destination' => $_POST['destination'],
				
				'price' => $_POST['price'],
				'nbplace' => $_POST['nbplace'],
				'dates' => $_POST['dates']
				
			);
			$result = Flight::update($data);
			if($result === 'ok'){
				Session::set('flight modified!!');
				Redirect::goto('flights');
			}else{
				echo $result;
			}
		}
	}




    public function addFlight(){
		if(isset($_POST['add'])){
			$data = array(
				'depart' => $_POST['depart'],
				'destination' => $_POST['destination'],
				
				'price' => $_POST['price'],
				'nbplace' => $_POST['nbplace'],
				'dates' => $_POST['dates'],
			);
			$result = Flight::add($data);
			if($result === 'ok'){
				Session::set('flight added!!');
				Redirect::goto('flights');
			}else{
				echo $result;
			}
		}
	}

    public function deleteFlight(){
		if(isset($_POST['idf'])){
			$data['idf'] = $_POST['idf'];
			$result = Flight::delete($data);
			if($result === 'ok'){
				Session::set('flight has been deleted!!');
				Redirect::goto('flight');
			}else{
				echo $result;
			}
		}
	}











}


?>