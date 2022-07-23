<?php
function add_card($id)
{
    $item = get_product_by_id($id);
    $qty = 1;
    if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'code' => $item['code'],
        'product_thumb' => $item['product_thumb'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'url' => $item['url'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty,
    );
    update_info_cart();
}
function update_info_cart()
{
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
        $num_order += $item['qty'];
        $total += $item['sub_total'];
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total,
    );
}
function get_list_buy_cart()
{
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
            // $_SESSION['cart']['buy'][$item['id']] = $item;
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}
function get_num_order_cart()
{
    if (!empty($_SESSION['cart']['info']['num_order'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
}
function get_total_cart()
{
    if (!empty($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}
function delete_cart($id)
{
    if (($_SESSION['cart']['buy'])) {
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }else{
            unset($_SESSION['cart']);
        }
    }
}

function update_cart($qty){
    foreach($qty as $key => $value){
        $_SESSION['cart']['buy'][$key]['qty'] = $value;
        $_SESSION['cart']['buy'][$key]['sub_total'] = $value * $_SESSION['cart']['buy'][$key]['price']; 
    }
    update_info_cart();
}
