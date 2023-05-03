<?php
    include('database_connection.php');
    $query = "SELECT * FROM reviews ORDER BY id DESC LIMIT 6";
    $statement = $connect->prepare($query);
    if($statement->execute())
    {
        $result = $statement->fetchAll();
        $output = '';
        foreach($result as $row)
        {
            $output .= '
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p style="min-height:70px;">'.$row["review"].'</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">'.$row["uname"].'</h6>
                        <small>Given on '.$row["day"].'</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            '; 
        }     
        echo $output;
    }
?>




