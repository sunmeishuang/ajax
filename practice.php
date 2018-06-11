<?php
header("Content-type:text/html;charset=utf-8");
header('Cache-Control:no-cache');  // 不缓存

// 获取user数据
$user = $_POST['user'];
// 判断获得的数据
if($user == 'lisi'){
	echo 1;
}else{
	echo 0;
}