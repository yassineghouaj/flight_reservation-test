<?php

//include 'database/DB.php';

class User{
    
    static public function getAll(){

        $stmt = DB::connect()->prepare("SELECT * FROM users ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt->null;


    }
     

  
       static public function delete($data){
           $idc = $data['idc'];
           try{

                $query = 'DELETE FROM users WHERE idc = :idc';
                $stmt = DB::connect()->prepare($query);
                $stmt = execute(array(":idc"=> $idc));
                if($stmt->execute()){
                    return 'ok';
                }

           }catch(PDOException $ex){
               echo 'error' . $ex->getMessage();
           }

       }
        


       static public function login($data){
		$email = $data['email'];
		$user_type=$data['user_type'];
		
		if($user_type=='passanger')
					{
		
		try{
			$query = 'SELECT * FROM users WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'error' . $ex->getMessage();
		}
	}
	
	
	else if($user_type=='Admin')
					{
		
		try{
			$query = 'SELECT * FROM admins WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'error' . $ex->getMessage();
		}
	}
	}




    static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (fullname, email, psd, phone)
			VALUES (:fullname,:email,:psd ,:phone)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':psd',$data['psd']);
		$stmt->bindParam(':phone',$data['phone']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}


  
    static public function update($data){
        $idc = $data['idc'];
            $stmt = DB::connect()->prepare('UPDATE users SET fullname= :fullname, email=:email, psd=:psd, phone=:phone WHERE idc=:idc');
            $stmt->bindParam(':idc',$data['idc']);
            $stmt->bindParam(':fullname',$data['fullname']);
            
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':psd',$data['psd']);
            $stmt->bindParam(':phone',$data['phone']);
                
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
            
        
        }

          
        static public function getUser($data){
            $idc = $data['idc'];
            
                $query = 'SELECT * FROM users WHERE idc=:idc';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":idc" => $idc));
                $user = $stmt->fetchAll();
                return $user;
        
        }








}

?>