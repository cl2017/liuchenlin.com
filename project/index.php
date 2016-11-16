<?php  
	$root="/liuchenlin.com/project/";
	scan($root);  //从根目录开始
	function scan($filespath){
		$filesname=scandir($filespath);  //获取根目录所有文件和文件夹的名字 (数组)
		foreach ($filesname as $name) {
			if(is_dir($name)&&$name!="."&&$name!="..") {
				//如果是文件夹 则进入其目录扫描
				scan($root.$name."/");
			}

			else{
				//若不是文件夹 则判断文件是否是html文件
				//echo $name;
				if(end(explode('.', $name))=="html"){  //若是html文件 则增加a标签 完成
					$url = $filespath.$name;
					$aurl= "<a href=\"".$url."\">".$url."</a>";
					echo $aurl . "<br/>";
				}
			}
		}
		return ;
	}
?>