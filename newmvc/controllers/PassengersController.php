<?php

class PassengersController{

       public function addPassenger(){

               if (isset($_POST['submit'])){

               $np=$_POST["np"];

              for($i=1; $i<= $np; $i++){
                  $data = array(
                     "idp" => $_SESSION["idc"],
                     "nam"=> $_SESSION["nam"],
                     "age"=>$_SESSION["age"]
                     "email" => $_SESSION["email"],
                     "phone"=>$_SESSION["phone"],

                  );

                  $result = Passenger::add($data);
                  if($result === "ok"){
                      Session::set("success", "Passanger has been added !!!");

                  }else{
                      echo $result;
                  }
              }


            }


       }


}


?>