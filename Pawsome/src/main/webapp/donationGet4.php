<?php
    $delays = array(1,3,5,7);
    $i = 0;
    include('database_connection.php');
    $query = "SELECT * FROM donations ORDER BY amount DESC LIMIT 4";
    
    $statement = $connect->prepare($query);

    $num = 1;
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
                        <h6 class="fw-bold mb-0 p-2 alert-success">Rank '.$num.'</h6><hr>
                        <div class="w-100 h-100 d-flex align-items-center mb-20 justify-content-center">
                            <i class="fa fa-dollar-sign fa-2x text-primary"> '.$row["amount"].'</i>
                        </div>
                        <small>on '.$row["time"].'</small>
                        <h5 class="fw-bold mb-0">'.$row["uname"].'</h5><br>
                        <p class="text-muted">'.$row["description"].'<p>
                    </div>
                </div>
            </div> ';

            $i++;
            $num++;
            if($i >= 4) $i=0;
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