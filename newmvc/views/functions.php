<?php
  

  function check_login($con){

     if (isset($_SESSION['user_id'])){

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1" ;

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

        }
     }
     
     header("location: login");
     die;
  }

 function random_num($length) {

    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for($i=0; $i <$len; $i++){

        $text = rand(0, 9);

    }
    
    return $text;
 }


/////////////////////////////////res_info.php//////////////////////////////////

/*
//$sql = "SELECT passanger_first_name, passanger_last_name, passanger_birthdate, ways, fly_from, fly_to, seats FROM passangers";
//$sql = "SELECT * from passangers where id = 14";
$sql = "SELECT * FROM `passangers` ORDER BY `id` ASC";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>firstname</th><th>lastName</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "</td><td>" . $row["passanger_first_name"]."</td><td>". $row["passanger_last_name"]. "";
    }
    echo "</table>";
} else {
    echo "0 results";
}


/*
passanger_first_name
passanger_last_name
passanger_birthdate
ways
fly_from
fly_to
seats
*/
