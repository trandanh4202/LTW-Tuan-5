<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm</title>
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
</head>
<body>

<div class="container mt-4">
    <h2>Quản lý Sản phẩm</h2>
<div style="width:350px;padding:10px">
<a href="usercrud.php" style="font-size:20px;font-weight:600;text-decoration:none;color:black" >Chuyển trang quản lý người dùng</a>

</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đường dẫn</th>  
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../../product.php";
                $products = product::getall();
                foreach ($products as $product) {
                    echo "<tr>
                            <td>
                            ".$product['id']."
                            </td>
                            <td>
                                <input value='".$product['name']."' />
                                
                            </td>
                            <td >
                            <image src='".$product['img']."' style='width:100px; height:100px'/>
                        </td>
                            <td>
                            <input value='".$product['img']."' />
                        </td>
                            <td>
                                <input value='".$product['description']."' />
                            </td>
                            <td>
                            <input value='". number_format($product['price'], 0, ',', '.') ."' />
                            </td>
                            <td>
                                <button class='btn btn-primary btn-sm' onclick='updateProduct(this)'>Sửa</button>
                                <button class='btn btn-danger btn-sm' onclick='deleteProduct(this)'>Xóa</button>
                            </td>
                        </tr>";
                }
            ?>

            <tr id="newProductRow" style="display: none;">
                <td></td>
                <td><input placeholder="Nhập tên sản phẩm" /></td>
                <td></td>
                <td><input placeholder="Nhập Đường dẫn ảnh" /></td>
                <td><input placeholder="Nhập mô tả sản phẩm" /></td>
                <td><input placeholder="Nhập giá sản phẩm" /></td>
                <td>
                    <button class='btn btn-success btn-sm' onclick='saveNewProduct(this)'>Lưu</button>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-success" onclick="showNewProductRow()">Thêm sản phẩm</button>
</div>


</body>
</html>
