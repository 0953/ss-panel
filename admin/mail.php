<?php
require_once '_main.php';
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                发送邮件
                <small>Send Email</small>
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
                        <h3 class="box-title">发送邮件</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="_mail.php">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="cate_title">from:</label>
                                <input  class="form-control" name="from" placeholder="from@example.com">
                            </div>

                            <div class="form-group">
                                <label for="cate_title">to:</label>
                                <input  class="form-control" name="to" placeholder="to@example.com">
                            </div>

                            <div class="form-group">
                                <label for="cate_method">subject:</label>
                                <input  class="form-control" name="subject" placeholder="填写邮件主题">
                            </div>

                            <div class="form-group">
                                <label for="cate_title">content:</label>
                                <input  class="form-control" name="content" placeholder="填写邮件内容">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="action" value="add" class="btn btn-primary">发送</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
