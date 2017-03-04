<input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
<!-- 导航条 -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- 导航条头部 -->
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button> 
			<a href="##" class="navbar-brand">OJ(logo)</a>
		</div>
		
		<!-- 导航条内容 -->
		<div class="collapse navbar-collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
					<li class=""><a href="##">竞赛</a></li>
					<li class=""><a href="##">问题</a></li>
					<li class=""><a href="##">状态</a></li>
					<li class=""><a href="##">排名</a></li>
					<li class=""><a href="##">讨论</a></li>
					<li class=""><a href="##">文件</a></li>
					<li class=""><a href="##">关于</a></li>
					<!-- 为当前页面添加 active 类 -->
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown" id="user-menu" style="display: none;">
			        <a href="##" data-toggle="dropdown" class="dropdown-toggle" style="padding:5px;">
			        	<img src="src/touxiang.jpg" class="img-circle" width="40px;">&nbsp;&nbsp;
			        	<span id="user-name"><?= yii::$app->session['username']?></span><span class="caret"></span>
			        </a>
			        <ul class="dropdown-menu">
			       		<li><a href="##">个人信息</a></li>
			       		<li class="divider"></li>
<!-- 					    <li><a href="##">我的提交</a></li>
			        	<li class="divider"></li>
			        	<li><a href="##">我的排名</a></li>
			        	<li class="divider"></li> -->
			        	<li><button class="btn btn-info" id="logout">退出登录</button></a></li>
			        </ul>
			    </li>
			    <li><button class="btn btn-success" type="button" id="reg-btn">注册</button></li>
			    <li><button class="btn btn-warning" type="button" id="login-btn">登陆</button></li>
		    </ul>
		</div>
	</div>
</nav>

<!-- 注册弹出框 -->
<div class="modal fade" id="reg" tabindex="-1">
    <div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">欢迎来到SUOJ！</h4>
			</div>
			<div class="modal-body">
				<form action="">
					<div class="form-group username">
						<label class="control-label" for="reg-username">用户名：</label>
						<input type="text" class="form-control" id="reg-username" placeholder="请输入您的用户名">
					</div>
					<div class="form-group nickname">
						<label class="control-label" for="reg-nickname">昵称：</label>
						<input type="text" class="form-control" id="reg-nickname" placeholder="请输入您的昵称">
					</div>
					<div class="form-group email">
						<label class="control-label" for="reg-email">邮箱：</label>
						<input type="email" class="form-control" id="reg-email" placeholder="请输入您的邮箱地址">
					</div>
					<div class="form-group psw">
						<label class="control-label" for="reg-psw">密码：</label>
						<input type="password" class="form-control" id="reg-psw" placeholder="请输入您的密码">
					</div>
					<div class="form-group psw-re">
						<label class="control-label" for="reg-psw-re">重复密码：</label>
						<input type="password" class="form-control" id="reg-psw-re" placeholder="请再次输入密码">
					</div>
					<div class="form-group vercode">
						<label class="control-label" for="reg-vercode">验证码：</label>
						<input type="text" class="form-control" id="reg-vercode" placeholder="请输入验证码">
					</div>
					<a href="#" class="verify"><img src="" style="height:40px;"></a>
				</form>
				<p id="reg-res"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" id="reg-submit">注册</button>
			</div>
		</div>
	</div>
</div>

<!-- 登陆弹出框 -->
<div class="modal fade" id="login" tabindex="-1">
    <div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">欢迎登陆SUOJ！</h4>
			</div>
			<div class="modal-body">
				<form action="">
					<div class="form-group username">
						<label class="control-label" for="login-username">用户名：</label>
						<input type="text" class="form-control" id="login-username" placeholder="请输入您的用户名">
					</div>
					<div class="form-group psw">
						<label class="control-label" for="login-psw">密码：</label>
						<input type="password" class="form-control" id="login-psw" placeholder="请输入您的密码">
					</div>
					<div class="form-group vercode">
						<label class="control-label" for="login-vercode">验证码：</label>
						<input type="text" class="form-control" id="login-vercode" placeholder="请输入验证码">
					</div>
					<a href="#" class="verify"><img src="" style="height:40px;"></a>
				</form>
				<p id="login-res"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" id="login-submit">登陆</button>
			</div>
		</div>
	</div>
</div>