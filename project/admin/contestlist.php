            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>比赛列表</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-inline" action="" method="" style="margin-bottom: 10px;">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <input class="form-control" type="text" placeholder="搜索比赛" name="" value="">
                                </div>
                                <input type="submit" class="btn btn-default" value="搜索">
                            </form>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>比赛名称</th>
                                    <th>开始时间</th>
                                    <th>结束时间</th>
                                    <th>状态</th>
                                    <th>修改</th>
                                    <th>删除</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- *********** -->
                                <?php
                                foreach ($data as $data_each) {
                                    echo ' <tr>
                                    <td>' . $data_each['contest_id'] . '</td><td>';
                                    echo yii\helpers\Html::a($data_each['title'], ['/oj/matchdetail', 'cid' => $data_each['contest_id']]) . '</td>';
                                    echo '<td>' . date("Y-m-d H:i", $data_each['start_time']) . '</td>';
                                    echo '<td>' . date("Y-m-d H:i", $data_each['end_time']) . '</td>';
                                    echo '<td>' . yii::$app->params['match_status'][$data_each['status']] . '</td>';
                                }
                                ?>

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