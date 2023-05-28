<?php
    include "mysql.php";
    $res = $conn->query("SELECT * FROM tests");
    $result = [];
    while($test = $res->fetch_assoc()) {

        array_push($result, ' {"id" : '.$test ['id'].', "title": "'.$test['title'].'" } ' );

    }
    $res = implode(",", $result);
    echo "[$res]";