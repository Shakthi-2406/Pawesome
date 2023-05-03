<?php
    $id = $_REQUEST["id"];

    if(!isset($_COOKIE["uname"]) || $_COOKIE['uname'] != 'no')
        header("location: ./noAccess.php");

    include('database_connection.php');

    $query = "DELETE FROM pets WHERE id = ". $id;

    $statement = $connect->prepare($query);
    $statement->execute();
    header("location: ./room.php");
?>  

