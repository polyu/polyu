<?
header("Content-type:image/gif");
$ch = curl_init();
// 2. 设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, "http://192.168.1.8/snapshot.cgi");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);//http认证
curl_setopt($ch,CURLOPT_USERPWD,"admin:");// http认证
// 3. 执行并获取HTML文档内容
$output = curl_exec($ch);
if($output===false)
{
	die ('error');
}
else
{
	echo $output;
}
// 4. 释放curl句柄
curl_close($ch);
?>