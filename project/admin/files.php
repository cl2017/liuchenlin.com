<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <title>SUOJ 文件管理</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/suoj.css" rel="stylesheet" >
    <link href="css/fileinput.min.css" rel="stylesheet" >
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
                            <li><a href=""><i class="fa fa-chevron-right"></i>封禁用户</a></li>
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
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>文件列表</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div style="margin-bottom: 10px;">
                                <button class="btn btn-primary" id="upload-btn" style="float: left;margin-right: 15px;">上传文件</button>
                                <form class="form-inline" action="" method="" style="float: left;">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                        <input class="form-control" type="text" placeholder="按文件搜索" name="" value="">
                                    </div>
                                    <input type="submit" class="btn btn-default" value="搜索">
                                </form>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>文件名</th>
                                        <th>上传者</th>
                                        <th>上传时间</th>
                                        <th>下载次数</th>
                                        <th>下载</th>
                                        <th>删除</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- *********** -->
                                    <tr>
                                        <td>test.html</td>
                                        <td><a href="#">admin</a></td>
                                        <td>date</td>
                                        <td>50</td>
                                        <td><a href="#" class="btn btn-sm btn-default">下载</a></td>
                                        <td><a href="#" class="btn btn-sm btn-danger">删除</a></td>
                                    </tr>
                                    <tr>
                                        <td>test.html</td>
                                        <td><a href="#">admin</a></td>
                                        <td>date</td>
                                        <td>50</td>
                                        <td><a href="#" class="btn btn-sm btn-default">下载</a></td>
                                        <td><a href="#" class="btn btn-sm btn-danger">删除</a></td>
                                    </tr>
                                    <tr>
                                        <td>test.html</td>
                                        <td><a href="#">admin</a></td>
                                        <td>date</td>
                                        <td>50</td>
                                        <td><a href="#" class="btn btn-sm btn-default">下载</a></td>
                                        <td><a href="#" class="btn btn-sm btn-danger">删除</a></td>
                                    </tr>
                                    <tr>
                                        <td>test.html</td>
                                        <td><a href="#">admin</a></td>
                                        <td>date</td>
                                        <td>50</td>
                                        <td><a href="#" class="btn btn-sm btn-default">下载</a></td>
                                        <td><a href="#" class="btn btn-sm btn-danger">删除</a></td>
                                    </tr>
                                    <!-- 按照以上 tr>td 的格式生成行内容即可 一页20~30行左右比较合适-->
                                </tbody>
                            </table>
                            <nav style="text-align: center">
                                <?php
                                echo yii\widgets\LinkPager::widget(['pagination' => $pager, 'firstPageLabel' => '首页', 'lastPageLabel' => '尾页', 'nextPageLabel' => '下一页', 'prevPageLabel' => '上一页']);
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="upload" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">上传文件</h4>
                        </div>
                        <div class="modal-body">
                            <input type="file" name="File[myfile]" id="files" multiple class="file-loading">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        </div>
                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="js/fileinput.min.js"></script>
    <script type="text/javascript" src="js/fileinput_locale_zh.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>
    <script type="text/javascript" src="js/upload.js"></script>
    <!-- Toastr -->
    <script src="js/toastr.min.js"></script>
</body>
</html>
