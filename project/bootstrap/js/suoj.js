//初始化页面
$(document).ready(function () {
	if($('#user-name').html()!="")
		$("#reg-btn,#login-btn,#user-menu").toggle();
});

//注册登录按钮点击弹出
$("#reg-btn").click(function () {
	$("#reg").modal();
	$(".verify :first-child").attr("src","/biyesheji/web/index.php?r=common%2Fbuildverifycode");
	clear_modal();
});
$("#login-btn").click(function () {
	$("#login").modal();
	$(".verify :first-child").attr("src","/biyesheji/web/index.php?r=common%2Fbuildverifycode");
	clear_modal();
});
//重置弹出层样式
function clear_modal() {
	$('.username,.nickname,.email,.psw,.psw-re,.vercode').removeClass("has-error");
	$("#reg-res,#login-res").html("").removeClass("alert alert-danger");
}

//登录/注册ajax提交验证
$("#reg-submit").click(function(){ 
	clear_modal();
	$.ajax({ 
	    type: "POST",
		url: "./web/index.php?r=member/signup",
		data: {
			"Member[username]": $("#reg-username").val(), 
			"Member[nickname]": $("#reg-nickname").val(),
			"Member[password]": $("#reg-psw").val(),
			"Member[repassword]": $("#reg-psw-re").val(),
			"Member[email]": $("#reg-email").val(),
			"Member[verifycode]": $("#reg-vercode").val(),
			"_csrf":$("#_csrf").val()
		},
		dataType: "json",
		success: function(data){
			if (data.success == 1) {
				$("#reg").modal("hide");
				$("#reg-btn,#login-btn,#user-menu").toggle();
				toastr.success('注册成功！');
			} else {
				$("#reg-res").html("出现错误：" + data.msg).addClass("alert alert-danger");
				$('.username,.nickname,.email,.psw,.psw-re,.vercode').addClass("has-error");
			}
		},
		error: function(jqXHR){  
		   $("#reg-res").html("发生错误！状态码：" + jqXHR.status).addClass("alert alert-danger");
		},
	});
});
$("#login-submit").click(function(){ 
	clear_modal();
	$.ajax({ 
	    type: "POST",
		url: "./web/index.php?r=member/login",
		data: {
			"Member[username]": $("#login-username").val(), 
			"Member[password]": $("#login-psw").val(),
			"Member[verifycode]": $("#login-vercode").val(),
			"_csrf":$("#_csrf").val()
		},
		dataType: "json",
		success: function(data){
			if (data.success == 1) {
				$("#login").modal("hide");
				$("#reg-btn,#login-btn,#user-menu").toggle();
				$("#user-name").html(data.name);
				toastr.success('登陆成功！');
			} else {
				$("#login-res").html("出现错误：" + data.msg).addClass("alert alert-danger");
				$('.psw,.username').addClass("has-error");
			}
		},
		error: function(jqXHR){
			$("#login-res").html("发生错误！状态码：" + jqXHR.status).addClass("alert alert-danger");
		},
	});
});
//退出登录
$("#logout").click(function(){
	$.ajax({ 
	    type: "GET",
		url: "./web/index.php?r=member/logout",
		success: function(data){
			if (data.success == 1) {
				$(".dropdown-toggle").dropdown();
				$("#reg-btn,#login-btn,#user-menu").toggle();
				toastr.success('您已退出登录！');
			} else {
				toastr.error('退出登录失败！错误原因：'+data.msg);
			}
		},
		error: function(jqXHR){
			toastr.error('退出登录失败！错误原因：'+jqXHR.status);
		},
	});
});
//验证码更换
$(".verify").click(function(){
	var verify = $(".verify :first-child").attr("src");
	$(".verify :first-child").attr("src",verify);
});
// 回车触发提交
$('#login-psw').keydown(function () {
	if(event.keyCode == "13"){
		$('#login-submit').click();
	}
});

//提示框配置
toastr.options = {  
        closeButton: false,  
        debug: false,  
        progressBar: false,  
        positionClass: "toast-center-center",  
        onclick: null,  
        showDuration: "300",  
        hideDuration: "1000",  
        timeOut: "2000",  
        extendedTimeOut: "1000",  
        showEasing: "swing",  
        hideEasing: "linear",  
        showMethod: "fadeIn",  
        hideMethod: "fadeOut"  
};