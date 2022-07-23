<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $name = "huệ trường";    
    $x = 5;
    $y = 10;
    function myTest(){
        global $x;
        echo "Giá trị của biến x là: {$x}"."<br>";
    };
    myTest();
    echo "Giá trị của biến x là: $x";
    function testGlobals(){
        echo "<br>Giá trị lần lượt của x,y là:".$GLOBALS['x']." và ".$GLOBALS['y'];
    }
    testGlobals();
    echo "<br>";
    function testStatic(){
        static $x=0;
        echo $x;
        $x++;
    }
    testStatic();
    echo "<br>";
    testStatic();
    echo "<br>";
    testStatic();
    echo "<br>";
    ?>
    <h1>xin chào <span><?php echo $name ?></span></h1>
    <style>
        h1 {
            color: red;
        }
        span{
            color: violet;
        }
    </style>
</body>

</html>