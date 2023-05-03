<?php
    include('database_connection.php');
    if(isset($_COOKIE["uname"]) && $_COOKIE['uname'] != 'no'){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $target_dir = "C:/xampp/htdocs/Pawsome/src/main/webapp/img/pets/";
            $uploadOk = 1;
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $new_name = time()."_".rand(1000, 9999);
            $target_file = $target_dir . $new_name . "." . $imageFileType;
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              if($check == false) {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            }
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              }
            }
            $date = new DateTime();


            $name = $_POST['name'];
            $type = $_POST['type'];
            $breed = $_POST['breed'];
            $price = $_POST['price'];
            $years = $_POST['years'];
            $months = $_POST['months'];
            $description = $_POST['description'];
            $postedby = $_COOKIE["uname"];
            $time = $date->format('g a jS M, Y');
            $image = $new_name . "." . $imageFileType;

            $query = "INSERT INTO pets(name,type,breed,price,years,months,description,postedby,time,image) 
            values('$name','$type','$breed',$price,$years,$months,'$description','$postedby','$time','$image')";
            echo $query;

            $statement = $connect->prepare($query);
            $statement->execute();

            $query = "UPDATE ADMIN SET pets = pets+1 WHERE 1=1";
            $statement = $connect->prepare($query);
            $statement->execute();
            
            header("location: ./room.php");
          }
    }
    else
        header("location: ./noAccess.php");

?>


<!-- 
img/pets/1680624050-5927.png -->