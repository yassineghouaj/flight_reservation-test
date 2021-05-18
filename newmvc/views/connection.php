<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "brief5";
 


 if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){

    die("failed to connect!");
 }

 //////////res_info.php page//////////


