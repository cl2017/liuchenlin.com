            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>添加问题</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form id="w0" action="/?r=admin/oj/addquestion" method="post" role="form">
                                <div class="form-group field-question-title">
                                    <label class="control-label" for="question-title">标题</label>
                                    <input type="text" id="question-title" class="form-control" name="Question[title]" value="">
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-description">
                                    <label class="control-label" for="question-description">问题描述</label>
                                    <textarea id="question-description" class="form-control" name="Question[description]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-timelimit">
                                    <label class="control-label" for="question-timelimit">时间限制</label>
                                    <input type="text" id="question-timelimit" class="form-control" name="Question[timelimit]" value="">
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-memorylimit">
                                    <label class="control-label" for="question-memorylimit">内存限制</label>
                                    <input type="text" id="question-memorylimit" class="form-control" name="Question[memorylimit]" value="">
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-in_put">
                                    <label class="control-label" for="question-in_put">输入描述</label>
                                    <textarea id="question-in_put" class="form-control" name="Question[in_put]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-out_put">
                                    <label class="control-label" for="question-out_put">输出描述</label>
                                    <textarea id="question-out_put" class="form-control" name="Question[out_put]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-expinput">
                                    <label class="control-label" for="question-expinput">示例输入</label>
                                    <textarea id="question-expinput" class="form-control" name="Question[expinput]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-expoutput">
                                    <label class="control-label" for="question-expoutput">示例输出</label>
                                    <textarea id="question-expoutput" class="form-control" name="Question[expoutput]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-testinput">
                                    <label class="control-label" for="question-testinput">测试输入</label>
                                    <textarea id="question-testinput" class="form-control" name="Question[testinput]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-testoutput">
                                    <label class="control-label" for="question-testoutput">测试输出</label>
                                    <textarea id="question-testoutput" class="form-control" name="Question[testoutput]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-hint">
                                    <label class="control-label" for="question-hint">提示</label>
                                    <textarea id="question-hint" class="form-control" name="Question[hint]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-source">
                                    <label class="control-label" for="question-source">题目来源</label>
                                    <textarea id="question-source" class="form-control" name="Question[source]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-competition">
                                    <label class="control-label" for="question-competition">所属比赛</label>
                                    <select id="question-competition" class="form-control" name="Question[competition]"></select>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-question-special">
                                    <label class="control-label">特殊judge模式</label>
                                    <input type="hidden" name="Question[special]" value="">
                                    <div id="question-special">
                                        <div class="radio">
                                            <label><input type="radio" name="Question[special]" value="1"> 是</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="Question[special]" value="0" checked=""> 否</label>
                                        </div>
                                    </div>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <button type="submit" class="btn btn-primary">提交</button>
                                <button type="reset" class="btn btn-default">重置</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>