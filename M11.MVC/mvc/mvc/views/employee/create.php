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
            <h1>Tạo nhân viên mới</h1>
            <form name="create" action="index.php?controller=employee&action=create" method="post">
                <div class="form-group">
                    <label>Tên nhân viên:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhân viên:</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $address ?>">
                </div>
                <div class="form-group">
                    <label>Lương nhân viên:</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary ?>">
                </div>

                <button type="submit" class="btn btn-primary">tạo nhân viên</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>