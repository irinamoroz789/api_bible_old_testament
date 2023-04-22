<?php
    include "mysql.php";
    
    print_r($_POST);
//    if(isset($_POST)) {
//
//        $result = $conn->query("SELECT * FROM result_tests WHERE test_id = " .$_POST['id_test']. "  AND  question_id = " .$_POST['id_question']. " AND  user_token = " .$_POST['token']. " ");
//        if($result->num_rows == 0) {
//            $conn->query("UPDATE result_tests SET is_correct = " .$_POST['is_correct']. "  test_id = " .$_POST['id_test']. "  AND  question_id = " .$_POST['id_question']. " AND  user_token = " .$_POST['token']. " ");
//        } else {
//            $conn->query("INSERT INTO result_tests (test_id, question_id, user_token, is_correct) VALUES ('{$_POST["id_test"]}', '{$_POST["id_question"]}', '{$_POST["token"]}'), '{$_POST["is_correct"]}')");
//        }
//
//    }
