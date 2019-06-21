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
            <h1>Xoá nhân viên </h1>

            <?php
            if (isset($errors) && is_array($errors) && !empty($errors)) {
                ?>
                <div class="alert alert-danger">
                    <?php echo implode("<br>", $errors) ?>
                </div>
                <?php
            }
            ?>

            <div>
                <form name="edit" action="" method="post">
                    <input type="hidden" name="id" value="<?php echo (int) $employee['id'] ?>">
                    <input type="hidden" name="action" value="delete">
                    <div class="form-group">
                        <label>Tên : <?php echo $employee["name"] ?></label>
                    </div>
                    <button type="submit" class="btn btn-danger">Xoá nhân viên</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>