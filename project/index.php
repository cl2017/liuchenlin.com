<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cl's project</title>
</head>
<body>
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
						$aurl= "<a href=\"".$url."\">".$url."</a>";
						echo "<li>".$aurl."</li>";
					}
				}
			}
			return ;
		}
	?>
</body>
</html>


