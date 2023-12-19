<?php
include "../../user.php";

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    try {
        user::delete($user_id);
        http_response_code(200);
    } catch (\Throwable $th) {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}
?>