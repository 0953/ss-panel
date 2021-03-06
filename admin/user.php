<?php
require_once '_main.php';
$Users = new Ss\User\User();
$node_id = $_GET['node'];
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>User Manage</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-1">
                            <a class="btn btn-success btn-sm" href="user_add.php">添加</a>
                        </div>
                        <div class="col-xs-3">
                            <select class="form-control" id="node" onchange="onNodeChanged()" >
                              <?php 
                              $nodes = (new Ss\Node\Node())->AllNode();
                              foreach($nodes as $node) { ?>
                              <option value="<?php echo $node['id']; ?>" <?php if($node['id'] == $node_id){echo ' selected="selected"';} ?>><?php echo $node['node_name'] ?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>邮箱</th>
                                    <th>端口</th>
                                    <th>总流量</th>
                                    <th>剩余流量</th>
                                    <th>已使用流量</th>
                                    <th>最后签到</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $us = $Users->AllNodeUser($node_id);
                                foreach ( $us as $rs ){ ?>
                                    <tr>
                                        <td>#<?php echo $rs['uid']; ?></td>
                                        <td><?php echo $rs['user_name']; ?></td>
                                        <td><?php echo $rs['email']; ?></td>
                                        <td><?php echo $rs['port']; ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow($rs['transfer_enable']); ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow(($rs['transfer_enable']-$rs['u']-$rs['d'])); ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow(($rs['u']+$rs['d'])); ?></td>
                                        <td><?php echo date('Y-m-d H:i:s',$rs['last_check_in_time']); ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="user_edit.php?uid=<?php echo $rs['uid']; ?>">查看</a>
                                            <a class="btn btn-danger btn-sm" href="user_del.php?uid=<?php echo $rs['uid']; ?>" onclick="JavaScript:return confirm('确定删除吗？')">删除</a>
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

<script type="text/javascript">
    $("#node").val(18);
    function onNodeChanged(){
        window.location.href='user.php?node='+$("#node").val();
    }
</script>

<?php
require_once '_footer.php'; ?>
