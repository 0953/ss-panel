<?php
require_once '_main.php';
$Users = new Ss\User\User();
$Product = new Ss\Product\Product();
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                产品管理
                <small>Product Manage</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <p> <a class="btn btn-success btn-sm" href="product_add.php">添加</a> </p>
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>产品编号</th>
                                    <th>产品名称</th>
                                    <th>单价</th>
                                    <th>类别</th>
                                    <th>产品描述</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $products = $Product->AllProduct();
                                foreach ( $products as $p ){ ?>
                                    <tr>
                                        <td>#<?php echo $p['id']; ?></td>
                                        <td><?php echo $p['name']; ?></td>
                                        <td><?php echo $p['price']; ?></td>
                                        <td><?php echo $p['class']; ?></td>
                                        <td><?php echo $p['description']; ?></td>
                                        <td><?php echo $p['state']==1?'关闭':'启用'; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="product_edit.php?id=<?php echo $p['id']; ?>">查看</a>
                                            <a class="btn btn btn-success btn-sm" href="product_enable.php?id=<?php echo $p['id']; ?>&state=<?php echo $p['state'] ?>"><?php echo $p['state']==1?'启用':'关闭'; ?></a>
                                            <a class="btn btn-danger btn-sm" href="product_del.php?id=<?php echo $p['id']; ?>" onclick="JavaScript:return confirm('确定删除吗？')">删除</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


<script>
    function switch_state(){
        alert('enable');
    }
</script>

<?php
require_once '_footer.php'; ?>
