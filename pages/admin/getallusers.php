<?php
include "../../user.php";

try {
    $users = user::getall();
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode($users);
} catch (\Throwable $th) {
    http_response_code(500);
}
?>
