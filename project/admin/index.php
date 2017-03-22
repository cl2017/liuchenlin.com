    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">今日新增</span>
                        <h5>已注册用户</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">1024 人</h1>
                        <div class="stat-percent font-bold text-success">128<i class="fa fa-level-up"></i></div>
                        <small>总计</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">今日解答</span>
                        <h5>系统内题目数量</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">2048 道</h1>
                        <div class="stat-percent font-bold text-danger">256<i class="fa fa-level-up"></i></div>
                        <small>总计</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">今日判题</span>
                        <h5>已判题次数</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">275,800 次</h1>
                        <div class="stat-percent font-bold text-info">128 次<i class="fa fa-level-up"></i></div>
                        <small>总计</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">今日通过</span>
                        <h5>已通过次数</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">106,120 次</h1>
                        <div class="stat-percent font-bold text-navy">128 次<i class="fa fa-level-up"></i></div>
                        <small>总计</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>系统状态图表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="echarts-submit" style="width: 100%; height: 350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>系统状态图表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="echarts-accept" style="width: 100%; height: 350px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox float-e-margins" style="margin-bottom: 0px;">
                    <div class="ibox-title">
                        <h5>快速通道</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-hover no-margins">
                            <thead>
                                <tr>
                                    <th>用户</th>
                                    <th>问题</th>
                                    <th>比赛</th>
                                    <th>通知</th>
                                    <th>论坛</th>
                                    <th>文件</th>
                                </tr>
                            </thead>
                                <tr>
                                    <th><a href="#" class="label label-primary">查看</a></th>
                                    <th><a href="#" class="label label-primary">查看</a></th>
                                    <th><a href="#" class="label label-primary">查看</a></th>
                                    <th><a href="#" class="label label-primary">查看</a></th>
                                    <th><a href="#" class="label label-primary">查看</a></th>
                                    <th><a href="#" class="label label-primary">查看</a></th>
                                </tr>
                                <tr>
                                    <th><a href="#" class="label label-success">添加</a></th>
                                    <th><a href="#" class="label label-success">添加</a></th>
                                    <th><a href="#" class="label label-success">添加</a></th>
                                    <th><a href="#" class="label label-success">添加</a></th>
                                    <th><a href="#" class="label label-success">添加</a></th>
                                    <th><a href="#" class="label label-success">添加</a></th>
                                </tr>
                                <tr>
                                    <th><a href="#" class="label label-info">更新</a></th>
                                    <th><a href="#" class="label label-info">更新</a></th>
                                    <th><a href="#" class="label label-info">更新</a></th>
                                    <th><a href="#" class="label label-info">更新</a></th>
                                    <th><a href="#" class="label label-info">更新</a></th>
                                    <th><a href="#" class="label label-info">更新</a></th>
                                </tr>
                                <tr>
                                    <th><a href="#" class="label label-danger">删除</a></th>
                                    <th><a href="#" class="label label-danger">删除</a></th>
                                    <th><a href="#" class="label label-danger">删除</a></th>
                                    <th><a href="#" class="label label-danger">删除</a></th>
                                    <th><a href="#" class="label label-danger">删除</a></th>
                                    <th><a href="#" class="label label-danger">删除</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/echarts.min.js"></script>
    <script type="text/javascript" src="js/echarts.js"></script>