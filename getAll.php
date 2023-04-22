<?php
    include "mysql.php";
    $res = $conn->query("SELECT * FROM themes");
    $result = [];
    while($theme = $res->fetch_assoc()) {

        array_push($result, ' {"id" : '.$theme ['id'].', "title": "'.$theme['title'].'", "image": "'.$theme['image'].'" } ' );

    }
    $res = implode(",", $result);
    echo "[$res]";

//$dir = '../resources/themes';
//$files = scandir($dir);
//unset($files[0], $files[1]);
//$result = [];
//foreach ($files as $foulder) {
//    $temp = json_decode(file_get_contents("$dir/$foulder/text.json"));
//    array_push($result, ["id" => $temp->id, "title" => $temp->title, "image" => $temp->text[0]]);
//
//}
//echo json_encode($result);
