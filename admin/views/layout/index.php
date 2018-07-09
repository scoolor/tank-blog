<?php

use engine\application\web\Url;
?>
<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tank Blog</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="../assets/AmazeUI-2.7.2/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Tank Blog" />
    <link rel="stylesheet" href="../assets/AmazeUI-2.7.2/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="../assets/AmazeUI-2.7.2/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>Tank Blog</strong> <small>后台管理系统</small>
    </div>

    <!-- 没有显示???   -->
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li>
                <a href="javascript:;">
                    <span class="am-icon-envelope-o"></span>
                    收件箱
                    <span class="am-badge am-badge-warning">5</span>
                </a>
            </li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span>
                    管理员
                    <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li>
                        <a href="#">
                            <span class="am-icon-user"></span>
                            资料
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="am-icon-cog"></span>
                            设置
                        </a>
                    </li>
                    <li>
                        <a href="#"><span class="am-icon-power-off"></span>
                            退出
                        </a>
                    </li>
                </ul>
            </li>
            <li class="am-hide-sm-only">
                <a href="javascript:;" id="admin-fullscreen">
                    <span class="am-icon-arrows-alt"></span>
                    <span class="admin-fullText">开启全屏</span>
                </a>
            </li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li>
                    <a href="<?php echo Url::generateUrl(['admin', 'welcome', 'index']);?>">
                        <span class="am-icon-home"></span>
                        首页
                    </a>
                </li>
                <li>
                    <a href="<?php echo Url::generateUrl(['admin', 'admin-user', 'index']);?>">
                        <span class="am-icon-users"></span>
                        后台用户管理
                    </a>
                </li>
                <li>
                    <a href="<?php echo Url::generateUrl(['admin', 'admin-user', 'index']);?>">
                        <span class="am-icon-users"></span>
                        前端用户管理
                    </a>
                </li>
                <li>
                    <a href="<?php echo Url::generateUrl(['admin', 'category', 'index']);?>">
                        <span class="am-icon-th"></span>
                        分类管理
                    </a>
                </li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
                        <span class="am-icon-file"></span>
                        博客管理
                        <span class="am-icon-angle-right am-fr am-margin-right"></span>
                    </a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li>
                            <a href="#" class="am-cf">
                                <span class="am-icon-check"></span>
                                文章
                                <span class="am-badge am-badge-secondary am-margin-right am-fr">24</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="am-icon-puzzle-piece"></span>
                                评论
                                <span class="am-badge am-badge-secondary am-margin-right am-fr">24</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="am-icon-puzzle-piece"></span>
                                回复
                                <span class="am-badge am-badge-secondary am-margin-right am-fr">24</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p>
                        <span class="am-icon-bookmark"></span>
                        公告
                    </p>
                    <p>慢,是一种哲学</p>
                </div>
            </div>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p>
                        <span class="am-icon-tag"></span>
                        简介
                    </p>
                    <p>Blog的前世今生</p>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <?php echo $content;?>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© Create by 2lovecode</p>
        </footer>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="<?php echo $domain ?>/assets/js/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="../assets/AmazeUI-2.7.2/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php echo $domain?>/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="../assets/AmazeUI-2.7.2/assets/js/amazeui.min.js"></script>
<script src="../assets/AmazeUI-2.7.2/assets/js/app.js"></script>
</body>
</html>
