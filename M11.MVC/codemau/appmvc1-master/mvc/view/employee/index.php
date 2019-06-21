<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">

            <h1>DANH SÁCH NHÂN VIÊN</h1>

            <div style="margin: 30px 0">
                <a href="index.php?controller=employee&action=create" class="btn btn-success">thêm mới nhân viên</a>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>

                <?php
                /**
                 * mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
                 * được sử dụng để đếm số bản ghi trả về của câu SQL
                 */
                if (mysqli_num_rows($result) > 0) {
                    /**
                     * mysqli_fetch_assoc() truyền vào biến của mysqli_query()
                     * nó dùng để lấy ra từng bản ghi trả về của câu SQL
                     * $row sẽ là 1 bản ghi trong bảng
                     * vòng lặp while sẽ chạy cho đến khi hết các bản ghi trong bảng trả về từ câu SQL
                     */
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['salary'] ?></td>
                            <td>
                                <div>
                                    <a class="btn btn-warning" href="index.php?controller=employee&action=edit&id=<?php echo $row['id'] ?>">Sửa nhân viên</a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="index.php?controller=employee&action=delete&id=<?php echo $row['id'] ?>">Xoá nhân viên</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<br> Không có bản ghi nào trong CSDL";
                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>