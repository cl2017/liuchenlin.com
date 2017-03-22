            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>添加新闻</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form id="w0" action="/?r=admin/news/add" method="post" role="form">
                                <div class="form-group field-news-title">
                                    <label class="control-label" for="news-title">文章标题</label>
                                    <input type="text" id="news-title" class="form-control" name="News[title]">
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-news-content">
                                    <label class="control-label" for="news-content">文章内容</label>
                                    <textarea id="news-content" class="form-control" name="News[content]"></textarea>
                                    <p class="help-block help-block-error"></p>
                                </div><div class="form-group field-news-status">
                                    <label class="control-label">是否置顶</label>
                                    <input type="hidden" name="News[status]" value="">
                                    <div id="news-status">
                                        <div class="radio">
                                            <label><input type="radio" name="News[status]" value="1" checked> 正常</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="News[status]" value="5"> 置顶</label>
                                        </div>
                                    </div>
                                    <p class="help-block help-block-error"></p>
                                </div>
                                <button type="submit" class="btn-primary btn">提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>