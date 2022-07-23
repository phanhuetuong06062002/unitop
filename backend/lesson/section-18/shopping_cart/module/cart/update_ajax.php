<?php 
$id = $_POST['id'];
$qty = $_POST['qty'];
$item = get_product_by_id($id);
if(!empty($_SESSION['cart']['buy']) && array_key_exists($id,$_SESSION['cart']['buy'])){
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    $sub_total = $qty* $item['price'];
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
    update_info_cart();
    $total = get_total_cart();
    $result = array(
        'sub_total' => number_format($sub_total),
        'total' => number_format($total),
    );
    echo json_encode($result);
    
}
