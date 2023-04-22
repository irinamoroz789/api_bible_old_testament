<?php
    include "mysql.php";
    if(isset($_GET['id'])) {
        $res = $conn->query("SELECT * FROM result_tests WHERE test_id=" . $_GET['test_id'] . " ");
        $result_test = [];
//        array_push($result_test, ' "test_id" : ' . $result ['test_id']  );
        while ($result = $res->fetch_assoc()) {

            array_push($result_test, '  {"question_id" : ' . $result ['question_id'] . ', "is_correct": "' . $result['is_correct'] . '" }');

        }
        $res = implode(",", $result_test);
        echo "$res";
    }