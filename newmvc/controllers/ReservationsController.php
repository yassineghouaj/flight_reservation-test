<?php

class ReservationsController{


    public function getAllReservations(){
		$reservations = Reservation::getAll();
		return $reservations;
	}



        public function addReservation(){

               if(isset($_POST["submit"])){
                   $np = $_POST['inumplace'];
                   $data = array(
                       "idc" => $_SESSION["idc"],
                       "idv" => $_POST["idv"],
                       "numplace" => $_POST["numplace"],
                       "dates" => $_POST["dates"]

                   );
                   $result = Reservation::add($data);

                   if(isset($_POST["idvr"])){
                        
                    $np = $_POST["numplace"];
                    $data = array(
                          "idc" => $_SESSION["idc"],
                          "idv" => $_POST["idvr"],
                          "numplace" => $_POST["numplace"],
                          "dates" => $_POST["dates"]
                         


                    );
                    $result = Reservation::add($add);


                   }

               }

        }



          
        public function getUserReservations(){
            $data = array(
                    'idc' => $_SESSION['idc']
                );
            $reservation = Reservation::getByUser($data);
            return $reservation;
        }
           

        
        public function deleteReservation(){
            if(isset($_POST['id'])){
                $data['id'] = $_POST['id'];
                $result = Reservation::delete($data);
                if($result === 'ok'){
                    Session::set('success','Reservation has been Deleted !!!');
                    Redirect::goto('reservations');
                }else{
                    echo $result;
                }
            }
        }










}



?>