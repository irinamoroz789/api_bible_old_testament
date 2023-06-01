<?php

include "mysql.php";
if(isset($_GET['id'])){
    $res = $conn->query("SELECT * FROM themes WHERE id=" . $_GET['id'] . " " );
    $result = [];
    while($theme = $res->fetch_assoc()) {

        array_push($result, ' {"id" : '.$theme ['id'].', "title": "'.$theme['title'].'", "text": [ "'.$theme['image'].'", '.$theme['text'].' ]} ' );

    }
    $res = implode(",", $result);
    echo "$res";
}
