<?php if (!defined('THINK_PATH')) exit();?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>

    <head>
        <title>科创俱乐部</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/Sdorms/Public/Bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        
    <!-- Custom CSS -->
    <link href="/Sdorms/Public/Bootstrap/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/Sdorms/Public/Bootstrap/css/font-awesome.css" rel="stylesheet">
            <!-- Nav CSS -->
            <link href="/Sdorms/Public/Bootstrap/css/custom.css" rel="stylesheet">
            <!----webfonts--->
<!--
            <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
-->
            <!---//webfonts--->
        
    <!-- jQuery -->
    <script src="/Sdorms/Public/Bootstrap/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Sdorms/Public/Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.html" style="padding: 4px 6px 4px 5px"><img style="height: 100%" alt="科创俱乐部" src="/Sdorms/Public/logo_r2.png"></a>
            <!--<a class="navbar-brand" href="index.html">科创俱乐部</a>-->
        </div>
        <!-- ss -->

        <!-- /.navbar-header -->

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">1</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>消息</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <!--<li class="avatar">
                        <a href="#">
                            <img src="images/5.png" alt="">
                            <div>New message</div>
                            <small>1 minute ago</small>
                        </a>
                    </li>
                    <li class="avatar">
                        <a href="#">
                            <img src="images/pic1.png" alt="">
                            <div>New message</div>
                            <small>1 minute ago</small>
                        </a>
                    </li>-->
                    <li class="dropdown-menu-footer text-center">
                        <a href="#">所 有 消 息</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!--<i class="fa fa-comments-o"></i>-->
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-primary"><?php echo $_COOKIE['name']; ?></button>
                    </div>
                    <!--<span class="badge">4</span>-->
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header text-center">
                        <strong>账 户</strong>
                    </li>
                    <!--<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span
                            class="label label-info">42</span></a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span
                            class="label label-success">42</span></a></li>-->
                    <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> 任务 <span
                            class="label label-danger">2</span></a></li>
                    <li><a href="#"><i class="fa fa-comments"></i> 回复 <span class="label label-warning">0</span></a>
                    </li>
                    <li class="dropdown-menu-header text-center">
                        <strong> 设 置 </strong>
                    </li>
                    <li class="m_2"><a href="/Sdorms/index.php/Admin/User/profile/id/<?php echo $_COOKIE['id']; ?>"><i class="fa fa-user"></i> 我的主页</a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> 设置</a></li>
                    <!--<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span
                            class="label label-default">42</span></a></li>-->
                    <li class="m_2"><a href="#"><i class="fa fa-file"></i> 我的项目 <span
                            class="label label-primary">4</span></a></li>
                    <li class="divider"></li>

                    <li class="m_2"><a href="/Sdorms/index.php/Admin/Enter/logout"><i class="fa fa-lock"></i> 退 出 </a></li>
                </ul>
            </li>
        </ul>
        <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" value="Search..." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search...';}">
        </form>-->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <?php tag('cate'); ?>
                <!--<ul class="nav" id="side-menu">
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="grids.html">Grid System</a>
                            </li>
                        </ul>
                        &lt;!&ndash; /.nav-second-level &ndash;&gt;
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="graphs.html">Graphs</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                        </ul>
                        &lt;!&ndash; /.nav-second-level &ndash;&gt;
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="compose.html">Compose email</a>
                            </li>
                        </ul>
                        &lt;!&ndash; /.nav-second-level &ndash;&gt;
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="forms.html">Basic Forms</a>
                            </li>
                            <li>
                                <a href="validation.html">Validation</a>
                            </li>
                        </ul>
                        &lt;!&ndash; /.nav-second-level &ndash;&gt;
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="basic_tables.html">Basic Tables</a>
                            </li>
                        </ul>
                        &lt;!&ndash; /.nav-second-level &ndash;&gt;
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="media.html">Media</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                        </ul>
                        &lt;!&ndash; /.nav-second-level &ndash;&gt;
                    </li>
                </ul>-->
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="graphs" style="font-family: '微软雅黑', 'Helvetica Neue', Helvetica, Arial, sans-serif">
            
    <div class="xs">
        <h3>Forms</h3>
        <div class="grid_3 grid_5">
            <h3>Tabs</h3>
            <div class="but_list">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">模型列表</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">添加</a></li>
                        <!--<li role="presentation" class="dropdown">
                            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
                                <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                                <div class="panel-body no-padding">
                                    <table class="table table-striped">
                                        <thead>

                                        <tr class="warning">
                                            <th>id</th>
                                            <th>名称</th>
                                            <th>文档模型</th>
                                            <th>优先级</th>
                                            <th>状态</th>
                                            <th>视图</th>
                                            <th>链接</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($cate)): foreach($cate as $key=>$vo): ?><tr>
                                            <td><?php echo ($vo["id"]); ?></td>
                                            <td><?php echo ($vo["name"]); ?></td>
                                            <td><?php echo ($vo["model"]); ?></td>
                                            <td><?php echo ($vo["level"]); ?></td>
                                            <td><?php echo ($vo["status"]); ?></td>
                                            <td><?php echo ($vo["view_index"]); ?></td>
                                            <td><?php echo ($vo["uri"]); ?></td>
                                            <td class="hidden-xs">
                                                <a href="/Sdorms/index.php/Admin/Cate/editCate/id/<?php echo ($vo["id"]); ?>" target="_blank">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </a>
                                                <a class="excu" value=<?php echo ($vo["id"]); ?> name="delete">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr><?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                            <form  class="form-horizontal" id="form_add">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">名称<span class="font-red">*</span></label>
                                    <div class="col-md-6">
                                        <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
                                            <input name="name" id="name"  type="text" class="form-control1" value=<?php echo ($name); ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">图标<span class="font-red">*</span></label>
                                    <div class="col-md-6">
                                        <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
                                            <input name="icon" id="icon"  type="text" class="form-control1" value=<?php echo ($icon); ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">上级栏目<span class="font-red">*</span></label>
                                    <div class="col-md-4">
                                        <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-thumbs-o-up"></i>
									</span>
                                            <input name="pre_cate" id="pre_cate"  type="number" class="form-control1" value=<?php echo ($pre_cate); ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">上级栏目编号</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="model" class="col-sm-2 control-label">模型<span class="font-red">*</span></label>
                                    <div class="col-sm-8" id="model">
                                        <?php if(is_array($model)): $i = 0; $__LIST__ = $model;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="checkbox-inline"><label><input type="checkbox" name="model[]" value=<?php echo ($vo["id"]); ?> <?php echo ($vo["checked"]); ?>><?php echo ($vo["name"]); ?></label></div><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <!--<div class="checkbox-inline"><label><input type="checkbox" name="model[]" value=4>下载</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" name="model[]" value=3>新闻</label></div>-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">优先级</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-gear"></i>
									</span>
                                            <input name="level" id="level" type="text" class="form-control1"  value=<?php echo ($level); ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">数字0～250</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">状态</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-gear"></i>
									</span>
                                            <input name="status" id="status" type="text" class="form-control1"  value=<?php echo ($status); ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">数字0～250</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">链接</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-gear"></i>
									</span>
                                            <input name="uri" id="uri" type="text" class="form-control1"  value=<?php echo ($uri); ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">250</p>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value=<?php echo ($id); ?>>
                                <!--<div class="form-group has-success">
                                    <label class="col-md-2 control-label">Input Addon Success</label>
                                    <div class="col-md-8">
                                        <div class="input-group input-icon right">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                            <input id="email" class="form-control1" type="text" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">Email is valid!</p>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-md-2 control-label">Input Addon Error</label>
                                    <div class="col-md-8">
                                        <div class="input-group input-icon right">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-key"></i>
                                                        </span>
                                            <input type="password" class="form-control1" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">Error!</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Checkbox Addon</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon"><input type="checkbox"></div>
                                            <input type="text" class="form-control1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Checkbox Addon</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control1">
                                            <div class="input-group-addon"><input type="checkbox"></div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">Checkbox on right</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Radio Addon</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon"><input type="radio"></div>
                                            <input type="text" class="form-control1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Radio Addon</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control1">
                                            <div class="input-group-addon"><input type="radio"></div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">Radio on right</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Input Processing</label>
                                    <div class="col-md-8">
                                        <div class="input-icon right spinner">
                                            <i class="fa fa-fw fa-spin fa-spinner"></i>
                                            <input id="email" class="form-control1" type="text" placeholder="Processing...">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">Processing right</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Static Paragraph</label>
                                    <div class="col-md-8">
                                        <p class="form-control1 m-n">email@example.com</p>
                                    </div>
                                </div>
                                <div class="form-group mb-n">
                                    <label class="col-md-2 control-label">Readonly</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control1" placeholder="Readonly" readonly="">
                                    </div>
                                </div>-->

                            </form>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 ">
                                        <button class="btn-warning btn "  id="submit">保 存</button>
                                        <button class="btn-default btn " type="reset">重 置</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>

    </script>

    <script>
        $('#submit').click(function() {
            //alert('kk');
            //var name = $('#name').val();
            //var password = $('#password').val();
            var myForm = $('#form_add');
            $.ajax({
                url: '/Sdorms/index.php/Admin/Cate/addCate',
                type: 'post',//提交的方式
                dataType:'json',
                data: myForm.serialize(),
                success: function(data) {
                    //alert(9);
                    alert(data);
                    //这是成功返回的数据，写自己的逻辑
                }
            });
        });
        $('.excu').bind('click',function(){

            var status = $(this).attr('name'); //方法名
            //var ch = arguments[0] ? arguments[0] : {};
            var ch={};   //方法接受的参数

            if($(this).attr('value')){
                ch[0] = $(this).attr('value');
            }else {
                //ch={};
                var i=0;
                $('input:checkbox:checked').each(function(){
                    ch[i]=$(this).val(); //attr('id');
                    i++;
                });
            }

            //var jch = JSON.stringify(ch);

            //alert(jch);
            $.ajax({
                type:"POST",
                url:"/Sdorms/index.php/Admin/Cate/excu",
                data:{'status':status,'val':ch},//{'0':ch},
                success: function(data) {
                    alert(JSON.stringify(data));
                    location.reload();
                    //alert($.parseJSON(data));
                }
            });
        });
    </script>

            <div class="copy_layout">
                <p> 技术支持由 <a href="http://www.gearblade.com/" target="_blank">归锋科技</a>提供 </p>
            </div>
        </div>


    </div>

    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Metis Menu Plugin JavaScript -->



<script src="/Sdorms/Public/Bootstrap/js/metisMenu.min.js"></script>
<script src="/Sdorms/Public/Bootstrap/js/custom.js"></script>
</body>
</html>