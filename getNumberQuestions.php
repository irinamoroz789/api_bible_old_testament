<?php
include "mysql.php";
if (isset($_GET)) {
    $res1 = $conn->query("SELECT COUNT(id) as numQuestions FROM questions WHERE id_test='{$_GET['id_test']}'");
    while ($r = $res1->fetch_assoc()) {
        echo $r['numQuestions'];
    }
}