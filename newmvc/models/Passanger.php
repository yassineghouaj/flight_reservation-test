<?php

    class Passanger {

         static public function add($data){

                $stmt = DB::connect()->prepare('INSERT INTO passengers(idp, nam, age, email, phone )VALUES (:idp, :nam, :age, :email, :phone)');
                $stmt->bindParam(':idp', $data['idp']);
                $stmt->bindParam(':nam', $data['nam']);
                $stmt->bindParam(':age', $data['age']);
                $stmt->bindParam('email', $data['email']);
                $stmt->bindParam('phone', $data['phone']);


                if($stmt->execute()){
                      return 'ok';
                }else{
                    return 'error';
                }
                
                $stmt->close();
                $stmt-> null;

         }

    }




?>