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
                                <span href="/index.php?r=news%2Fdetail&amp;id=1" class="list-group-item">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <a href="#">这是标题</a>
                                    <a href="#" style="float: right;">编辑</a>
                                    <a href="#" style="float: right;">删除</a>
                                    <span class="badge">2017-3-23 17:02:12</span>
                                </span>
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