<?
define("THIS_PAGE","signup");
define("PARENT_PAGE","signup");
require 'includes/config.inc.php';
$address=$_GET['file'];
if(empty($address))
{
	$address="http://content.bitsontherun.com/videos/3XnJSIm4-kNspJqnJ.mp4";
	echo "<h1>Bad Address</h1>";
}
else
{
	
	if(file_exists(BASEDIR."/files/videos/".$address.".mp4"))
	{
		$address=BASEURL."/files/videos/".$address.".mp4";
	}
	else if(file_exists(BASEDIR."/files/videos/".$address.".flv"))
	{
		$address=BASEURL."/files/videos/".$address.".flv";
	}
	else
	{
		$address="http://content.bitsontherun.com/videos/3XnJSIm4-kNspJqnJ.mp4";
		echo "<h1>Bad Address</h1>";
	}
}
assign("address",$address);
template('blocks/mobile/mobile.html');

?>

</html>


