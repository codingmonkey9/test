<?php

namespace Bneglect\Publish;

// class ExtensionOfPhp
// {
// 	public function dd($param)
// 	{
// 		if(is_array($param)){
// 			print_r($param);exit;
// 		}elseif(is_bool($param) || is_object($param)){
// 			var_dump($param);exit;
// 		}else{
// 			print_r($param);
// 		}
// 	}
// }

function dd($param)
{
	if(is_array($param)){
		print_r($param);exit;
	}elseif(is_bool($param) || is_object($param)){
		var_dump($param);exit;
	}else{
		print_r($param);
	}
}