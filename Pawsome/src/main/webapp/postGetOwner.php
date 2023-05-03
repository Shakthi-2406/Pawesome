<?php

    $func = "document.getElementById('modalBox').style.display = 'none'";
    
    if(!isset($_COOKIE["uname"]) || $_COOKIE['uname'] == 'no'){
        echo '
        <center>
        <div class="col-lg-6 wow fadeInUp modalContent" data-wow-delay="0.2s">
            <div class="rounded shadow bg-white">
            <div id="closeBtn" onclick="'. $func .'">&times;</div>
                <div class="text-center p-4 mt-3">
                    <p class="alert-danger p-1">Please <strong>login / signup</strong> to view details!<p>
                </div>
            </div>
        </div>
        <center>
        ';
        return;
    }


    $petname = $_REQUEST["petname"];
    $time = $_REQUEST["time"];
    $uname = $_REQUEST["uname"];
    $type = $_REQUEST["type"];
    $emoji = "spa";

    if($type == "dog") $emoji = "dog";
    if($type == "cat") $emoji = "cat";

    include('database_connection.php');

    $query = "SELECT * FROM user WHERE uname='$uname'";

    $statement = $connect->prepare($query);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    echo '
    <center>
    <div class="col-lg-6 wow fadeInUp modalContent" data-wow-delay="0.2s">
        <div class="rounded shadow bg-white">
            <div id="closeBtn" onclick="'. $func .'">&times;</div>
            <div class="text-center p-4 mt-3">
                <br>
                <h5 class="fw-bold mb-0">Contact owner for buying</h5><br>
                <div class="w-100 h-100 d-flex align-items-center mb-20 justify-content-center">
                    <i class="fa fa-'. $emoji .' fa-2x text-primary"> '. $petname .'</i>
                </div>
                <br>
                <small>posted on '. $time .'</small>
                <h5 class="fw-bold mb-0">'. $uname .'</h5><br>
                <center>
                <table style="w-100 border-collapse: collapse;">
                <tr>
                      <td style="border: 1px solid black; padding: 5px 10px; background-color: lightgrey;">Name</td>
                      <td style="border: 1px solid black; padding: 10px;">'. $row["name"] .'</td>
                    </tr>
                    <tr>
                      <td style="border: 1px solid black; padding: 5px 10px; background-color: lightgrey;">Phone number</td>
                      <td style="border: 1px solid black; padding: 10px;">'. $row["phone"] .'</td>
                      </tr>
                      <tr>
                      <td style="border: 1px solid black; padding: 5px 10px; background-color: lightgrey;">Email-id</td>
                      <td style="border: 1px solid black; padding: 10px;">'. $row["email"] .'</td>
                      </tr>
                </table> 
                </center>
                <br>
                <p class="alert-success p-1">Talk politely and keep up our guidelines<p>
                <p class="alert-danger p-1">Remember to keep our guidelines while contacting the owner. If the user reports any misbehaviour, your <strong>account will be banned</strong> from our site!<p>
            </div>
        </div>
    </div>
    <center>
    ';
?>