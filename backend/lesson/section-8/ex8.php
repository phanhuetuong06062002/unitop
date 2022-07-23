<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

//1
function check_even($number)
{
    if (is_int($number) && $number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$number = 4;

if (check_even($number)) {
    echo "Đây là số nguyên chẵn";
} else {
    echo "Đây là số nguyên lẽ";
}

echo "<hr>";
//2

function check_prime($n)
{
    $count = 0;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $count++;
        }
    }
    if ($n == 2 || $count == 0) {
        return true;
    } else {
        return false;
    }
}
function total_prime($n)
{
    $list_prime = array();
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prime($i)) {
            $list_prime[] = $i;
        }
    }
    foreach ($list_prime as $value) {
        $t += $value;
    }
    show_array($list_prime);
    return $t;
};
echo "Tổng các số nguyên tố là:".total_prime(11);

//3 
echo "<hr>";
$list_post = array(
    1 => array(
        'post_title' => 'Tiêu đề bài viết 1',
        'post_content'=> 'Content bài viết 1',
        'post_desc' => 'Mô tả ngắn bài viết 1',
    ),
    2 => array(
        'post_title' => 'Tiêu đề bài viết 2',
        'post_content' => 'Content bài viết 2',
        'post_desc' => 'Mô tả ngắn bài viết 2',
    ),
    3 => array(
        'post_title' => 'Tiêu đề bài viết 3',
        'post_content' => 'Content bài viết 3',
        'post_desc' => 'Mô tả ngắn bài viết 3',
    ),
);

function get_product_by_id($id){
    $array_empty = array();
    global $list_post;
    if(array_key_exists($id,$list_post)){
        $array_empty[] = $list_post[$id];
    }
    return $array_empty;
}
$item =  get_product_by_id(2);
show_array($item);
