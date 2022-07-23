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
        $fullname = 'Phan Huệ Trường';
        $username = 'yasuo';
        $email = 'bestyasuo@gmail.com';
    ?>
    <div>
        <p class="fullname">Họ và tên: <b><?php echo $fullname ?> </b></p>
        <p class="username">Username: <b><?php echo $username ?> </b></p>
        <p class="email">Email: <b><?php echo $email ?> </b></p>
    </div>
    <style>
        p{
            color:red;
        }
        b{
            color:black;
        }

    </style>
   
</body>
</html>