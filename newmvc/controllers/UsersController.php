<?php

include_once 'models/Users.php';

class UsersController{


    public function getAllUsers(){
        $users = User::getAll();
        return $users;
    }



    public function deleteUser(){
              if(isset($_POST['idc'])){
                  $data['idc'] = $_POST['idc'];
                  $result = User::delete($data);

                  if($result === "ok"){
                      Session::set('success', 'user has been deleted!!');
                      Redirect::goto('users');

                  }else{
                      echo $result;
                  }
              }

            }


    
    public function auth(){
        if (isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $data['psd'] = $_POST['psd'];
            $data['user_type']= $_POST['user_type'];
            $result = User::login($data);
            //if($result->email === $_POST['email'] && $result->psd === $_POST["psd"] && $_POST['user_type']=='passanger'){
                if($_POST['user_type']=='passanger'){
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $result->email;
                $_SESSION['fullname'] = $result->fullname;
                $_SESSION['idc'] = $result->idc;
                $_SESSION['user_type'] = 'passanger';

                Redirect::goto("home");
            }

            else if($_POST['user_type']== 'admin'){
                  
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $result->email;
                $_SESSION['fullname'] = $result-> fullname;
                $_SESSION['id'] = $result->id;
                $_SESSION['user_type'] = 'admin';

                Redirect::goto('dashboard');

            }else{
                Session::set('error', 'incorrect infos , try again!!');
                Redirect::goto('login');
            }
        }
    }
    
    public function register(){
        if(isset($_POST['submit'])){

            $data = array(
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'psd'=> $_POST['psd'],
                'phone' => $_POST['phone']
            );
            $result = User::createUser($data);
            if($result === 'ok'){
                Session::set('success', 'your count has been created!!');
                Redirect::goto('login');

            }else{

                echo $result;
            }
        }
    }

    static public function logout(){
		session_destroy();
	}

    public function updateUser(){
               if(isset($_POST['submit'])){

                $data = array(
                    "idc" => $_SESSION['idc'] ,
                    'fullname' => $_POST['fullname'],
                    'email' => $_POST['email'], 
                    'psd' => $_POST['psd'],
                    'phone' => $_POST['phone'],
                    
                );
                
                $result = User::update($data);
                if($result === 'ok'){
                    Session::set("modified with success!!");
                    Redirect::goto('home');
                }else{
                    echo $result;
                }

            }

    }

            public function getOneUser(){
                 
                 $data = array(
                      'idc' => $_SESSION['idc']
                 );
                 $user = User::getUser($data);
                 return $user;



                 
            }

    



    

}