<?php
    $delays = array(1,3,6,6,1,3);
    $i = 0;
    include('database_connection.php');

    $query = "SELECT * FROM pets ORDER BY id DESC LIMIT 20";

    $statement = $connect->prepare($query);

    $uname = "";
    if(isset($_COOKIE["uname"]) && $_COOKIE['uname'] != 'no')
        $uname = $_COOKIE["uname"];

    if($statement->execute())
    {
    	$result = $statement->fetchAll();
    	$output = '';
    	foreach($result as $row)
    	{
    	    $output .= '
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.'.$delays[$i].'s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid my" style="width:100%; height:250px;" src="img/pets/'.$row["image"].'" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">'.$row["name"].'</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">'.$row["breed"].' - '.$row["type"].'</h5>
                            <div class="ps-2">
                                <h3 class="text-muted"><i class="fa fa-dollar-sign text-primary me-2"></i>'.$row["price"].'</h3>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-dog text-primary me-2"></i>'.$row["name"].'</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-clock text-primary me-2"></i>'.$row["years"].' years '.$row["months"].' months old</small>
                        </div>
                        <h6 class="mb-2"><small class="text-muted">by </small>'.$row["postedby"].'<small class="text-muted"> on '.$row["time"].'</small></h6>

                        <p class="text-body mb-3">'.$row["description"].'</p>';

            if($uname == $row["postedby"]){
                $output .='<div class="d-flex justify-content-between">
                    <p></p>
                    <a class="btn btn-sm btn-danger rounded py-2 px-4" href="postDelete.php?id='.$row["id"].'">Delete</a>
                </div>';
            }
            else{
                $output .='<div class="d-flex justify-content-between">
                    <p></p>
                    <a class="btn btn-sm btn-dark rounded py-2 px-4" petname="'.$row["name"].'" type="'.$row["type"].'" time="'.$row["time"].'" uname="'.$row["postedby"].'" onclick="getOwnerDetail(this)" >Get '.$row["name"].' Home</a>
                </div>';
            }
                    
            $output .= '</div>
                </div>
            </div>';

            $i++;
            if($i >= 6) $i=0;
        }
        echo $output;
    }
?>