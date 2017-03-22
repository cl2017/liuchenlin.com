            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>添加贴子</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form id="w0" action="/index.php?r=admin%2Fforum%2Fedit&amp;id=124" method="post" role="form">
                                <div class="form-group field-article-title">
                                    <label class="control-label" for="article-title">标题</label>
                                    <input type="text" id="article-title" class="form-control" name="Article[title]" value="">
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-article-content">
                                    <label class="control-label" for="article-content">内容</label>
                                    <textarea id="article-content" class="form-control" name="Article[content]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-article-status">
                                    <label class="control-label" for="article-status">状态</label>
                                    <select id="article-status" class="form-control" name="Article[status]">
                                        <option value="1" selected="">正常</option>
                                        <option value="2">精华</option>
                                        <option value="3">置顶</option>
                                        <option value="4">置顶加精</option>
                                    </select>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <button type="submit" class="btn btn-primary">提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>