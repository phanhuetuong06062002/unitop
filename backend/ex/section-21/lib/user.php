<?
function show_array($data){
    if(!empty($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
function show_gender($gender)
{
    $list_gender = array(
        'female' => 'Nữ',
        'male' => 'Nam',
    );
    if (array_key_exists($gender, $list_gender)) {
        return $list_gender[$gender];
    }
}
function get_users($table,$start,$limit,$where=""){
    if(!empty($where)){
        $where = "WHERE $where";
    }
    $list_users = db_fetch_array("SELECT * FROM `$table` $where LIMIT {$start},{$limit} ");    
    return $list_users;
}
