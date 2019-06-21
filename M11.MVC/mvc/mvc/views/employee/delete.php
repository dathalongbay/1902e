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
            <h1>Xóa nhân viên</h1>
            <form name="delete" action="index.php?controller=employee&action=delete" method="post">
                <div class="form-group">

                    <input type="hidden" name="id" value="<?php echo (int) $_GET["id"]?>">
                </div>
                <button type="submit" class="btn btn-danger">xóa nhân viên</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>