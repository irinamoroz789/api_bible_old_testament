<?php
    include "mysql.php";
    if(isset($_GET)) {
        $token = getallheaders()['token'];

        $res = $conn->query("SELECT * FROM result_tests WHERE test_id='{$_GET['id_test']}' AND user_token='{$token}' ");
        //AND user_token='{$_GET['token']}'
        $result_test = [];
//        array_push($result_test, ' "test_id" : ' . $result ['test_id']  );
        while ($result = $res->fetch_assoc()) {

            array_push($result_test, '  {"question_id" : ' . $result ['question_id'] . ', "is_correct": "' . $result['is_correct'] . ', "created_at": "' . $result['created_at'] .', "updated_at": "' . $result['updated_at'] .'" }');

        }
        $res = implode(",", $result_test);
        echo "$res";
    }