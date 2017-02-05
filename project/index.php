<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cl's project</title>
	<link href="//cdn.bootcss.com/normalize/5.0.0/normalize.min.css" rel="stylesheet">
	<style type="text/css">
		.title{
			font-size: 20px;
			line-height: 2;
			margin-left: 20px;
		}
		.link{
			margin-left: 20px;

		}
	</style>
</head>
<body>
	<p class="title">当前Project目录所有html文件如下:</p>
	<div class="link">
		<?php
			scan("./");  //从此文件所在目录开始
			function scan($filespath){
				$filesname=scandir($filespath);  //获取根目录所有文件和文件夹的名字 (数组)
				foreach ($filesname as $name) {
					if(is_dir($name)&&$name!="."&&$name!="..") {  //排除当前目录./ 和上级目录 ../
						//如果是文件夹 则进入其目录扫描
						scan($name."/");
					}

					else{
						//若不是文件夹 则判断文件是否是html文件
						//echo $name;
						if(end(explode('.', $name))=="html"){  //若是html文件 则为其增加a标签 
							if($filespath=="./") $filespath="";
							$url = $filespath.$name;
							$aurl= "<a href=\"".$url."\" target=\"_blank\" >".$url."</a>";
							echo "<li>".$aurl."</li>";
						}
					}
				}
				return ;
			}
		?>
	</div>
</body>
</html>


