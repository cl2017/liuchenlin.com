$('#upload-btn').click(function () {
	$('#upload').modal();
});

$(function () {
	var bar = $('.bar');
	var percent = $('.percent');
	var showimg = $('#showimg');
	var progress = $(".progress");
	var files = $(".files");
	var btn = $(".btn span");

    $("#fileupload").change(function(){
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {
        		showimg.empty();
				progress.show();
        		var percentVal = '0%';
        		bar.width(percentVal);
        		percent.html(percentVal);
				btn.html("上传中...");
    		},
    		uploadProgress: function(event, position, total, percentComplete) {
        		var percentVal = percentComplete + '%';
        		bar.width(percentVal);
        		percent.html(percentVal);
    		},
			success: function(data) {
				files.html("添加成功! <b>"+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'>删除</span>");
				var img = "./files/"+data.pic;
				showimg.html("<img src='"+img+"'>");
				btn.html("添加附件");

				$(".delimg").on('click',function(){
					var pic = $(this).attr("rel");
					$.post("action.php?act=delimg",{imagename:pic},function(msg){
						if(msg==1){
							files.html("删除成功.");
							showimg.empty();
							progress.hide();
						}else{
							alert(msg);
						}
					});
				}); //绑定点击删除事件
			},
			error:function(xhr){
				btn.html("上传失败");
				bar.width('0')
				files.html(xhr.responseText);
			}
		});
	});

});