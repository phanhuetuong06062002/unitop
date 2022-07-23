<?php
function construct()
{
    load_model('index');
    load('lib', 'validation');
    load('lib', 'email');
}
function indexAction()
{
}

function regAction()
{
    global $error, $username, $password, $email, $fullname;
    if (isset($_POST['btn_reg'])) {
        //Phất cờ
        $error = array(); // Chưa có lỗi
        // Kiểm tra lỗi fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Bạn cần nhập fullname";
        } else {
            if (!is_fullname($_POST['fullname'])) {
                $error['fullname'] = "Fullname không đúng định dạng";
            } else {
                $fullname = $_POST['fullname'];
            }
        }
        // Kiểm tra lỗi username
        if (empty($_POST['username'])) {
            $error['username'] = "Bạn cần nhập username";
        } else {
            // Kiểm tra định dạng username
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        // Kiểm tra lỗi password
        if (empty($_POST['password'])) {
            $error['password'] = "Bạn cần nhập password";
        } else {
            // Kiểm tra định dạng password
            if (!is_password($_POST['password'])) {
                $error['password'] = "Password không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        // Kiểm tra lỗi email
        if (empty($_POST['email'])) {
            $error['email'] = "Bạn cần nhập email";
        } else {
            // Kiểm tra định dạng email
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        //Kết luận
        if (empty($error)) {
            if (!user_exists($username, $email)) {
                $active_token = md5($username . time());
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'active_token' => $active_token,
                );
                add_users($data);
                $link_active = base_url("?mod=users&action=active_user&active_token={$active_token}");
                $content = "
                <p>Chào bạn $fullname</p>;
                <p>Bạn vui lòng kích hoạt vào <a href={$link_active}> Kích hoạt </a>để xác thực tài khoản</p>";
                send_mail($email, 'Phan Truong', 'Kích hoạt tài khoản Unitop', $content);
            } else {
                $error['account'] = "Tên đăng nhập hoặc email đã tồn tại";
            }
        }
    }

    load_view('reg');
}

function loginAction()
{
    global $username, $password, $error;
    if (isset($_POST['btn_login'])) {
        // Kiểm tra lỗi username
        if (empty($_POST['username'])) {
            $error['username'] = "Bạn cần nhập username";
        } else {
            // Kiểm tra định dạng username
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        // Kiểm tra lỗi password
        if (empty($_POST['password'])) {
            $error['password'] = "Bạn cần nhập password";
        } else {
            // Kiểm tra định dạng password
            if (!is_password($_POST['password'])) {
                $error['password'] = "Password không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        if (empty($error)) {
            if (check_user($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                redirect();
            } else {
                $error['account'] = "Tài khoản hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}
function active_userAction()
{
    $active_token = $_GET['active_token'];
    if (check_token($active_token)) {
        active_user($active_token);
        delete_user_not_active();
        echo "Bạn đã kích hoạt thành công";
    } else {
        echo "Kích hoạt thất bại hoặc tài khoản đã được kích hoạt";
    }
}

function logoutAction()
{
    session_destroy();
    redirect("?mod=users&action=login");
}

function resetPassAction()
{
    global $error, $email,$password, $content, $link_reset_pass;
    // Kiểm tra lỗi email
    if (!empty($_GET['reset_pass_token']))
        $reset_pass_token = $_GET['reset_pass_token'];
    if (!empty($reset_pass_token)) {
        if (isset($_POST['btn_update_new_pass'])) {
            // Kiểm tra lỗi password
            if (empty($_POST['password'])) {
                $error['password'] = "Bạn cần nhập password";
            } else {
                // Kiểm tra định dạng password
                if (!is_password($_POST['password'])) {
                    $error['password'] = "Password không đúng định dạng";
                } else {
                    $password = md5($_POST['password']);
                }
            }
            if(empty($error)){
                $data = array(
                    'password' => $password,
                );
                update_pass_new($data,$reset_pass_token);
                redirect("?mod=users&action=updatePassOk");
            }
        }
        load_view('passNew');
    } else {
        if (isset($_POST['btn_reset_value'])) {
            if (empty($_POST['email'])) {
                $error['email'] = "Bạn cần nhập email";
            } else {
                // Kiểm tra định dạng email
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Email không đúng định dạng";
                } else {
                    $email = $_POST['email'];
                }
            }
            if (empty($error)) {
                if (check_email($email)) {
                    $reset_pass_token = md5($email . time());
                    $link_reset_pass = base_url("?mod=users&action=resetPass&reset_pass_token=$reset_pass_token");
                    $data = array(
                        'reset_pass_token' => $reset_pass_token,
                    );
                    update_reset_pass_token($data, $email);
                    $content = "<p>Bạn vui lòng kích hoạt:<a href=\"{$link_reset_pass}\">Vào đây</a> để lấy lại mật khẩu</p>";
                    send_mail($email, "", "Thiết lập mật khẩu mới", $content);
                } else {
                    $error['account'] = "email không hợp lệ";
                }
            }
        }
        load_view('resetPass');
    }
}

function updatePassOkAction(){
    load_view('updatePassOk');
}