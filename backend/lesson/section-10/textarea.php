<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ textarea</title>
</head>

<body>
    <h1>Nhận dữ liệu từ textarea</h1>
    <?php
    if (isset($_POST['btn_submit'])) {
        print_r($_POST['text']);
    }
    ?>
    <form action="" method="POST">
        <textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="btn_submit" value="Submit">
    </form>

</body>

</html>