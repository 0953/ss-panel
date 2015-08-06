<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                支付成功
                <small>Pay Successed</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">

                    <?php
                    if($_GET['out_trade_no'] != null)
                    {
                      $orderinfo = new \Ss\Product\OrderInfo($_GET['out_trade_no']);
                      $orders = $orderinfo->GetOrder();
                      foreach($orders as $o){ ?>
                          <div class="box box-primary">
                              <div class="box-body">
                                  <form action="_pay.php" method="post" name="from_pay" target="_blank">
                                      <?php $p = new \Ss\Product\ProductInfo($o['p_id']); ?>
                                      <p>订单编号：<input type="text" name="o_id" value="<?php echo $o['id'] ?>" style="border:none;" readonly="true"></p>
                                      <p>套餐名称：<input type="text" name="o_name" value="<?php echo $p->Name() ?>" style="border:none;" readonly="true"></p>
                                      <p>价格：<input type="text" name="o_price" value="<?php echo $o['p_price'] ?>￥" style="border:none;" readonly="true"></p>
                                      <p>说明：<input type="text" name="o_description" value="<?php echo $p->Description() ?>" style="border:none;" readonly="true"></p>
                                      <p>数量：<input type="text" name="o_number" value="<?php echo $o['p_number'] ?>" style="border:none;" readonly="true"></p>
                                      <p>总价：<input type="text" name="o_total" value="<?php echo $o['total'] ?>￥" style="border:none;" readonly="true"></p>
                                  </form>
                              </div><!-- /.box -->
                          </div>
                    <?php } }?>
                </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#pay").click(function(){
            $.ajax({
                type:"POST",
                url:"_pay.php",
                dataType:"json",
                data:{
                    pwd: $("#pwd").val()
                },
                success:function(data){
                    alert("okddsdsd");
                    if(data.ok){
                        // $("#msg-success").show();
                        // $("#msg-success-p").html(data.msg);
                    }else{
                        // $("#msg-error").show();
                        // $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                }
            })
        })
    })
</script>