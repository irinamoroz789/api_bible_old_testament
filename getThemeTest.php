<?php
/*    if(isset($_GET['id'])){
        echo file_get_contents("../resources/tests/".$_GET['id']."/test.json");
    }*/

include "mysql.php";
if(isset($_GET['id'])) {
    $res = $conn->query("SELECT * FROM tests WHERE id=" . $_GET['id'] . " ");
    $result = [];
    while ($test = $res->fetch_assoc()) {

        array_push($result, ' "id" : ' . $test ['id'] . ', "title": "' . $test['title'] . '" ');

    }

    $res1 = $conn->query("SELECT * FROM questions WHERE id_test=" . $_GET['id'] . " ");
    $result1 = [];
//    echo "question";
    while ($question = $res1->fetch_assoc()) {
        $question['response_options'] = json_decode($question['response_options'], TRUE);
        $question['comment'] = explode("\r\n", $question['comment']);
//        print_r($question['response_options']);
        array_push($result1, json_encode($question));

//        array_push($result, ' {"question" : ' . $question['question'] . ', "title": "' . $test['title'] . '" } ');

    }

   $res = implode(",", $result);
    echo "{"."$res,".'"questions":'."[".implode(", ", $result1)."]"."}";


}
//$string = ['line1', 'line2', 'line3'];
//echo "[".implode(", ", $string)."]";
