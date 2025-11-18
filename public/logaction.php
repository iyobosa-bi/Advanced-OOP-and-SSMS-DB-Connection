<?php



if(isset($_GET['submitBtn'])){

    // print_r($_GET);
    $userName =  $_GET['username']??"";

    if(empty($userName)){
        header('Location:index.php');
        exit();
    }

    echo "Welcome ". htmlspecialchars($userName);
    exit();
}






