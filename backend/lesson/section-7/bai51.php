<?php
$arr1 = array(2, 3, 5, 7, 11, 13)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    if(!empty($arr1)){
?>

    <table border="1">
        <thead>
            <tr>
                <td>stt</td>
                <td>số nguyên tố</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 1;
            foreach ($arr1 as $item) {
            ?>

                <tr>
                    <td> <?php echo $stt++ ?></td>
                    <td> <?php echo $item ?> </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    }
    ?>
</body>

</html>