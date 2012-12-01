<?php
session_start();  
header("Content-type:image/gif");
header("cache-control:no-cache,must-revalidate");
$address=$_SESSION['cam_address'];
// 1. 初始化
$ch = curl_init();
// 2. 设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, $address);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
if($_SESSION['videouser'])
{
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);//http认证
	curl_setopt($ch,CURLOPT_USERPWD,$_SESSION['videouser'].":".$_SESSION['videopass']);
}


// 3. 执行并获取HTML文档内容
$output = curl_exec($ch);
if($output!==false)
{
	echo $output;
}
// 4. 释放curl句柄
curl_close($ch);
?>