<?php
    include "mysql.php";
    $res = $conn->query("SELECT * FROM themes");
    $result = [];
    while($theme = $res->fetch_assoc()) {

        array_push($result, ' {"id" : '.$theme ['id'].', "title": "'.$theme['title'].'", "image": "'.$theme['image'].'" } ' );

    }
    $res = implode(",", $result);
    echo "[$res]";

