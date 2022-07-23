<?php 
    class User{
        private $username;
        private $password;
        private $db_username = 'unitop';
        private $db_password = 'unitop!@#';
        public function setInfo($username,$password){
            $this->username = $username;
            $this->password = $password;
        }
        public function checkLogin(){
           if($this->db_username == $this->username && $this->db_password == $this->password){
               echo "Đăng nhập thành công";
           }else{
               echo "Đăng nhập thất bại";
           }
        }
    }
$a = new User;
$a->setInfo('unitop1','unitop!@#');
$a->checkLogin();
