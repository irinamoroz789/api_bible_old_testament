<?php
//    $dir    = '../resources/tests';
//    $files = scandir($dir);
//    unset($files[0], $files[1]);
//    $result = [];
//    foreach ($files as $foulder) {
//        $temp = json_decode(file_get_contents("$dir/$foulder/test.json"));
//        array_push($result, ["id"=>$temp->id, "title"=>$temp->title]);
//    }
//    echo json_encode($result);

    include "mysql.php";
    $res = $conn->query("SELECT * FROM tests");
    $result = [];
    while($test = $res->fetch_assoc()) {

        array_push($result, ' {"id" : '.$test ['id'].', "title": "'.$test['title'].'" } ' );

    }
    $res = implode(",", $result);
    echo "[$res]";