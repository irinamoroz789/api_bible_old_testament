<?php
    include "mysql.php";
    if(isset($_GET)) {
        $token = getallheaders()['token'];
        $res = $conn->query("SELECT * FROM result_tests WHERE test_id='{$_GET['id_test']}' AND user_token='{$token}' ");
        $result_test = [];
        while ($result = $res->fetch_assoc()) {
            $res1 = $conn->query("SELECT COUNT(id) as numQuestions FROM questions WHERE id_test='{$_GET['id_test']}'");
            while ($r = $res1->fetch_assoc()) {
                $result['numQuestions'] = $r['numQuestions'];
            }
            array_push($result_test, $result);
        }
        echo json_encode($result_test);
    }