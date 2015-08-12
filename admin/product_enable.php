<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';
$id = $_GET['id'];
$state = $_GET['state'];

$p = new \Ss\Product\ProductInfo($id);
$p->SetState($state==1 ? 2 : 1);

//echo " <script>alert('删除成功!')</script> ";
echo " <script>window.location='product.php';</script> " ;
