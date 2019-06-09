<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
    // nạp file kết nối CSDL
    include_once "config.php";
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liệt kê danh sách nhân viên</h1>
                <h1>
                    <a href="create.php" class="btn btn-success">Thêm mới nhân viên</a>
                </h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Lương</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td>
                            <p><a href="edit.php" class="btn btn-warning">Sửa nhân viên</a> </p>
                            <p><a href="delete.php" class="btn btn-danger">Xóa nhân viên</a> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                        <td>mary@example.com</td>
                        <td>
                            <p><a href="edit.php" class="btn btn-warning">Sửa nhân viên</a> </p>
                            <p><a href="delete.php" class="btn btn-danger">Xóa nhân viên</a> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                        <td>july@example.com</td>
                        <td>
                            <p><a href="edit.php" class="btn btn-warning">Sửa nhân viên</a> </p>
                            <p><a href="delete.php" class="btn btn-danger">Xóa nhân viên</a> </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>