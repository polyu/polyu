<?php /* Smarty version 2.6.18, created on 2012-09-29 12:32:01
         compiled from /mnt/array1/www/htdocs/wwwroot/player/cbplayer/cbplayer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getThumb', '/mnt/array1/www/htdocs/wwwroot/player/cbplayer/cbplayer.html', 10, false),)), $this); ?>

<div id="mediaplayer">Loading player, please wait....</div>
<script type="text/javascript">
var cb_player_file = '<?php echo $this->_tpl_vars['cb_player_url']; ?>
/player.swf';
var cb_player_url = '<?php echo $this->_tpl_vars['cb_player_url']; ?>
';
var player_logo = '<?php echo $this->_tpl_vars['player_logo']; ?>
';
var hq_video_file = '<?php echo $this->_tpl_vars['hq_vid_file']; ?>
';
var normal_video_file = '<?php echo $this->_tpl_vars['normal_vid_file']; ?>
';
var ytcode = '<?php echo $this->_tpl_vars['ytcode']; ?>
';
var preview_img = '<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['vdata'],'size' => 'big'), $this);?>
';
var embed_type = '<?php echo $this->_tpl_vars['Cbucket']->configs['embed_type']; ?>
';
var playlist_detail=<?php echo $this->_tpl_vars['playlist_detail']; ?>
;
var remote_url='<?php echo $this->_tpl_vars['vdata']['remote_play_url']; ?>
';
		jwplayer("mediaplayer").setup({
		flashplayer: cb_player_file,
		fullscreen: 'true',
		skin:cb_player_url+'/skins/NewTubeDark.xml',
		<?php if ($this->_tpl_vars['normal_vid_file']): ?>
		file: normal_video_file,
		
		<?php else: ?>
		playlist:<?php echo $this->_tpl_vars['playlist_detail']; ?>
,
		'playlist.position': 'right',
       'playlist.size': '320',
       repeat: 'list',
		<?php endif; ?>
		
		image: preview_img,
		width: '100%',
		height:'<?php echo $this->_tpl_vars['player_data']['height']; ?>
',
		autostart : '<?php echo $this->_tpl_vars['player_data']['autoplay']; ?>
',
		
		<!-- Setting Pseudo Streaming -->
		<?php if ($this->_tpl_vars['Cbucket']->configs['pseudostreaming'] == 'yes'): ?>provider: 'http',<?php endif; ?>
		
		<!-- Setting Plugins -->
		'plugins':
		{
			
			'player/cbplayer/plugins/plugin.js': {
            text: 'Hello world!'
          }
		
			
		}
		,
		
		<!-- For Licensensed Players -->
  		<!-- Setting Logo -->
		'logo':{
			file :player_logo ,
			link :baseurl,
			margin : '<?php echo $this->_tpl_vars['logo_margin']; ?>
',
			position : '<?php echo $this->_tpl_vars['logo_placement']; ?>
',
			
			hide:'false'
		},
		<!-- Ending Logo Settings-->
		
		
		
		<!-- Events And JS Api -->
		events:{
			onComplete:function()
			{
				
			},
			onPlay:function()
			{
			
					if(normal_video_file=='')
					{
						
						var item=jwplayer("mediaplayer").getPlaylistItem();
						if(item['remoteurl']==''||item['remoteurl']==undefined)
							{
								jwplayer("mediaplayer").getPlugin("dock").setButton('helloworld');
							}
						else
							{
								jwplayer("mediaplayer").getPlugin("dock").setButton('helloworld', OpenLiveVideo, 'player/cbplayer/skins/live.png', 'player/cbplayer/skins/live.png');
								
							}
					}
					else
					{
						if(remote_url!='')
							jwplayer("mediaplayer").getPlugin("dock").setButton('helloworld', OpenLiveVideo, 'player/cbplayer/skins/live.png', 'player/cbplayer/skins/live.png');
						
					}
				
			}
		}
	});
</script>

<div id="LiveVideo" style="display:none" title="Live Video">
<iframe id="LiveVideoBox" src="" style="width:100%;height:500px;border-width:0;"></iframe>
</div>
<script>

<?php echo '
//script for adjustlist


function OpenLiveVideo()
{
	jwplayer("mediaplayer").pause();
	jwplayer("mediaplayer").setFullscreen(false);
	if(remote_url==\'\')
	{
	var item=jwplayer("mediaplayer").getPlaylistItem();
	$("#LiveVideoBox").attr("src","watch_camera.php?fullscreen=1&cam_id="+item[\'remoteurl\']);
	}
	else
	{
	$("#LiveVideoBox").attr("src","watch_camera.php?fullscreen=1&cam_id="+remote_url);
	}
	$( "#LiveVideo" ).dialog({
	height: 600,
	width:900,
	buttons: {
				"OK": function() {
					$( this ).dialog( "close" );
				}
		}
	});
}
'; ?>

</script>