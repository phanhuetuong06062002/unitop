<div id="content">
<?php
$sent_to_mail = 'truongphse161902@fpt.edu.vn';
$send_to_fullname = 'truong';
$subject = 'Test hàm send mail';
$content = 'This is the HTML message body <b>in bold!</b>';
send_mail($sent_to_mail, $send_to_fullname, $subject, $content);;
?>
    Trang chủ
</div>