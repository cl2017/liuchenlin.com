            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>通知列表</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-inline" action="./index.php" method="get" style="margin-bottom: 10px;">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <input type="hidden" name="r" value="news/index">
                                    <input class="form-control" type="text" placeholder="搜索通知" name="p" value="">
                                </div>
                                <input type="submit" class="btn btn-default" value="搜索">
                                <input type="reset" class="btn btn-default">
                            </form>

                            <div class="list-group">
                                <?php
                                foreach ($data as $data_each) {
                                    echo '<a href="';
                                    echo yii\helpers\Url::to(['/news/detail', 'id' => $data_each['news_id']]);
                                    echo '" class="list-group-item"><span class="glyphicon glyphicon-chevron-right"></span>';
                                    if ($data_each['news_status'] == 5) {
                                        echo '[置顶]';
                                    }
                                    echo $data_each['news_title'];
                                    echo '<span class="badge">';
                                    echo date("Y-n-d H:i:s", $data_each['news_modified_time']);
                                    echo '</span></a>';
                                } ?>
                                <!-- 按照以上格式生成a的链接和内容即可 -->
                            </div>
                            <nav style="text-align: left">
                                <ul class="pagination">
                                    <?php echo yii\widgets\LinkPager::widget(['pagination' => $pager, 'firstPageLabel' => '首页', 'lastPageLabel' => '尾页', 'nextPageLabel' => '下一页', 'prevPageLabel' => '上一页']); ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>