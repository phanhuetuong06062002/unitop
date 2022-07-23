<?php
// $total_rows = 10;
// $num_per_page = 3;
// $num_page = 0;
// $num_page += $total_rows / $num_per_page;
// echo ceil($num_page); 


$number = array(2,5,6,3,4,-6,-9);
 $num_even = array();
foreach($number as $value){
    if($value > 0 && $value % 2 == 0){
        echo $value."<br>";
        $num_even[] = $value;
    }
}
echo "<pre>";
print_r( array_values($num_even));