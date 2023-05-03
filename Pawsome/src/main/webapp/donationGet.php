<?php
    $delays = array(1,3,5,7,7,5,3,1);
    $i = 0;
    include('database_connection.php');
    $query = "SELECT * FROM donations ORDER BY id DESC LIMIT 12";
    
    $statement = $connect->prepare($query);


    if($statement->execute())
    {
    	$result = $statement->fetchAll();
    	$output = '';
    	foreach($result as $row)
    	{
            $output .= '
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.'.$delays[$i].'s">
                <div class="rounded shadow">
                    <div class="text-center p-4 mt-3">
                        <div class="w-100 h-100 d-flex align-items-center mb-20 justify-content-center">
                            <i class="fa fa-dollar-sign fa-2x text-primary"> '.$row["amount"].'</i>
                        </div>
                        <br>
                        <small>on '.$row["time"].'</small>
                        <h5 class="fw-bold mb-0">'.$row["uname"].'</h5><br>
                        <p class="text-muted">'.$row["description"].'<p>
                    </div>
                </div>
            </div> ';

            $i++;
            if($i >= 8) $i=0;
        }
        echo $output;
    }
?>



<!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="rounded shadow">
            <div class="text-center p-4 mt-3">
                <div class="w-100 h-100 d-flex align-items-center mb-20 justify-content-center">
                    <i class="fa fa-dollar-sign fa-2x text-primary"> 2000</i>
                </div>
                <br>
                <small>on 24th Jan, 2023</small>
                <h5 class="fw-bold mb-0">doggy@1234</h5><br>
                <p class="text-muted">I can make a difference in their lives and show them the love and care they deserve.<p>
            </div>
        </div>
</div> -->