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


function logoutAction()
{
    session_destroy();
    redirect("?mod=users&action=login");
}



function updateAction()
{
    global $fullname, $email, $num_phone, $error;
    $error = array();
    if (isset($_POST['btn-submit'])) {
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Họ tên không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }
        if (empty($_POST['email'])) {
            $error['email'] = "Email không được để trống";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        if (empty($_POST['num_phone'])) {
            $error['num_phone'] = "SĐT không được để trống";
        } else {
            $pattern = '/^\d{9,}/';
            if (!preg_match($pattern, $_POST['num_phone'])) {
                $error['num_phone'] = "SĐT không đúng định dạng";
            } else {
                $num_phone = $_POST['num_phone'];
            }
        }
        if (empty($_POST['address'])) {
            $error['address'] = "address không được để trống";
        } else {
            $address = $_POST['address'];
        }
        if (empty($error)) {
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'num_phone' => $num_phone,
                'address' => $address,
            );
            update_info_user($data, $_SESSION['user_login']);
        }
    }
    $info_user = get_info_user_by_username(user_login());
    $data['info_user'] = $info_user;
    load_view('update', $data);
}

function resetPassAction(){
    load_view('resetPass');
}
