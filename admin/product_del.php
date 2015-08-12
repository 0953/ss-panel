<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';
$id = $_GET['id'];

$p = new \Ss\Product\ProductInfo($id);
$p->DelMe();

//echo ' <script>alert("删除成功!")</script> ';
echo " <script>window.location='product.php';</script> " ;
