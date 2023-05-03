<?php
    include('database_connection.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $review = $_POST['review'];
        $uname = "Anonymous User";
        $date   = new DateTime();
        $resultdate = $date->format('g a jS M, Y');
        echo $resultdate;

        if(isset($_COOKIE["uname"]) && $_COOKIE['uname'] != 'no')
            $uname = $_COOKIE["uname"];

        $query = "INSERT INTO reviews(uname,day,review) values('$uname','$resultdate','$review')";
        $statement = $connect->prepare($query);
        $statement->execute();

        header("location: ./testimonial.php");
      }
?>