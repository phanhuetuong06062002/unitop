<?php
require 'config.php';
class DB
{
    //connect
    public $conn;
    public function __construct()
    {
        $this->connection();
    }
    public function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Kết nối thất bại:" . $this->conn->connect_error);
        }
        // echo "Kết nối thành công";
    }
    //insert
    /*
        INSERT INTO `TABLE`(`column 1`,`column 2`,`column 3`)
        VALUES('value 1','value 2','value 3');
    */
    public function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_feild[] = "`{$k}`";
            $list_value[] = "'{$this->conn->escape_string($v)}'";
        }
        $list_feild = implode(",", $list_feild);
        $list_value = implode(",", $list_value);
        $sql = "INSERT INTO {$table} ($list_feild)" .
            "VALUES({$list_value})";
        //echo $sql;
        if ($this->query($sql) == TRUE) {
            return $this->conn->insert_id;
        }
        echo "<br>" . "Thêm dữ liệu thất bại" . $this->conn->error;
    }
    //Select 
    /*
    SELECT column1,column2,...
    FROM table
    WHERE ...
     */
    function get($feild = array(), $table, $where)
    {
        $feild = !empty($feild) ? implode(",", $feild) : "*";
        $where = !empty($where) ? "WHERE ${where}" : "";
        $sql = "SELECT $feild FROM ${table} ${where}";
        //echo $sql;
        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 0)
                return $data;
            return $data[0];
        } else {
            return false;
        }
    }
    /*
        UPDATE table_name
        SET `column_1` = value_1 , `column_2` = vaule_2,`column_3` = value_3 
        WHERE ...
    */
    function upDate($table, $data = array(), $where)
    {
        $data_insert = array();
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}` = '${v}'";
        }
        $data_insert = implode(",", $data_insert);
        $where = !empty($where) ? "WHERE {$where}" : " ";
        $sql = "UPDATE $table SET $data_insert $where";
        if ($this->query($sql)) {
            echo "Đã cập nhật thành công";
        } else {
            echo "Cập nhật thất bại" . $this->conn->error;
        }
    }
    //Delete
    //DELETE FROM table_name WHERE condition;
    function delete($table, $where)
    {
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "DELETE FROM $table $where";
        if ($this->query($sql)) {
            echo "Xóa dữ liệu thành công";
        } else {
            echo "Xóa dữ liệu thất bại";
        }
    }
}
$db = new DB;
// $data = array(
//     'username' => 'Võ Ngọc Hoàng',
//     'password' => md5('Ngọc Hoàng'),
// );

$db->delete('users', 'id_user=1');
