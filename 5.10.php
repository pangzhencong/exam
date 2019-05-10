<?php 
	
	$str="Have you ever gone shopping and";

	function get($str){
		//函数定义
		$len=strlen($str);
		$arr=[];
		//字符串遍历
		for($i=0;$i<$len;$i++){
			if(isset($arr[$str[$i]])){
				$arr[$str[$i]]++;
			}else{
				$arr[$str[$i]]=1;
			}
			if($arr[$str[$i]]>=3){
				return $str[$i];
			}
		}
		//函数返回值
		return $arr($i);
	}
	echo  get($str);




 ?>