<?php
/*
 * Created on 2012-9-24
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
define("THIS_PAGE",'manage_playlists');
define("PARENT_PAGE",'videos');

require 'includes/config.inc.php';
$userquery->logincheck();
$udetails = $userquery->get_user_details(userid());
assign('user',$udetails);
assign('p',$userquery->get_user_profile($udetails['userid']));
$cam_id = mysql_clean($_GET['cam_id']);
if($cam_id)
{
	$camera=$cbvid->action->get_camera($cam_id);
	if($camera)
	{
		if($_GET['fullscreen']=='1')
		{
			redirect_to($camera['cam_address']);
		}
		else
		{
			assign("camera",$camera);
			template_files('watch_camera.html');
			display_it();
		}
		
	}
	else
	{
		redirect_to(BASEURL."/");
	}
}
else
{
	redirect_to(BASEURL."/");
}


?>
