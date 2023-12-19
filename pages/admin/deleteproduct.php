<?php
include "../../product.php";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    try {
       product::delete($product_id);

        http_response_code(200);
    } catch (\Throwable $th) {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}
?>