            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>添加比赛</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form id="w0" action="/?r=admin/oj/addmatch" method="post" role="form">
                                <div class="form-group field-match-title">
                                    <label class="control-label" for="match-title">Title</label>
                                    <input type="text" id="match-title" class="form-control" name="Match[title]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-desc">
                                    <label class="control-label" for="match-desc">Desc</label>
                                    <textarea id="match-desc" class="form-control" name="Match[desc]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-begin_year">
                                    <label class="control-label" for="match-begin_year">Begin Year</label>
                                    <input type="text" id="match-begin_year" class="form-control" name="Match[begin_year]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-begin_month">
                                    <label class="control-label" for="match-begin_month">Begin Month</label>
                                    <input type="text" id="match-begin_month" class="form-control" name="Match[begin_month]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-begin_day">
                                    <label class="control-label" for="match-begin_day">Begin Day</label>
                                    <input type="text" id="match-begin_day" class="form-control" name="Match[begin_day]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-begin_hour">
                                    <label class="control-label" for="match-begin_hour">Begin Hour</label>
                                    <input type="text" id="match-begin_hour" class="form-control" name="Match[begin_hour]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-begin_min">
                                    <label class="control-label" for="match-begin_min">Begin Min</label>
                                    <input type="text" id="match-begin_min" class="form-control" name="Match[begin_min]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-end_year">
                                    <label class="control-label" for="match-end_year">End Year</label>
                                    <input type="text" id="match-end_year" class="form-control" name="Match[end_year]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-end_month">
                                    <label class="control-label" for="match-end_month">End Month</label>
                                    <input type="text" id="match-end_month" class="form-control" name="Match[end_month]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-end_day">
                                    <label class="control-label" for="match-end_day">End Day</label>
                                    <input type="text" id="match-end_day" class="form-control" name="Match[end_day]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-end_hour">
                                    <label class="control-label" for="match-end_hour">End Hour</label>
                                    <input type="text" id="match-end_hour" class="form-control" name="Match[end_hour]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-end_min">
                                    <label class="control-label" for="match-end_min">End Min</label>
                                    <input type="text" id="match-end_min" class="form-control" name="Match[end_min]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-match-langmask">
                                    <label class="control-label" for="match-langmask">Langmask</label>
                                    <select id="match-langmask" class="form-control" name="Match[langmask]">
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
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-match-status">
                                    <label class="control-label" for="match-status">Status</label>
                                    <select id="match-status" class="form-control" name="Match[status]">
                                        <option value="1">公开</option>
                                        <option value="2">指定人员参与</option>
                                        <option value="3">输入密码参与</option>
                                    </select>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <button type="submit" class="btn-primary btn">提交</button>
                                <button type="reset" class="btn-default btn">提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>