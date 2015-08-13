<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-65c7a93029cc03fb0edef009ac4f0df1');
$domain = "kytong.net";

$from 		= $_POST['from'];
$to 		= $_POST['to'];
$subject 	= $_POST['subject'];
$content 	= $_POST['content'];

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => $from,
    'to'      => $to,
    'subject' => $subject,
    'text'    => $content
));

echo ' <script>alert("发送成功!")</script> ';
echo " <script>window.location='mail.php';</script> " ;