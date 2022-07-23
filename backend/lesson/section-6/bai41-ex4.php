<?php
    //bài tập 1
    $n = 9;
    $total_even = 0;
    for($i = 1; $i <= $n; $i++){
        if($i % 2 == 0){
            $total_even += $i;
        }
    }
    echo "total even is: ".$total_even."<pre>";

    //bài tập 2
    $n = 8;
    $total_odd = 0;
    for($i = 3; $i <= $n; $i+=3){
          $total_odd += 1/$i;
    }
    echo $total_odd."<pre>";

    //bài tập 3
    $n = 1;
    $total_str = 0;
    for($i = 1; $i <= $n; $i++){
        $total_str += $i / ($i + 1);
    }
    echo $total_str."<pre>";

    //bài tập 4
    $a = 0;
    $b = 4;
    $c = 2;
   
if($a!=0){
    $dt = pow($b, 2) - 4 * $a * $c;
	if($dt < 0){
		echo "pt vô nghiệm";
	}else if( $dt == 0){
		$x = -$b/2*$a;
        echo "pt có nghiệm kép là:".$x;
	}else{
		$x1 = (-$b +sqrt($dt))/(2*$a);
		$x2 =(-$b -sqrt($dt))/(2*$a);
		echo "pt có 2 nghiệm phân biệt lần lượt là:".$x1."và".$x2;
	}
}else{
	echo "pt ko phải là phương trình bậc 2";
}


?>