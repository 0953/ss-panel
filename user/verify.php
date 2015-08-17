<?php
require_once '../lib/config.php';
$account = $_POST['account'];
$passwd = $_POST['passwd'];
$passwd = \Ss\User\Comm::SsPW($passwd);

$user = new \Ss\User\User();
$rs = $user->verify($account, $passwd);

echo json_encode($rs, JSON_UNESCAPED_UNICODE);
