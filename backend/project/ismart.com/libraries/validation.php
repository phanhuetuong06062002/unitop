 <?php
    //@Hàm : is_username
    //@Tham số: $username cần kiểm tra
    //@Trả về: True nếu đúng định dạng username
    function is_username($username)
    {
        $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (preg_match($pattern, $username))
            return true;
    }
    //@Hàm : is_password
    //@Tham số: chuỗi password cần kiểm tra
    //@Trả về: True nếu đúng định dạng password
    function is_password($password)
    {
        $pattern = "/^([a-zA-z0-9!@#$%^&*()]){6,32}$/";
        if (preg_match($pattern, $password))
            return true;
    }
    //hàm is_fullname
    function is_fullname($fullname){
        $pattern = '/^([A-Za-z0-9 ]){6,32}$/';
        if (preg_match($pattern,$fullname))
            return true;
    }
    //Hàm :is_email
    function is_email($password)
    {
        $pattern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
        if (preg_match($pattern, $password))
            return true;
    }
    //Hàm :set_value()
    function set_value($label_field)
    {
        if (!empty($_POST[$label_field]))
            echo $_POST[$label_field];
    }
    //Hàm :form_error
    function form_error($label_field)
    {
        global $error;
        if (isset($error[$label_field])) {
            echo "<p class = 'error'>{$error[$label_field]}</p>";
        }
    }
