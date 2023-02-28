<?php

    // connect to database server
    include 'includes/connectdb.php';

    $search_request = $_GET['query'];

    if (empty($search_request)) {
        echo 'no fields entered';
    } else {
        echo $search_request;
    }
    


    






?>