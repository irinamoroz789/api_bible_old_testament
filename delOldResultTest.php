<?php
    include "mysql.php";

    if(isset($_GET)) {
        $token = getallheaders()['token'];
        $conn->query("DELETE FROM result_tests WHERE test_id = '{$_GET['id_test']}' AND  user_token='{$token}' ");
    }
