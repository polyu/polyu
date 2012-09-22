<?php
/*
 * Created on 2012-9-12
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
define("THIS_PAGE",'watch_playlist');
require 'includes/config.inc.php';
$userquery->perm_check('view_video',true);
$pages->page_redir();
$playlist_id = mysql_clean($_GET['playlist']);
if($playlist_id)
{
	$playlist=$cbvid->action->get_playlist($playlist_id);
	if($playlist)
	{
		$playlist_detail=$cbvid->action->gen_playlist($playlist_id);
		$count=$cbvid->action->count_playlist_items($playlist_id);
		
		assign("playlistitems",$playlistitems);
		assign("playlist",$playlist);
		assign("count",$count);
		assign("playlist_detail",$playlist_detail);
		template_files('watch_playlist.html');
		display_it();
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
