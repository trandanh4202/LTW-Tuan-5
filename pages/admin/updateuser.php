<?php
include "../../user.php";

if (isset($_GET['name']) && isset($_GET['sdt']) &&isset($_GET['gmail'])&&isset($_GET['password']) &&isset($_GET['isadmin'])&& isset($_GET['id']) ) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $sdt = $_GET['sdt'];
    $gmail = $_GET['gmail'];
    $password = $_GET['password'];
    $isadmin = $_GET['isadmin'];
    try {
        $user = new user($id,$name, $sdt,$gmail,$password, $isadmin); 
        $user->update();
        http_response_code(200);
    } catch (\Throwable $th) {
        http_response_code(500);
    }   
} else {
    http_response_code(400);
}
?>