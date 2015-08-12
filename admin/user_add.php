<?php
require_once '_main.php';

if(!empty($_POST)){
    $user_name_prefix   = $_POST['user_name_prefix'];
    $user_name          = $_POST['user_name'];
    $user_name_suffix   = $_POST['user_name_suffix'];
    $user_passwd        = $_POST['user_passwd'];
    $user_count         = $_POST['user_count'];

    if('' != $user_name){
        $user_count = 1;
    }

    for($i = 0; $i < $user_count; $i++){
        if('' == $user_name)
            $name = $user_name_prefix . rand(100000, 999999) . $user_name_suffix;
        else
            $name = $user_name_prefix . $user_name . $user_name_suffix;

        $c = new \Ss\User\UserCheck();
        if($c->IsUsernameUsed($name)){
            $a['msg'] = "检测到用户名已经被使用，已经成功注册了" . $i . "个用户";
            break;
        }else{
            // get value
            $ref_by = 0;
            $passwd = '' != $user_passwd ? $user_passwd : '12345678';
            $passwd = \Ss\User\Comm::SsPW($passwd);
            $plan = "A";
            $transfer = $a_transfer;
            $invite_num = rand($user_invite_min,$user_invite_max);
            //do reg
            $reg = new \Ss\User\Reg();
            $reg->Reg($name,$name,$passwd,$plan,$transfer,$invite_num,$ref_by);
            $a['ok'] = '1';
            $a['msg'] = "注册成功";
        }
        echo json_encode($a);
    }

    if('1' == $a['ok']){
        echo ' <script>alert("添加成功!")</script> ';
        echo " <script>window.location='user.php';</script> " ;
    }
}

?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户添加
            <small>Add User</small>
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
                        <h3 class="box-title">添加用户</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="user_add.php">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="cate_title">用户名前缀</label>
                                <input  class="form-control" name="user_name_prefix" placeholder="填写用户名前缀，不使用则不填">
                            </div>

                            <div class="form-group">
                                <label for="cate_title">用户名</label>
                                <input  class="form-control" name="user_name" placeholder="填写用户名，留空表示随机生成5位字符">
                            </div>

                            <div class="form-group">
                                <label for="cate_method">用户名后缀</label>
                                <input  class="form-control" name="user_name_suffix" placeholder="填写用户名后缀，不使用则不填">
                            </div>

                            <div class="form-group">
                                <label for="cate_title">用户密码</label>
                                <input  class="form-control" name="user_passwd" placeholder="填写用户密码，留空表示随机生成6位字符密码">
                            </div>

                            <div class="form-group">
                                <label for="cate_order">数量</label>
                                <input   class="form-control" name="user_count" placeholder="填写生成数量，用户名确定时，此值为1">
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
