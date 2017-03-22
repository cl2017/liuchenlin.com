            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>板块列表</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row clearfix">
                                <?php
                                foreach ($data as $data_each) {
                                    echo '<div class="col-md-6 column">
                                    <div class="media">
                                        <a href="' . yii\helpers\Url::to(['/forum/cate', 'cate' => $data_each['cate_ID']]) . '" class="pull-left"> <img src="http://ibootstrap-file.b0.upaiyun.com/lorempixel.com/64/64/default.jpg" class="media-object"></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="' . yii\helpers\Url::to(['/forum/cate', 'cate' => $data_each['cate_ID']]) . '">' . $data_each['cate_title'] . '</a></h4>
                                            <p>' . $data_each['cate_description'] . '</p>
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>
                                <!-- 按以上格式生成即可 -->
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