<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
</head>
<body>

<div class="container mt-4">
    <h2>Quản lý người dùng</h2>
    <div style="width:350px;padding:10px">
<a href="productcrud.php" style="font-size:20px;font-weight:600;text-decoration:none;color:black" >Chuyển trang quản lý sản phẩm</a>

</div>
<div style="margin-bottom: 10px;">
        <input type="text" id="searchUserInput" name="name" placeholder="Nhập tên người dùng cần tìm">
        <button class="btn btn-primary" onclick="searchUser()" >Tìm kiếm</button>
    </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên người dùng</th>
                <th>Số điện thoại</th>
                <th>Gmail</th>  
                <th>Password</th>
                <th>Quyền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <?php 
                include "../../user.php";
                $users = user::getall();
                foreach ($users as $user) {
                    echo "<tr>
                            <td>
                            ".$user['id']."
                            </td>
                            <td>
                                <input value='".$user['name']."' />
                             </td>
                            <td >
                            <input value='".$user['sdt']."' />
                        </td>
                            <td>
                            <input value='".$user['gmail']."' />
                        </td>
                            <td>
                                <input value='".$user['password']."' />
                            </td>
                            <td>
                            <input value='".$user['isadmin'] ."' />
                            </td>
                            <td>
                                <button class='btn btn-primary btn-sm' onclick='updateUser(this)'>Sửa</button>
                                <button class='btn btn-danger btn-sm' onclick='deleteUser(this)'>Xóa</button>
                            </td>
                        </tr>";
                }
            ?>

            <tr id="newProductRow" style="display: none;">
                <td></td>
                <td><input placeholder="Nhập tên người dùng" /></td>
                <td><input placeholder="Nhập SĐT người dùng" /></td>
                <td><input placeholder="Nhập Gmail người dùng" /></td>
                <td><input placeholder="Nhập mật khẩu người dùng" /></td>
                <td><input placeholder="Nhập quyền tài khoản" /></td>
                <td>
                    <button class='btn btn-success btn-sm' onclick='saveNewUser(this)'>Lưu</button>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-success" onclick="showNewProductRow()">Thêm sản phẩm</button>
</div>


</body>
</html>
