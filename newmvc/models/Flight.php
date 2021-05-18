<?php  


class Flight{

    static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM flights ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
    
  
    static public function Search($data){
        $depart = $data['depart'];
        $destination = $data['destination'];
        $query = 'SELECT * FROM flights where depart=:depart AND destination=:destination' ;
    
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":depart" => $depart,
    
                ":destination" => $destination,
            
            
            ));
                $flight = $stmt->fetchAll();;
                return $flight;
    
    
    
        }


        static public function update($data){
            $idv = $data['idf'];
                $stmt = DB::connect()->prepare('UPDATE flights SET depart=:depart, destination=:destination, price=:price, nbplace=:nbplace, dates=:dates WHERE idf=:idf');
                $stmt->bindParam(':idf',$data['idf']);
                $stmt->bindParam(':depart',$data['depart']);
                
                $stmt->bindParam(':destination',$data['destination']);
                $stmt->bindParam(':price',$data['price']);
                $stmt->bindParam(':nbplace',$data['nbplace']);
                $stmt->bindParam(':dates',$data['dates']);

                    
                if($stmt->execute()){
                    return 'ok';
                }else{
                    return 'error';
                }
                $stmt->close();
                $stmt = null;
                
            
            }


            static public function add($data){
                $stmt = DB::connect()->prepare('INSERT INTO flight (depart, destination, price, nbplace, dates)
                    VALUES (:depart,:destination,:price,:nbplace, :dates)');
                
                $stmt->bindParam(':depart',$data['depart']);
                
                $stmt->bindParam(':destination',$data['destination']);
                $stmt->bindParam(':price',$data['price']);
                $stmt->bindParam(':nbplace',$data['nbplace']);
                $stmt->bindParam(':dates',$data['dates']);
        
                if($stmt->execute()){
                    return 'ok';
                }else{
                    return 'error';
                }
                $stmt->close();
                $stmt = null;
            }
        


            static public function getFlight($data){
                $idf = $data['idf'];
                try{
                    $query = 'SELECT * FROM flights WHERE idf=:idf';
                    $stmt = DB::connect()->prepare($query);
                    $stmt->execute(array(":idf" => $idf));
                    $flight = $stmt->fetchAll();
                    return $flight;
                }catch(PDOException $ex){
                    echo 'erreur' . $ex->getMessage();
                }
            }



            static public function delete($data){
                $idf = $data['idf'];
                try{
                    $query = 'DELETE FROM flights WHERE idf=:idf';
                    $stmt = DB::connect()->prepare($query);
                    $stmt->execute(array(":idf" => $idf));
                    if($stmt->execute()){
                        return 'ok';
                    }
                }catch(PDOException $ex){
                    echo 'erreur' . $ex->getMessage();
                }
            }




}



?>