<?php
    include "mysql.php";
    $res = $conn->query("SELECT * FROM app_version");
    $result = [];
    while($version = $res->fetch_assoc()) {

        array_push($result, ' {"id" : '.$version ['id'].', "version": "'.$version['version'].'", "created_at": "'.$version['created_at'].'" } ' );

    }
    $res = implode(",", $result);
    echo "[$res]";