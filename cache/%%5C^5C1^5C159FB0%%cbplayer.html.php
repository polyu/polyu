<?php /* Smarty version 2.6.18, created on 2012-09-21 08:12:41
         compiled from /home/wwwroot/player/cbplayer/cbplayer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getThumb', '/home/wwwroot/player/cbplayer/cbplayer.html', 10, false),)), $this); ?>

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

		jwplayer("mediaplayer").setup({
		flashplayer: cb_player_file,
		fullscreen: 'true',
		skin:cb_player_url+'/skins/NewTubeDark.xml',
		<?php if ($this->_tpl_vars['ytcode']): ?>
		file: 'http://www.youtube.com/watch?v=<?php echo $this->_tpl_vars['ytcode']; ?>
',
		<?php endif; ?>
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
		<!-- Setting context menu -->
		'abouttext' : '<?php echo $this->_tpl_vars['Cbucket']->configs['pakplayer_contextmsg']; ?>
',
		'aboutlink' : baseurl,
		<!-- Setting context menu ends -->
		
		
		<!-- Events And JS Api -->
		events:{
			onComplete:function()
			{
				
			},
			onPlay:function()
			{
				
			}
		}
	});
</script>