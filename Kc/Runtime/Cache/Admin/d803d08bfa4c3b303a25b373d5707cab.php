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
        <ol class="breadcrumb">
            <li><a href="#">科创俱乐部</a></li>
            <li><a href="#"><?php echo ($cateName); ?></a></li>
            <li class="active"></li>
        </ol>

        <div class="bs-example4" data-example-id="contextual-table">
                <div class="mail-toolbar clearfix">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div><!-- Input Group -->
                    </form>
                    <div class="float-left">
                        <div class="btn btn_1 btn-default mrg5R">
                            <i class="fa fa-refresh"> </i>
                        </div>

                        <div class="dropdown">
                            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cog icon_8"></i>
                                <i class="fa fa-chevron-down icon_8"></i>
                                <div class="ripple-wrapper"></div></a>
                            <ul class="dropdown-menu float-right">
                                <li>
                                    <a href="#" title="" name="editor">
                                        <i class="fa fa-pencil-square-o icon_9"></i>
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="" name="">
                                        <i class="fa fa-calendar icon_9"></i>
                                        Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-download icon_9"></i>
                                        Download
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="" class="font-red excu" title="" name="delete_h">
                                        <i class="fa fa-times" icon_9=""></i>
                                        删除
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="clearfix"> </div>
                    </div>

                    <div class="float-right">


                        <span class="text-muted m-r-sm">Showing 20 of 346 </span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" onclick="location='/Sdorms/index.php/Admin/Article/addAtc/cate/<?php echo ($cate); ?>/mid/<?php echo ($model_list["0"]["id"]); ?>'">新增</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php if(is_array($model_list)): foreach($model_list as $key=>$vo): ?><li><a href="/Sdorms/index.php/Admin/Article/addAtc/cate/<?php echo ($cate); ?>/mid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>


                            </ul>
                        </div>
                        <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                            <div class="btn-group">
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#">Social</a></li>
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Updates</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Spam</a></li>
                                    <li><a href="#">Trash</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">New</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Family</a></li>
                                    <li><a href="#">Social</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Primary</a></li>
                                    <li><a href="#">Promotions</a></li>
                                    <li><a href="#">Forums</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                            <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                        </div>


                    </div>
                </div>
                <table class="table table-condensed">
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="unread checked">
                        <td class="hidden-xs">
                            <input type="checkbox" class="checkbox" value=<?php echo ($vo["id"]); ?>>
                        </td>
                        <td class="hidden-xs">
                            <i class="fa fa-star icon-state-warning"></i>
                        </td>
                        <td class="hidden-xs">
                            <?php echo ($vo["author"]); ?>
                        </td>
                        <td>
                            <a href="/Sdorms/index.php/Admin/Article/detail/mid/<?php echo ($vo["model_id"]); ?>/id/<?php echo ($vo["id"]); ?>"  target="_blank"><?php echo ($vo["title"]); ?></a>
                        </td>
                        <td>
                        </td>
                        <td>
                            <?php echo ($vo["createtime"]); ?>
                        </td>
                        <td class="hidden-xs">
                            <a href="/Sdorms/index.php/Admin/Article/editor/id/<?php echo ($vo["id"]); ?>" target="_blank">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </a>
                            <a class="excu" value=<?php echo ($vo["id"]); ?> name="delete_h">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <?php echo ($page); ?>
                    </ul>
                </nav>
        </div>

    </div>
    <script>

    </script>

    <script>
        $('#submit').click(function() {

            var myForm = $('form');
            $.ajax({
                url: '/Sdorms/index.php/Admin/Article/addAtc',
                type: 'post',//提交的方式
                dataType:'json',
                data: myForm.serialize(),
                success: function(data) {
                    alert(data.msg);
                    if(data.status==1){
                        window.location.href=document.referrer;
                    }

                    //这是成功返回的数据，写自己的逻辑
                }
            });
        });

        /*function excu(){
            alert(12);
            var status = $(this).attr('name'); //方法名
            //var ch = arguments[0] ? arguments[0] : {};
            //var ch={};   //方法接受的参数

            if(arguments[0]){
                var ch = arguments[0];
            }else {
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
                url:"/Sdorms/index.php/Admin/Article/excu",
                data:{'status':status,'val':ch},//{'0':ch},
                success: function(data) {
                    alert(JSON.stringify(data));
                    location.reload();
                    //alert($.parseJSON(data));
                }
            });
        };*/

        $('.excu').bind('click',function(){

            var status = $(this).attr('name'); //方法名
            if(status=="delete_h"){
                alert('是否删除该文档');
            }
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
                url:"/Sdorms/index.php/Admin/Article/excu",
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