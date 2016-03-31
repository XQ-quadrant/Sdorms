<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>宿宿</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="/Sdorms/Public/assets/js/jquery.js"></script>

    
	<link rel="stylesheet" href="/Sdorms/Public/assets/css/style.css">
	<link rel="stylesheet" href="/Sdorms/Public/assets/css/loader-style.css">
	<link rel="stylesheet" href="/Sdorms/Public/assets/css/bootstrap.css">

	<link rel="stylesheet" href="/Sdorms/Public/assets/css/media.css">
	<link rel="stylesheet" href="/Sdorms/Public/assets/css/extra-pages.css">
	<link rel="stylesheet" href="/Sdorms/Public/assets/css/profile.css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->

    <link rel="shortcut icon" href="/Sdorms/Public/assets/ico/logo2_s100.png">
</head>

<body>
<div id="awwwards" class="right black"><a href="" target="_blank">best websites of the world</a></div>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- TOP NAVBAR -->
    <nav role="navigation" class="navbar navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="entypo-menu"></span>
                </button>
                <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                    <span class="entypo-list-add"></span>
                </button>


                <div id="logo-mobile" class="visible-xs">
                   <h1>宿宿<span>v0.8</span></h1>
                </div>

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">

                <!--<div id="nt-title-container" class="navbar-left running-text visible-lg">
                    <ul class="date-top">
                        <li class="entypo-calendar" style="margin-right:5px"></li>
                        <li id="Date"></li>


                    </ul>

                    <ul id="digital-clock" class="digital">
                        <li class="entypo-clock" style="margin-right:5px"></li>
                        <li class="hour"></li>
                        <li>:</li>
                        <li class="min"></li>
                        <li>:</li>
                        <li class="sec"></li>
                        <li class="meridiem"></li>
                    </ul>
                    <ul id="nt-title">
                        <li><i class="wi-day-lightning"></i>&#160;&#160;Berlin&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>
                        <li><i class="wi-day-lightning"></i>&#160;&#160;Yogyakarta&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; Tonight- 72 °F (22.2 °C)
                        </li>

                        <li><i class="wi-day-lightning"></i>&#160;&#160;Sttugart&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>

                        <li><i class="wi-day-lightning"></i>&#160;&#160;Muchen&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>

                        <li><i class="wi-day-lightning"></i>&#160;&#160;Frankurt&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>

                    </ul>
                </div>-->

                <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" class="admin-pic img-circle" src="http://api.randomuser.me/portraits/thumb/men/10.jpg">XQ-255 <b class="caret"></b>
                        </a>
                        <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-user"></span>&#160;&#160;My Profile</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-vcard"></span>&#160;&#160;Account Setting</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-lifebuoy"></span>&#160;&#160;Help</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="http://themeforest.net/item/apricot-navigation-admin-dashboard-template/7664475?WT.ac=category_item&WT.z_author=themesmile">
                                    <span class="entypo-basket"></span>&#160;&#160; Purchase</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-gear"></span>&#160;&#160;Setting</a>
                        <ul role="menu" class="dropdown-setting dropdown-menu">

                            <li class="theme-bg">
                                <div id="button-bg"></div>
                                <div id="button-bg2"></div>
                                <div id="button-bg3"></div>
                                <div id="button-bg5"></div>
                                <div id="button-bg6"></div>
                                <div id="button-bg7"></div>
                                <div id="button-bg8"></div>
                                <div id="button-bg9"></div>
                                <div id="button-bg10"></div>
                                <div id="button-bg11"></div>
                                <div id="button-bg12"></div>
                                <div id="button-bg13"></div>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a class="toggle-left" href="#">
                            <span style="font-size:20px;" class="entypo-list-add"></span>
                        </a>
                    </li>
                </ul>
                <!--<ul class="nav navbar-nav ">

                    <li class="dropdown">

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:20px;" class="icon-conversation"></i><div class="noft-red">23</div></a>


                        <ul style="margin: 11px 0 0 9px;" role="menu" class="dropdown-menu dropdown-wrap">
                            <li>
                                <a href="#">
                                    <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/1.jpg">Jhon Doe <b>Just Now</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/women/1.jpg">Jeniffer <b>3 Min Ago</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/2.jpg">Dave <b>2 Hours Ago</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/3.jpg"><i>Keanu</i>  <b>1 Day Ago</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/4.jpg"><i>Masashi</i>  <b>2 Mounth Ago</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div>See All Messege</div>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:19px;" class="icon-warning tooltitle"></i><div class="noft-green">5</div></a>
                        <ul style="margin: 12px 0 0 0;" role="menu" class="dropdown-menu dropdown-wrap">
                            <li>
                                <a href="#">
                                    <span style="background:#DF2135" class="noft-icon maki-bus"></span><i>From Station</i>  <b>01B</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <span style="background:#AB6DB0" class="noft-icon maki-ferry"></span><i>Departing at</i>  <b>9:00 AM</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <span style="background:#FFA200" class="noft-icon maki-aboveground-rail"></span><i>Delay for</i>  <b>09 Min</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <span style="background:#86C440" class="noft-icon maki-airport"></span><i>Take of</i>  <b>08:30 AM</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <span style="background:#0DB8DF" class="noft-icon maki-bicycle"></span><i>Take of</i>  <b>08:30 AM</b>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div>See All Notification</div>
                            </li>
                        </ul>
                    </li>
&lt;!&ndash;
                    <li><a href="#"><i data-toggle="tooltip" data-placement="bottom" title="Help" style="font-size:20px;" class="icon-help tooltitle"></i></a>
&ndash;&gt;
                    </li>

                </ul>-->

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <div id="skin-select">
        <div id="logo">
            <img style="height: 60px;margin-top: 18px" alt="科创俱乐部" src="/Sdorms/Public/assets/img/logo2_w280.png">
        <!-- <h1>宿 宿<span>v1.3</span></h1>-->
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        <div class="dark">
            <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search" placeholder="功能搜索..." autofocus="">
                </span>
            </form>
        </div>

        <!--<div class="search-hover">
            <form id="demo-2">
                <input type="search" placeholder="Search Menu..." class="id_search">
            </form>
        </div>-->


        <div class="search-hover">
            <form id="demo-2">
                <input type="search" placeholder="Search Menu..." class="id_search">
            </form>
        </div>


        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <?php tag('cate'); ?>
                    <ul class="topnav menu-left-nest">
                        <!--<li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="widget-menu"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>-->

                        <li>
                            <a class="tooltip-tip ajax-load" href="#" title="Blog App">
                                <i class="icon-document-edit"></i>
                                <span>房东助手</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="blog-list.html" title="Blog List"><i class="entypo-doc-text"></i><span>我的住宿</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="Blog Detail"><i class="entypo-newspaper"></i><span>Blog Details</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="social.html" title="Social">
                                <i class="icon-feed"></i>
                                <span>数据仪表</span>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="media.html" title="Media">
                                <i class="icon-camera"></i>
                                <span>交易记录</span>

                            </a>
                        </li>
                    </ul>

                    <ul class="topnav menu-left-nest">
                        <!--<li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="design-kit"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>-->

                        <li>
                            <a class="tooltip-tip ajax-load" href="index.html" title="Dashboard">
                                <i class="icon-window"></i>
                                <span>本月热榜</span>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="mail.html" title="Mail">
                                <i class="icon-mail"></i>
                                <span>快租</span>
                                <div class="noft-blue">289</div>
                            </a>
                        </li>

                       <!-- <li>
                            <a class="tooltip-tip ajax-load" href="icon.html" title="Icons">
                                <i class="icon-preview"></i>
                                <span>Icons</span>
                                <div class="noft-blue" style="display: inline-block; float: none;">New</div>
                            </a>
                        </li>

                        <li>
                            <a class="tooltip-tip" href="#" title="Extra Pages">
                                <i class="icon-document-new"></i>
                                <span>Extra Page</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="blank_page.html" title="Blank Page"><i class="icon-media-record"></i><span>Blank Page</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="profile.html" title="Profile Page"><i class="icon-user"></i><span>Profile Page</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="invoice.html" title="Invoice"><i class="entypo-newspaper"></i><span>Invoice</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="pricing_table.html" title="Pricing Table"><i class="fontawesome-money"></i><span>Pricing Table</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="time-line.html" title="Time Line"><i class="entypo-clock"></i><span>Time Line</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2" href="404.html" title="404 Error Page"><i class="icon-thumbs-down"></i><span>404 Error Page</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2" href="500.html" title="500 Error Page"><i class="icon-thumbs-down"></i><span>500 Error Page</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2" href="lock-screen.html" title="Lock Screen"><i class="icon-lock"></i><span>Lock Screen</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="tooltip-tip " href="login.html" title="login">
                                <i class="icon-download"></i>
                                <span>Login</span>
                            </a>
                        </li>-->

                    </ul>

                    <!--<ul id="menu-showhide" class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="component"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>


                        <li>
                            <a class="tooltip-tip" href="#" title="UI Element">
                                <i class="icon-monitor"></i>
                                <span>UI Element</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="element.html" title="Element"><i class="icon-attachment"></i><span>Element</span></a>
                                </li>
                                <li><a class="tooltip-tip2 ajax-load" href="button.html" title="Button"><i class="icon-view-list-large"></i><span>Button</span> <div class="noft-blue-number">10</div></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="wizard.html" title="Tab & Accordion"><i class="icon-folder"></i><span>Wizard</span><div class="noft-purple-number">3</div></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="calendar.html" title="Calender"><i class="icon-calendar"></i><span>Calendar</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="tree.html" title="Tree View"><i class="icon-view-list"></i><span>Tree View</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="grids.html" title="Grids"><i class="icon-menu"></i><span>Grids</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="chart.html" title="Chart"><i class="icon-graph-pie"></i><span>Chart</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip ajax-load" href="typhography.html" title="Typhoghrapy">
                                        <i class="icon-information"></i>
                                        <span>Typhoghrapy</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip" href="#" title="Form">
                                <i class="icon-document"></i>
                                <span>Form</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="form-element.html" title="Form Elements"><i class="icon-document-edit"></i><span>Form Elements</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="andvance-form.html" title="Andvance Form"><i class="icon-map"></i><span>Andvance Form</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="text-editor.html" title="Text Editor"><i class="icon-code"></i><span>Text Editor</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="file-upload.html" title="File Upload"><i class="icon-upload"></i><span>File Upload</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip" href="#" title="Tables">
                                <i class="icon-view-thumb"></i>
                                <span>Tables</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="table-static.html" title="Table Static"><i class="entypo-layout"></i><span>Table Static</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="table-dynamic.html" title="Table Dynamic"><i class="entypo-menu"></i><span>Table Dynamic</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="tooltip-tip ajax-load" href="map.html" title="Map">
                                <i class="icon-location"></i>
                                <span>Map</span>

                            </a>
                        </li>
                    </ul>-->


                    <div class="side-dash">
                        <h3>
                            <span>统 计</span>
                        </h3>
                        <ul class="side-dashh-list">
                            <li>在线人数
                                <span>2k<i style="color:#44BBC1;" class="fa fa-arrow-circle-up"></i>
                                </span>
                            </li>
                            <li>满租率
                                <span>80%<i style="color:#AB6DB0;" class="fa fa-arrow-circle-down"></i>
                                </span>
                            </li>
                            <li>最近房源
                                <span>0.4km<i style="color:#19A1F9;" class="fa fa-arrow-circle-up"></i>
                                </span>
                            </li>
                        </ul>
                        <h3>
                            <span>分 析</span>
                        </h3>
                        <ul class="side-bar-list">
                           <!-- <li>Avg. Traffic
                                <div class="linebar">5,7,8,9,3,5,3,8,5</div>
                            </li>
                            <li>Visitors
                                <div class="linebar2">9,7,8,9,5,9,6,8,7</div>
                            </li>-->
                            <li>Convertion Rate
                                <div class="linebar3">5,7,8,9,3,5,3,8,5</div>
                            </li>
                        </ul>
                        <!--<h3>
                            <span>Visitors</span>
                        </h3>
                        <div id="g1" style="height:180px" class="gauge"></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SIDE MENU -->



    <!--  PAPER WRAP -->

	<div class="wrap-fluid">
		<div class="container-fluid paper-wrap bevel tlbr">


			<!-- CONTENT -->
			<!--TITLE -->
			<!--<div class="row">
				<div id="paper-top">
					<div class="col-sm-3">
						<h2 class="tittle-content-header">
							<span class="entypo-newspaper"></span>
                            <span>Blog Detail
                            </span>
						</h2>

					</div>

					<div class="col-sm-7">
						<div class="devider-vertical visible-lg"></div>
						<div class="tittle-middle-header">

							<div class="alert">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<span class="tittle-alert entypo-info-circled"></span>
								Welcome back,&nbsp;
								<strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
							</div>


						</div>

					</div>
					<div class="col-sm-2">
						<div class="devider-vertical visible-lg"></div>
						<div class="btn-group btn-wigdet pull-right visible-lg">
							<div class="btn">
								Widget</div>
							<button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul role="menu" class="dropdown-menu">
								<li>
									<a href="#">
										<span class="entypo-plus-circled margin-iconic"></span>Add New</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-heart margin-iconic"></span>Favorite</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-cog margin-iconic"></span>Setting</a>
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>-->
			<!--/ TITLE -->

			<!-- BREADCRUMB -->
			<ul id="breadcrumb">
				<li>
					<span class="entypo-home"></span>
				</li>
				<li><i class="fa fa-lg fa-angle-right"></i>
				</li>
				<li><a href="#" title="Sample page 1">我的房源</a>
				</li>
				<li><i class="fa fa-lg fa-angle-right"></i>
				</li>
				<li><a href="#" title="Sample page 1"><?php echo ($id); ?></a>
				</li>
				<li class="pull-right">
					<div class="input-group" style="margin:-7px 30px 0 0">

						<input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
					</div>
				</li>
			</ul>

			<!-- END OF BREADCRUMB -->

			<!--CONTENT-->
			<div class="row" style="margin-top:30px;padding:0 15px;">
				<!--  BLOG CONTENT -->
				<div class="col-sm-8">

					<div class="blog-list-nest">
						<div class="vendor">
<!--
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149950304&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
-->
							<img width="100%" height="286" scrolling="no" frameborder="no" src="/Sdorms/Public/Uploads/8.jpg">
						</div>

						<div class="blog-list-content">
							<h2><?php echo ($title); ?></h2>

							<div class="col-xs-12 col-sm-12 profile-name" >
								<h4>详细参数
                                        <span class="pull-right social-profile">
                                            <i class="entypo-facebook-circled"></i>  <i class="entypo-twitter-circled"></i>  <i class="entypo-linkedin-circled"></i>  <i class="entypo-github-circled"></i>  <i class="entypo-gplus-circled"></i>
                                        </span>
								</h4>
								<hr>

								<dl class="dl-horizontal-profile">
									<dt>地址</dt>
									<dd><?php echo ($address); ?></dd>
									<dt>类型</dt>
									<dd>独栋</dd>
									<dt>可住</dt>
									<dd>2人</dd>

									<dt>面积</dt>
									<dd>28平方米</dd>

									<dt>卧室</dt>
									<dd>1间</dd>

									<dt>厨卫</dt>
									<dd>一厨一卫</dd>

									<dt>床位</dt>
									<dd>1单人床</dd>



									<dt>标签</dt>
									<dd>
										<span class="tags">阳光</span>
										<span class="tags">独栋</span>
										<span class="tags">空调</span>
										<span class="tags">热水</span>
									</dd>

								</dl>
								<h5>
									<span class="entypo-arrows-ccw"></span>&nbsp;&nbsp;家居设施</h5>
								<div class="row invoice-info">

									<div class="col-sm-4 invoice-col">
										<address>

											<span data-original-title="briefcase" class="entypo-briefcase" title=""></span><strong>&nbsp;&nbsp;空调</strong>
											<br><span data-original-title="briefcase" class="entypo-briefcase" title="">&nbsp;&nbsp;书桌</span></br>
											<br><span data-original-title="briefcase" class="entypo-briefcase" title="">&nbsp;&nbsp;衣柜</span>
											<br><span class="entypo-basket">&nbsp;&nbsp;床头柜</span>
										</address>
									</div>
									<!-- /.col -->
									<div class="col-sm-4 invoice-col">
										<address>
											<strong>吹风机</strong>
											<br>折叠椅
											<br>穿衣镜
											<br>鞋架
											<br>洗衣机
										</address>
									</div>
									<!-- /.col -->
									<div class="col-sm-4 invoice-col">
										<b>附近场所：</b><br>
										<b>8+9酒吧</b>
										<br>
										<br>犀浦春天
										<b>Order ID:</b> 4F3S8J
										<br>
										<b>晓笠原料理</b>
										<br>
										<b>龙玖火锅:</b>
									</div>
									<!-- /.col -->
								</div>

								<!--<hr>

								<h5>
									<span class="entypo-arrows-ccw"></span>&nbsp;&nbsp;Recent Activities</h5>

								<div class="table-responsive">
									<table class="table table-hover table-striped table-condensed">

										<tbody>
										<tr>
											<td><i class="pull-right fa fa-edit"></i> Today, 1:00 - Jeff Manzi liked your post.</td>
										</tr>
										<tr>
											<td><i class="pull-right fa fa-edit"></i> Today, 12:23 - Mark Friendo liked and shared your post.</td>
										</tr>
										<tr>
											<td><i class="pull-right fa fa-edit"></i> Today, 12:20 - You posted a new blog entry title "Why social media is".</td>
										</tr>
										<tr>
											<td><i class="pull-right fa fa-edit"></i> Yesterday - Karen P. liked your post.</td>
										</tr>
										<tr>
											<td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Philip W. liked your post.</td>
										</tr>
										<tr>
											<td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Jeff Manzi liked your post.</td>
										</tr>
										</tbody>
									</table>
								</div>-->

							</div>


							<!--<p class="pull-right">
								<span class="label label-default">keyword</span>
								<span class="label label-default">tag</span>
								<span class="label label-default">post</span>
							</p>
							<ul class="list-inline">
								<li>
									<a href="#">
										<span class="entypo-network"></span>&nbsp;2 Days Ago</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-chat"></span>&nbsp;2 Comments</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-share"></span>&nbsp;14 Shares</a>
								</li>
							</ul>
							<hr>
							<button class="btn btn-info pull-right">Read More</button>-->
							<div style="clear:both;"></div>
						</div>
					</div>

					<div class="blog-list-nest">
						<div class="blog-list-content">
							<h4>详细描述</h4>




							<?php echo ($content); ?>
							<!--<p class="pull-right">
								<span class="label label-default">二室一厅</span>
								<span class="label label-default">南向</span>
								<span class="label label-default">情趣</span>
							</p>-->
							<ul class="list-inline">
								<li>
									<a href="#">
										<span class="entypo-network"></span>&nbsp;2 Days 发布</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-chat"></span>&nbsp;2 评价</a>
								</li>
								<li>
									<a href="#">
										<span class="entypo-share"></span>&nbsp;14 人推荐</a>
								</li>
							</ul>
							<hr>
							<button class="btn btn-info pull-right">Read More</button>
							<div style="clear:both;"></div>
						</div>
					</div>
					<!--<div class="blog-list-nest" id="Blank_PageClose">
						<div class="title-alt">
							<h6>
								Blank Page</h6>
							<div class="titleClose">
								<a class="gone" href="#Blank_PageClose">
									<span class="entypo-cancel"></span>
								</a>
							</div>
							<div class="titleToggle">
								<a class="nav-toggle-alt" href="#Blank_Page_Content">
									<span class="entypo-up-open"></span>
								</a>
							</div>

						</div>

						<div class="body-nest" id="Blank_Page_Content">

							Content Goes Here
						</div>
					</div>-->

					<div class="comment-nest">
						<h1>留言&评价：</h1>
						<div class="well">

							<form role="form">
								<div class="form-group">
									<textarea placeholder="Comment" rows="5" class="form-update"></textarea>
								</div>
								<button type="submit" class="btn btn-info">留言</button>
							</form>
						</div>





						<hr>
						<ul class="media-list">
							<li class="media">
								<a class="pull-left" href="#">
									<img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64" src="http://api.randomuser.me/portraits/thumb/women/21.jpg" style="width: 64px; height: 64px;">
								</a>


								<div class="media-body">
									<div class="social-profile">
										<h3> <a class="link-comment" href="#">Sympo Nia</a>
											<span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                            <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                            </span>
										</h3>
									</div>

									<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
									<!-- Nested media object -->

									<div class="media">
										<a class="pull-left" href="#">
											<img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64" src="http://api.randomuser.me/portraits/thumb/men/40.jpg" style="width: 64px; height: 64px;">
										</a>
										<div class="media-body">

											<div class="social-profile">
												<h3> <a class="link-comment" href="#">Awangizm</a>
													<span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                                    <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                                    </span>
												</h3>
											</div>

											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
											<!-- Nested media object -->
											<div class="media">
												<a class="pull-left" href="#">
													<img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64" src="http://api.randomuser.me/portraits/thumb/women/21.jpg" style="width: 64px; height: 64px;">
												</a>
												<div class="media-body">

													<div class="social-profile">
														<h3> <a class="link-comment" href="#">Symponia</a>
															<span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                                            <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                                            </span>
														</h3>
													</div>


													<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Nested media object -->
									<div class="media">
										<a class="pull-left" href="#">
											<img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64" src="http://api.randomuser.me/portraits/thumb/men/55.jpg" style="width: 64px; height: 64px;">
										</a>
										<div class="media-body">

											<div class="social-profile">
												<h3> <a class="link-comment" href="#">Agus Berontazk</a>
													<span><i class="entypo-globe"></i>&nbsp;12 minute ago</span>
                                                    <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                                    </span>
												</h3>
											</div>


											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
										</div>
									</div>
								</div>
							</li>

						</ul>


					</div>




					<ul class="pager success">
						<li class="previous"><a href="#">�?Older</a>
						</li>
						<li class="next disabled"><a href="#">Newer �?/a>
						</a></li>
					</ul>



				</div>
				<!--  END OF BLOG CONTENT -->

				<!--  BLOG SIDE CONTENT -->
				<div class="col-sm-4 ">
					<div class="plan plan-highlight" style="margin: 0px 0px 20px 0px">
						<p class="plan-recommended">Recommended</p>
						<h3 class="plan-title">每月</h3>
						<p class="plan-price">￥<?php echo ($price); ?>
							<span class="plan-unit">月租金</span>
						</p>
						<ul class="plan-features">


							<li class="plan-feature">

								<p class="text-center">
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star-o"></span>
									</a>
								</p>



							</li>
							<li class="plan-feature">
								<span class="plan-feature-name">联系电话</span>
								<span class="plan-feature-unit">1848365384</span>

							</li>
							<!--<li class="plan-feature">
								<span class="plan-feature-name">QQ </span>
								<span class="plan-feature-unit">8262567</span>
							</li>-->
						</ul>
						<a href="#" class="plan-button">快速预定</a>
					</div>

				</div>
				<div class="col-sm-4">

					<div class="panel panel-default">
						<img class="media-object img-circle blog-profile" data-src="holder.js/64x64" alt="64x64" src="http://api.randomuser.me/portraits/thumb/men/10.jpg">
						<hr style="margin:0;">

						<div class="panel-body">
							<p class="lead text-center">Dave Mattew</p>
							<p class="tex-center social-blog-profile">
								<a href="#">
									<span class="entypo-facebook-circled"></span>
								</a>
								<a class="tweet-link" href="#">
									<span class="entypo-twitter-circled"></span>
								</a>
								<a class="gplus-textcolor" href="#">
									<span class="entypo-instagrem"></span>
								</a>

							</p>
							<p class="social-follower text-center">A graphics designer, a web developer, a boyfriend, a friend, a son</p>


						</div>
					</div>

					<div class="blog-side-nest">
						<h4 class="text-center">JOIN NEWSLETTER</h4>
						<p class="text-center">Sign up for our daily Newslatter</p>
						<form role="form">
							<div class="row">
								<div class="col-xs-8">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter email">
									</div>
								</div>
								<!-- /.col-xs-8 -->
								<div class="col-xs-4 col-full-width-left">
									<button type="submit" class="btn btn-info btn-block">Sign up</button>
								</div>
								<!-- /.col-xs-4 -->
							</div>
							<!-- /.row -->
						</form>

					</div>

					<div class="blog-side-nest">
						<h4 class="text-left">POPULAR POST</h4>
						<hr style="margin:0">

						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64" src="http://placehold.it/64x64">
							</a>
							<div class="media-body">
								<h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet  </h5>
								<a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">88 Views</a>
							</div>
						</div>

						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64" src="http://placehold.it/64x64">
							</a>
							<div class="media-body">
								<h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet  </h5>
								<a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">90 Views</a>
							</div>
						</div>

						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64" src="http://placehold.it/64x64">
							</a>
							<div class="media-body">
								<h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet  </h5>
								<a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">42 Views</a>
							</div>
						</div>

						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64" src="http://placehold.it/64x64">
							</a>
							<div class="media-body">
								<h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet  </h5>
								<a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">111 Views</a>
							</div>
						</div>

						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64" src="http://placehold.it/64x64">
							</a>
							<div class="media-body">
								<h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet  </h5>
								<a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">123 Views</a>
							</div>
						</div>

						<br>
					</div>

					<div class="blog-side-nest">
						<h4 class="text-left">TAG</h4>
						<hr style="margin:0">
						<ul class="list-inline">
							<li>
								<a class="btn btn-info" href="#">Admin</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Fleet</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Music</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Video</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Typhography</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Computer</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Web Design</a>
							</li>
							<li>
								<a class="btn btn-info" href="#">Movie</a>
							</li>

						</ul>
					</div>
				</div>
				<!--  END OF BLOG SIDE CONTENT -->
			</div>


			<!-- /END OF CONTENT -->



			<!-- FOOTER -->
			<div class="footer-space"></div>
			<div id="footer">
				<div class="devider-footer-left"></div>
				<div class="time">
					<p id="spanDate">
					<p id="clock">
				</div>
				<div class="copyright">Make with Love
					<span class="entypo-heart"></span>Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> All Rights Reserved</div>
				<div class="devider-footer"></div>

			</div>
			<!-- / END OF FOOTER -->


		</div>
	</div>

    <!--  END OF PAPER WRAP -->

    <!-- RIGHT SLIDER CONTENT -->
    <div class="sb-slidebar sb-right">
        <div class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
                </h3>
                <div class="col-sm-12">

                    <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>Distance traveled</b>
                        <br>
                        <i>86% to the check point</i>
                    </div>

                    <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>The average speed</b>
                        <br>
                        <i>30KM/h avarage speed</i>
                    </div>


                    <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>Overall result</b>
                        <br>
                        <i>30KM/h avarage Result</i>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:0;" class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
                </h3>
                <div class="col-sm-12">
                    <span class="label label-warning label-chat">Online</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                </span><b>Dave Junior</b>
                                <br><i>Last seen : 08:00 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>


                    </ul>

                    <span class="label label-chat">Offline</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                </span><b>Dave Junior</b>
                                <br><i>Last seen : 08:00 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF RIGHT SLIDER CONTENT-->




    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="/Sdorms/Public/assets/js/preloader.js"></script>
    <script type="text/javascript" src="/Sdorms/Public/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Sdorms/Public/assets/js/app.js"></script>
    <script type="text/javascript" src="/Sdorms/Public/assets/js/load.js"></script>
    <script type="text/javascript" src="/Sdorms/Public/assets/js/main.js"></script>
    <!--<script src="/Sdorms/Public/assets/js/flatvideo/jquery.fitvids.js"></script>-->


	<!-- 配置文件 -->
	<script type="text/javascript" src="/Sdorms/Public/editor/ueditor.config.js"></script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript" src="/Sdorms/Public/editor/ueditor.all.js"></script>
	<!-- 实例化编辑器 -->
	<script type="text/javascript">
		var ue = UE.getEditor('container');
	</script>
	<script src="assets/js/flatvideo/jquery.fitvids.js"></script>

    <script>
    // Basic FitVids Test
    $(".blog-list-nest").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test
    $(".blog-list-nest").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test
    </script>

</body>

</html>