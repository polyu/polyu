<?php

/**
 * Manage Playlist Page
 * @author : Arslan hassan
 * @Software: ClipBucket
 * @License : Attribution Assurance License -- http://www.opensource.org/licenses/attribution.php
 */

define("THIS_PAGE",'manage_playlists');
define("PARENT_PAGE",'videos');

require 'includes/config.inc.php';
$userquery->logincheck();
$udetails = $userquery->get_user_details(userid());
assign('user',$udetails);
assign('p',$userquery->get_user_profile($udetails['userid']));


$mode = $_GET['mode'];

$page = mysql_clean($_GET['page']);
$get_limit = create_query_limit($page,VLISTPP);


switch($mode)
{
	case 'manage_camera':
	case 'manage_live_camera':
	default:
	{
		
		//Deleting Playlist
		if(!empty($_GET['delete_camera']))
		{
			$plid = mysql_clean($_GET['delete_camera']);
			$cbvid->action->delete_camera($plid);
			
		}
		
		if(isset($_POST['delete_cameras']))
		{
			$cameras = post('check_camera');
			
			if(count($cameras)>0)
			{
				foreach($cameras as $camera)
				{
					$camera = mysql_clean($camera);
					$cbvid->action->delete_camera($camera);
				}
				
				if(!error())
				{
					$eh->flush();
					e(lang("cameras_have_been_removed"),"m");
				}else
				{
					$eh->flush();
					e(lang("camera_not_exist"));
				}
			}else
				e(lang("no_camera_was_selected_to_delete"));
			
		}
		
		
		//Adding New Playlist
		if(isset($_POST['add_camera']))
		{
			$params = array('name'=>mysql_clean($_POST['name']),'describe'=>mysql_clean($_POST['describe']),'address'=>mysql_clean($_POST['address']));
			$cbvid->action->create_camera($params);
		}
		
		assign('mode','manage_cameras');
		//Getting List of available playlists
		$cameras = $cbvid->action->get_cameras();
		assign('cameras',$cameras);
		
		
	}
	break;
	
	case 'edit_camera':
	{
		assign('mode','edit_camera');
		$pid = $_GET['pid'];
		
		if(isset($_POST['edit_camera']))
		{
			$params = array('name'=>mysql_clean($_POST['name']),'describe'=>mysql_clean($_POST['describe']),'address'=>mysql_clean($_POST['address']),'pid'=>mysql_clean($pid));
			$cbvid->action->edit_camera($params);
		}
		assign('camera',$cbvid->action->get_camera($pid));	
		
	}
	break;
}


template_files('manage_cameras.html');
display_it();
?>