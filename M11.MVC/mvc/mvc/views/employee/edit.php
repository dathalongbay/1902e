<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên</h1>
            <form name="edit" action="index.php?controller=employee&action=edit" method="post">

                <input type="hidden" name="employee_id" value="<?php echo $row["id"] ?>">

                <div class="form-group">
                    <label>Tên nhân viên:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhân viên:</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $row["address"] ?>">
                </div>
                <div class="form-group">
                    <label>Lương nhân viên:</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $row["salary"] ?>">
                </div>

                <button type="submit" class="btn btn-warning">sửa nhân viên</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>