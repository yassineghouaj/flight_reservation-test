<?php

    class Reservation{

    /*
        static public function getAll(){
                
             $stmt = DB::connect()->prepare('SELECT * from reservation');
             $stmt->execute();
             return $stmt->fetchAll();
             $stmt->close();
             $stmt=null;

        }*/

        static public function add($data){
            $stmt = DB::connect()->prepare('INSERT into reservation(idc, idv, numplace, dates) VALUES(:idc, :idv, :numplace, :detes)');
            $stmt->bindParam(":idc", $data['idc']);
            $stmt->bindParam(":idv", $data['idv']);
            $stmt->bindParam(":numplace", $data['numplace']);
            $stmt->bindParam(":dates", $data['dates']);


            $stmt->execute();
        }
        





        static public function delete($data){
             
            $id = $data['id'];

            try{
                
                $query = "DELETE from reservation WHERE id = :id";
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":id" => $id));
                if($stmt->execte()){
                    return 'ok';
                }



            }catch(PDOException $ex){
                echo 'error'. $ex->getMessage();
            }

        }


    }


?>