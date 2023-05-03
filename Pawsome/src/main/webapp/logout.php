<?php
    echo $_COOKIE['uname'];
    $_COOKIE['uname'] = 'XXX';
    if (isset($_COOKIE['uname'])){
        echo 'ooo';
    }
    echo $_COOKIE['uname'];
    session_destroy();
    echo $_COOKIE['uname'];

?>