            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>判题状态</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-inline" action="./index.php" method="get" style="margin-bottom: 10px;">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <input type="hidden"  name="r" value="oj/status">
                                    <input class="form-control" type="text" placeholder="按用户名搜索" name="user_id" value="">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <input class="form-control" type="text" placeholder="按题号搜索" name="question_id" value="">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <select class="form-control" name="language">
                                        <option value="">所有语言</option>
                                        <option value="0">C</option>
                                        <option value="1">C++</option>
                                        <option value="2">Pascal</option>
                                        <option value="3">Java</option>
                                        <option value="4">Ruby</option>
                                        <option value="5">Bash</option>
                                        <option value="6">Python</option>
                                        <option value="7">PHP</option>
                                        <option value="8">Perl</option>
                                        <option value="9">C#</option>
                                        <option value="10">Obj-C</option>
                                        <option value="11">FreeBasic</option>
                                        <option value="12">Schema</option>
                                        <option value="13">Clang</option>
                                        <option value="14">Clang++</option>
                                        <option value="15">Lua</option>
                                        <option value="16">JavaScript</option>
                                        <option value="17">Other Language</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-default" value="搜索">
                                <input type="reset" class="btn btn-default">
                            </form>

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>提交ID</th>
                                    <th>题号</th>
                                    <th>用户名</th>
                                    <th>结果</th>
                                    <th>耗时</th>
                                    <th>内存</th>
                                    <th>语言</th>
                                    <th>长度</th>
                                    <th>提交时间</th>
                                    <th>修改</th>
                                    <th>删除</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- *********** -->
                                <?php
                                foreach ($data as $data_each) {
                                    echo "<tr>
                                    <td>{$data_each['solution_id']}</td>";
                                    echo '<td>' . yii\helpers\Html::a($data_each['problem_id'], ['/oj/detail', 'id' => $data_each['problem_id']]) . '</td>';
                                    echo '<td>' . yii\helpers\Html::a($data_each['user_id'], ['/member/userinfo', 'id' => $data_each['user_id']]) . '</td>';
                                    echo '<td>' . yii::$app->params['oj']['judge_result'][$data_each['result']] . '</td>';
                                    echo "<td>{$data_each['time']}</td>
                                      <td>{$data_each['memory']}</td>";
                                    echo '<td>' . yii::$app->params['oj']['language_name'][$data_each['language']] . '</td>';
                                    echo "<td>{$data_each['code_length']}B</td>";
                                    echo '<td>' . date("Y-m-d H:i:s", $data_each['in_date']) . '</td></tr>';
                                }
                                ?>
                                </tbody>
                            </table>

                            <nav style="text-align: center">
                                <ul class="pagination">
                                    <?php echo yii\widgets\LinkPager::widget(['pagination' => $pager, 'firstPageLabel' => '首页', 'lastPageLabel' => '尾页', 'nextPageLabel' => '下一页', 'prevPageLabel' => '上一页']); ?>
                                    <!-- 在这里生成分页导航 -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>