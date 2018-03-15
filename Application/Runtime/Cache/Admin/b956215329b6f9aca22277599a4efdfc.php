<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
<script src="https://cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>
<script type="text/javascript" src="../phplearning/Public/admin/js/layer-v3.1.0/layer/layer.js?v=32234"></script>
<script type="text/javascript" src="../phplearning/Public/admin/js/dalog.js?v=111"></script>
<body>

<div id="wrapper">

<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
<script src="https://cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>
<script type="text/javascript" src="../phplearning/Public/admin/js/layer-v3.1.0/layer/layer.js?v=32234"></script>


    <div id="page-wrapper">

    <div class="container-fluid" >

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/admin.php?c=menu">菜单管理</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i><?php echo ($nav); ?>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <form action="/admin.php" method="get">

                <div class="input-group">
                    <span class="input-group-addon">类型</span>
                    <select class="form-control" name="type">
                        <option value='' >请选择类型</option>

                        <option value="1" <?php if(): ?>selected=" selected"<?php endif; ?>>后台菜单</option>
                        <option value="0" <?php if(): ?>selected=" selected"<?php endif; ?>>前端导航</option>
                    </select>
                </div>

                <input type="hidden" name="c" value="menu"/>
                <input type="hidden" name="a" value="index"/>
                <span class="input-group-btn">
                  <button id="sub_data" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>

            </form>
        </div>
        <div>
          <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加 
          </button>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3></h3>
                <div class="table-responsive">
                    <form id="singcms-listorder">
                    <table class="table table-bordered table-hover singcms-table">
                        <thead>
                        <tr>
                            <!-- <th width="14">排序</th> -->
                            <th>id</th>
                            <th>菜单名</th>
                            <th>模块名</th>
                            <th>类型</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($menu["menu_id"]); ?></td>
                                <td><?php echo ($menu["name"]); ?></td>
                                <td><?php echo ($menu["m"]); ?></td>
                                <td><?php echo (getmenutype($menu["type"])); ?></td>
                                <td><?php echo (status($menu["status"])); ?></td>
                                
                                <td><span class="glyphicon glyphicon-edit" aria-hidden="true" id="singcms-edit" attr-id=""></span>    <a href="javascript:void(0)" attr-id="" id="singcms-delete"  attr-a="menu" attr-message="删除"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                    </form>
                    <nav>
                        <ul class="pagination"><?php echo ($pageRes); ?></ul>
                    </nav>
                    
                </div>
            </div>

        </div>
        <!-- /.row -->



    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!-- Morris Charts JavaScript -->
<script>

    var SCOPE = {
        'add_url' : 'http://localhost/web/phplearning/admin?c=menu&a=add',
        'edit_url' : 'http://localhost/web/phplearning/admin?c=menu&a=edit',
        'set_status_url' : 'http://localhost/web/phplearning/admin?c=menu&a=setStatus',
        'listorder_url' : 'http://localhost/web/phplearning/admin?c=menu&a=listorder',

    }
</script>
<script type="text/javascript" src="../phplearning/Public/admin/js/dalog.js?v=111"></script>
<script type="text/javascript" src="/web/phplearning/Public/admin/js/common.js?v=32234aeaa"></script>