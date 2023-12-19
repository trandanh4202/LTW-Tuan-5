<?php
include "../../product.php";

if (isset($_GET['name']) && isset($_GET['price']) &&isset($_GET['description']) ) {
    $name = $_GET['name'];
    $price = $_GET['price'];
    $description = $_GET['description'];
    $img = $_GET['img'];
    try {
        $product = new product($name, $price,$img, $description); 
        $product->insert();
        http_response_code(200);
    } catch (\Throwable $th) {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}
?>