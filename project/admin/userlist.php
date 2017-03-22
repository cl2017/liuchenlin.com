            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>用户列表</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-inline" action="" method="" style="margin-bottom: 10px;">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <input class="form-control" type="text" placeholder="搜索用户" name="" value="">
                                </div>
                                <input type="submit" class="btn btn-default" value="搜索">
                            </form>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>用户ID</th>
                                    <th>用户名</th>
                                    <th>昵称</th>
                                    <th>注册时间</th>
                                    <th>最后登录</th>
                                    <th>修改</th>
                                    <th>封禁</th>
                                    <th>删除</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- *********** -->
                                    <tr>
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>管理</td>
                                        <td>2017/2/2 22:22:22</td>
                                        <td>2017/2/2 22:22:22</td>
                                        <td><a href="#">修改</a></td>
                                        <td><a href="#">封禁</a></td>
                                        <td><a href="#">删除</a></td>
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