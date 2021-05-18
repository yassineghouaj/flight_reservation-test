<?php 

class Redirect{

    static public function goto($page){
        header('location:' .$page);
    }
     
}


?>