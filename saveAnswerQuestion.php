<?php
    include "mysql.php";

    date_default_timezone_set("Europe/Moscow");
    $date = date("Y-m-d H:i:s");

    if(isset($_POST)) {
    //    echo $date;

        $result = $conn->query("SELECT count(*) FROM result_tests WHERE test_id ='{$_POST['id_test']}' AND  question_id = '{$_POST['id_question']}' AND  user_token = '{$_POST['token']}' ") or die();
        $res = $conn->query("SELECT FROM result_tests WHERE test_id ='{$_POST['id_test']}' AND  question_id = '{$_POST['id_question']}' AND  user_token = '{$_POST['token']}' ");

        $row = mysqli_fetch_row($result);
        if ($row[0] > 0) {
        $conn->query("UPDATE result_tests SET is_correct = '{$_POST["is_correct"]}', updated_at = '{$date}' WHERE test_id ='{$_POST['id_test']}' AND  question_id = '{$_POST['id_question']}' AND  user_token = '{$_POST['token']}' ");


        } else {
            $conn->query("INSERT INTO result_tests (test_id, question_id, user_token, is_correct, created_at, updated_at) VALUES ('{$_POST["id_test"]}', '{$_POST["id_question"]}', '{$_POST["token"]}', '{$_POST["is_correct"]}', '{$date}', '{$date}')  ");

        }
    }
