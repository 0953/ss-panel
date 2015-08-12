<?php
require_once '_main.php';

if(!empty($_POST)){
    $p_name         = $_POST['p_name'];
    $p_description  = $_POST['p_description'];
    $p_class        = $_POST['p_class'];
    $p_price        = $_POST['p_price'];
    $p_state        = 2;

    if($p_name == null || $p_name == ''){
        $a['msg'] = "产品名称不能为空";
    }else if($p_price == null || $p_price == ''){
        $a['msg'] = "产品价格不能为空";
    }else if(! preg_match("/^\d{0,8}\.{0,1}(\d{1,2})?$/", $p_price)){
        $a['msg'] = "产品价格无效";
    }else{
        $p = new \Ss\Product\Product();
        $p->Create($p_name, $p_description, $p_class, $p_price, $p_state);
        $a['ok'] = '1';
        $a['msg'] = "添加成功";
    }
    echo json_encode($a);

    if('1' == $a['ok']){
        echo ' <script>alert("添加成功!")</script> ';
        echo " <script>window.location='product.php';</script> " ;
    }else{
        echo " <script>alert('$a[msg]')</script> ";
    }
}

?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            产品添加
            <small>Add Product</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">添加产品</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="product_add.php">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="cate_title">产品名称</label>
                                <input  class="form-control" name="p_name" placeholder="填写产品名称">
                            </div>

                            <div class="form-group">
                                <label for="cate_title">产品描述</label>
                                <input  class="form-control" name="p_description" placeholder="填写产品描述，可不填">
                            </div>

                            <div class="form-group">
                                <label for="cate_method">产品类别</label>
                                <input  class="form-control" name="p_class" placeholder="填写产品类别，可不填">
                            </div>

                            <div class="form-group">
                                <label for="cate_title">产品单价</label>
                                <input  class="form-control" name="p_price" placeholder="填写单个产品价格">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="action" value="add" class="btn btn-primary">添加</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
