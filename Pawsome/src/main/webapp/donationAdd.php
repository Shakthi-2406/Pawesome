<?php
    include('database_connection.php');
    if(isset($_COOKIE["uname"]) && $_COOKIE['uname'] != 'no'){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $date = new DateTime();


            $uname = $_COOKIE["uname"];
            $amount = $_POST['amount'];
            $card_number = $_POST['card_number'];
            $description = $_POST['description'];
            $time = $date->format('g a jS M, Y');

            $query = "INSERT INTO donations(uname,amount,description,time,card_number) 
            values('$uname',$amount,'$description','$time','$card_number')";

            $statement = $connect->prepare($query);
            $statement->execute();

            $query = "UPDATE ADMIN SET amount = amount+$amount WHERE 1=1";
            $statement = $connect->prepare($query);
            $statement->execute();
            
            header("location: http://localhost:8081/Pawsome/donation");
          }
    }
    else
        header("location: ./noAccess.php");

?>


<!-- 
img/pets/1680624050-5927.png -->