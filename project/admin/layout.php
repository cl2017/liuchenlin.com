<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <title>SUOJ 后台管理</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/suoj.css" rel="stylesheet" >
    <style type="text/css">
    </style>
</head>

<body>
    <div id="wrapper" style="background-color: #2f4050;">
        <nav class="navbar-default navbar-static-side" style="position: fixed;z-index: 999;height: 100%;">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <span><img alt="image" class="img-circle" src="img/touxiang.jpg" style="width: 48px"></span>&nbsp;&nbsp;
                            <strong class="font-bold" style="color: #DFE4ED;">欢迎您，Admin</strong>
                        </div>
                        <div class="logo-element">SUOJ</div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">仪表盘</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>仪表盘</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-smile-o"></i> <span class="nav-label">用户管理</span><span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>管理员列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>老师列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>用户列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>添加用户</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-star-o"></i> <span class="nav-label">问题管理</span><span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>判题状态</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>问题列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>添加问题</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-ol"></i> <span class="nav-label">比赛管理</span><span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>比赛列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>添加比赛</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bell-o"></i> <span class="nav-label">通知管理</span><span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>通知列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>添加通知</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">论坛管理</span><span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>论坛板块</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>论坛列表</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>添加论坛</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i>添加贴子</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">文件管理</span><span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href=""><i class="fa fa-chevron-right"></i>文件列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-minimalize" href="#"><i class="fa fa-bars"></i> <span class="nav-label">收起导航栏</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-top">
                <nav class="white-bg navbar navbar-static-top" style="margin-bottom: 0;">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li><span class="m-r-sm text-muted welcome-message">欢迎来到SUOJ管理系统</span></li>
                        <li><a href="login.html"><i class="fa fa-sign-out"></i>退出登录</a></li>
                    </ul>
                </nav>
            </div>
            <!-- ***************** -->
            <!-- 在这里插入每个页面的内容 -->
            <!-- ***************** -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- Toastr -->
    <script src="js/toastr.min.js"></script>

</body>
</html>
