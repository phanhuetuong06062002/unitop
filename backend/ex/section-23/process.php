<?
$price = $_POST['price'];
$num_order = $_POST['num_order'];
$total = $price * $num_order;
$result = array(
    'price' => $price,
    'num_order' => $num_order,
    'total' => $total,
);
echo json_encode($result);