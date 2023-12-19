<?php
include "../../user.php";

if (isset($_GET['name'])) {
    $searchValue = $_GET['name'];
    try {
        user::searchByName($searchValue);
        http_response_code(200);
    } catch (\Throwable $th) {
        http_response_code(500);
    }   
} else {
    http_response_code(400);
}
?>