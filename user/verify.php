<?php
require_once '../lib/config.php';
$account = $_POST['account'];
$passwd = $_POST['passwd'];
$passwd = \Ss\User\Comm::SsPW($passwd);

$user = new \Ss\User\User();
$ret = $user->login_check($email, $passwd);

if($ret){
    $rs['code'] = '1';
    $rs['ok'] = '1';
    $rs['msg'] = "欢迎回来";
}else{
    $rs['code'] = '0';
    $rs['msg'] = "用户名或者密码错误";
}

echo json_encode($rs);
