<?php
    $conn = new mysqli('ivashevo.mysql', 'ivashevo_vkrmor', 'ASDJADbcds32sdfc', 'ivashevo_vkrmorozirina');
    $conn->query("SET NAMES 'utf8'");
    if($conn->connect_error){
        echo 'Error Number: '.$conn->connect_errno.'<br>';
        echo 'Error: '.$conn->connect_error;
    }