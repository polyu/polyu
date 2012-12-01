<?php /* Smarty version 2.6.18, created on 2012-09-29 12:31:48
         compiled from /mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/manage_players.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'website_logo', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/manage_players.html', 41, false),array('modifier', 'date_format', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/manage_players.html', 248, false),)), $this); ?>
<?php if ($this->_tpl_vars['mode'] == 'show_settings'): ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
  <tr>
    <td align="left" class="settings_inner_title">ClipBucket Website Player Settings</td>
    <td width="20" align="right" >&nbsp;</td>
  </tr>
</table>
<div style="width:100%; margin:auto" id="player_size">
<form action="manage_players.php?mode=show_settings" method="post" enctype="multipart/form-data" name="player_settings">
<fieldset class="fieldset" style="border:none">
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block">
<tr>
  <td valign="top"><strong>Pakplayer license</strong><br />
    If you have pakplayer license, please enter it here</td>
  <td valign="top"><input type="text" name="pak_license" id="pak_license" value="<?php echo $this->_tpl_vars['row']['pak_license']; ?>
" /></td>
</tr>
<tr>
<td width="301" valign="top"><label for="autoplay_video"><strong>Autoplay</strong><br />
  if yes, all videos will be played automatically
</label></td>
<td width="813" valign="top">
    <label>
      <input type="radio" name="autoplay_video" value="yes" id="autoplay_video_0" <?php if ($this->_tpl_vars['row']['autoplay_video'] == 'yes'): ?> checked="checked"<?php endif; ?>  />
      Yes</label>
    <label><input type="radio" name="autoplay_video" value="no" id="autoplay_video_1" <?php if ($this->_tpl_vars['row']['autoplay_video'] == 'no'): ?> checked="checked"<?php endif; ?>  />
      No</label></td>
</tr>
<tr>
  <td valign="top"><strong>Use Playlist<br />
    </strong>By turning this on, player will turn on playlists feature in player (if available)</td>
  <td valign="top"><label>
    <input type="radio" name="use_playlist" value="yes" id="use_playlist" <?php if ($this->_tpl_vars['row']['use_playlist'] == 'yes'): ?> checked="checked"<?php endif; ?>  />
    Yes</label>
    <label>
      <input type="radio" name="use_playlist" value="no" id="use_playlist" <?php if ($this->_tpl_vars['row']['use_playlist'] == 'no'): ?> checked="checked"<?php endif; ?>  />
      No</label></td>
</tr>
<tr>
  <td valign="top"><strong>Logo File</strong><br />
    Logo file that will display on your flash player</td>
  <td valign="top"><img src="<?php echo website_logo(array(), $this);?>
" /><br />
    <label>
      <input type="file" name="logo_file" id="logo_file" />
    </label></td>
</tr>
<tr>
  <td valign="top"><strong>Logo Placement</strong><br />
    Placement of logo, top, left , right or bottom</td>
  <td valign="top"><label>
    <select name="logo_placement" id="logo_placement">
      <option value="tl" <?php if ($this->_tpl_vars['row']['logo_placement'] == 'tl'): ?> selected="selected"<?php endif; ?>>Top Left</option>
      <option value="tr" <?php if ($this->_tpl_vars['row']['logo_placement'] == 'tr'): ?> selected="selected"<?php endif; ?>>Top Right</option>
      <option value="br" <?php if ($this->_tpl_vars['row']['logo_placement'] == 'br'): ?> selected="selected"<?php endif; ?>>Bottom Right</option>
      <option value="bl" <?php if ($this->_tpl_vars['row']['logo_placement'] == 'bl'): ?> selected="selected"<?php endif; ?>>Bottom Left</option>
    </select>
  </label></td>
</tr>
<tr>
  <td valign="top"><label for="logo_padding"><strong>Logo Padding</strong></label><br />
    Set logo padding in pixels </td>
  <td valign="top"><input type="text" id="logo_padding" name="logo_padding" value="<?php echo $this->_tpl_vars['row']['logo_padding']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong>Buffer Time</strong><br />
    To control the buffer seconds</td>
  <td valign="top"><label>
    <input type="text" name="buffer_time" id="buffer_time" value="<?php echo $this->_tpl_vars['row']['buffer_time']; ?>
" />
  </label></td>
</tr>
<tr>
  <td valign="top"><strong>Play Youtube Video Inside Player</strong><br />
    this will let you play youtube videos in your player</td>
  <td valign="top"><label>
    <input type="radio" name="youtube_enabled" value="yes" id="youtube_enabled" <?php if ($this->_tpl_vars['row']['youtube_enabled'] == 'yes'): ?> checked="checked"<?php endif; ?>  />
    Yes</label>
    <label>
      <input type="radio" name="youtube_enabled" value="no" id="youtube_enabled" <?php if ($this->_tpl_vars['row']['youtube_enabled'] == 'no'): ?> checked="checked"<?php endif; ?>  />
      No</label></td>
</tr>
<tr>
  <td valign="top"><strong>Embed Player Width</strong><br />
    Enter embedable player width in pixels</td>
  <td valign="top"><label for="embed_player_width"></label>
    <input name="embed_player_width" type="text" id="embed_player_width" value="<?php echo $this->_tpl_vars['row']['embed_player_width']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong>Embed Player Height</strong><br />
    Enter embedable player width in pixels</td>
  <td valign="top"><label for="embed_player_width"></label>
    <input name="embed_player_height" type="text" id="textfield" value="<?php echo $this->_tpl_vars['row']['embed_player_height']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong>Autoplay Embed</strong><br />
    Autoplay embeded video by default</td>
  <td valign="top"> <label>
      <input type="radio" name="autoplay_embed" value="yes" id="autoplay_embed0" <?php if ($this->_tpl_vars['row']['autoplay_embed'] == 'yes'): ?> checked="checked"<?php endif; ?>  />
      Yes</label>
    <label><input type="radio" name="autoplay_embed" value="no" id="autoplay_embed1" <?php if ($this->_tpl_vars['row']['autoplay_embed'] == 'no'): ?> checked="checked"<?php endif; ?>  />
      No</label></td>
</tr>
<tr>
  <td valign="top"><strong>Use PseudoStreaming</strong><br />
    Let users to play video from anywhere, requires h264 streaming module from webserver<br /></td>
  <td valign="top">
    <label>
      <input type="radio" name="pseudostreaming" value="yes" id="pseudostreaming_0"<?php if ($this->_tpl_vars['row']['pseudostreaming'] == 'yes'): ?> checked="checked"<?php endif; ?>  />
      Yes</label>

    <label>
      <input type="radio" name="pseudostreaming" value="no" id="pseudostreaming_1" <?php if ($this->_tpl_vars['row']['pseudostreaming'] == 'no'): ?> checked="checked"<?php endif; ?> />
      No</label>
  </td>
</tr>
<tr>
  <td valign="top"><strong>Pakplayer Context Menu</strong><br />
    Write what you want to display when user right clicks on pakplayer (only if have pak player license)</td>
  <td valign="top"><input type="text" name="pakplayer_contextmsg" id="pakplayer_contextmsg" value="<?php echo $this->_tpl_vars['row']['pakplayer_contextmsg']; ?>
" /></td>
</tr>
<tr>
  <td valign="top">&nbsp;</td>
  <td valign="top">&nbsp;</td>
</tr>
</table>
<div align="left"><input type="submit" class="button" value="Update" name="update" /></div>
</fieldset>

</form><?php echo '
<style type="text/css">

#resizable-channel,#resizable{'; ?>
background-image:url(<?php echo $this->_tpl_vars['imageurl']; ?>
/play_icon.png);  background-repeat:no-repeat; background-position:center<?php echo '}

</style>
<script type="text/javascript">
	function update_player_size(width,height,normal_player,channel_player)
	{
		var page = baseurl+\'/actions/update_configs.php\';
		$.post(page, 
		{ 	
			width : width,
			height : height,
			update_player_size : normal_player,
			update_channel_player_size:channel_player
		},
		function(data)
		{
			if(!data)
				alert("No data");
			else
				$("#msg_box").html(\'<div style="width:300px; padding:5px; text-align:center; background-color:#0099cc; border-radius:5px; -moz-border-radius:5px; color:#fff">\'+data+\'</div>\');
		},\'text\');
	
	}
	
	$(function() {
		$("#resizable").resizable({
			maxHeight: 800,
			maxWidth: 800,
			minHeight: 100,
			minWidth: 100,
			grid: 10,
			resize:function(event,ui){$("#width").val(ui.size.width);$("#height").val(ui.size.height);},
			stop:function(event,ui){update_player_size(ui.size.width,ui.size.height,\'yes\',\'\')}
		});
		
		 $("#width").change(function () {$(\'#resizable\').css("width",this.value+\'px\') ; update_player_size(this.value,$("#height").val(),\'yes\',\'\') });
		 $("#height").change(function () {$(\'#resizable\').css("height",this.value+\'px\');  update_player_size($("#width").val(),this.value,\'yes\',\'\')  });
	});
	
	
	$(function() {
		$("#resizable-channel").resizable({
			maxHeight: 800,
			maxWidth: 800,
			minHeight: 100,
			minWidth: 100,
			grid: 10,
			resize:function(event,ui){$("#channel_width").val(ui.size.width);$("#channel_height").val(ui.size.height);},
			stop:function(event,ui){update_player_size(ui.size.width,ui.size.height,\'\',\'yes\')}
		});
		
		 $("#channel_width").change(function () {$(\'#resizable-channel\').css("width",this.value+\'px\') ; update_player_size(this.value,$("#channel_height").val(),\'\',\'yes\') });
		 $("#channel_height").change(function () {$(\'#resizable-channel\').css("height",this.value+\'px\');  update_player_size($("#channel_width").val(),this.value,\'\',\'yes\')  });
	});
	</script>
'; ?>


<div style="height:30px"></div>
In order to change player size, resize the box given below..
<div style="height:10px"></div>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
  <tr>
    <td align="left" class="settings_inner_title"><div onclick="toggle_search('website_player');" style="cursor:pointer">Main Website Player Size -<span style="font-size:11px; color:#06c"> click here to main website player</span></div></td>
    <td width="20" align="right" >&nbsp;</td>
  </tr>
</table>

<div  class="demo" style="width:100%; margin:auto<?php if ($_COOKIE['website_player_search'] != 'show'): ?>;display:none<?php endif; ?>" id="website_player">
<div id="msg_box" style="margin:5px;"></div>

<div id="resizable" class="ui-widget-content" style="width:<?php echo $this->_tpl_vars['Cbucket']->configs['player_width']; ?>
px; height:<?php echo $this->_tpl_vars['Cbucket']->configs['player_height']; ?>
px; margin:auto">
  <h3 class="ui-widget-header">Original Size of your Main Website Player</h3>
</div>
<div class="player_dims"><label for="width">Width</label>
<input type="text" name="width" id="width" value="<?php echo $this->_tpl_vars['Cbucket']->configs['player_width']; ?>
" />
<label for="height">Height</label>
<input type="text" name="height" id="height" value="<?php echo $this->_tpl_vars['Cbucket']->configs['player_height']; ?>
" />
</div></div>


<div style="height:10px"></div>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
  <tr>
    <td align="left" class="settings_inner_title"><div onclick="toggle_search('channel_player');" style="cursor:pointer">Channel Player Settings Size -<span style="font-size:11px; color:#06c"> click here to edit channel player settings</span></div></td>
    <td width="20" align="right" >&nbsp;</td>
  </tr>
</table>
<div  class="demo" style="width:100%; margin:auto<?php if ($_COOKIE['channel_player_search'] != 'show'): ?>;display:none<?php endif; ?>" id="channel_player">
	
<div id="resizable-channel" class="ui-widget-content" style="width:<?php echo $this->_tpl_vars['Cbucket']->configs['channel_player_width']; ?>
px; height:<?php echo $this->_tpl_vars['Cbucket']->configs['channel_player_height']; ?>
px; margin:auto">
	<h3 class="ui-widget-header">Original Size of your Main Website Player</h3>
</div>
<div class="player_dims"><label for="width">Width</label>
<input type="text" name="width" id="channel_width" value="<?php echo $this->_tpl_vars['Cbucket']->configs['channel_player_width']; ?>
" />
<label for="height">Height</label>
<input type="text" name="height" id="channel_height" value="<?php echo $this->_tpl_vars['Cbucket']->configs['channel_player_height']; ?>
" />
</div></div>

</div>


<?php else: ?>


<div style="height:35px"></div>

<h2>Selected Player</h2>
<div>
<?php $this->assign('player_dir', $this->_tpl_vars['Cbucket']->configs['player_dir']); ?>
<?php $this->assign('player_file', $this->_tpl_vars['Cbucket']->configs['player_file']); ?>

<?php $this->assign('curplayer', $this->_tpl_vars['cbplayer']->getPlayerDetails($this->_tpl_vars['player_file'],$this->_tpl_vars['player_dir'])); ?>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="190"><img src="<?php echo $this->_tpl_vars['cbplayer']->get_preview_thumb($this->_tpl_vars['curplayer']['folder']); ?>
" class="preview_thumb"  ></td>
    <td valign="top"><h2 style="display:inline"><?php echo $this->_tpl_vars['curplayer']['name']; ?>
</h2> &#8212; <em><a href="<?php echo $this->_tpl_vars['curplayer']['author_page']; ?>
"><strong><?php echo $this->_tpl_vars['curplayer']['author']; ?>
</strong></a></em><br />
<?php echo $this->_tpl_vars['curplayer']['description']; ?>
<br />
Version : <?php echo $this->_tpl_vars['curplayer']['version']; ?>
 Released on <?php echo ((is_array($_tmp=$this->_tpl_vars['curplayer']['released'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
<br />
Website : <a href="<?php echo $this->_tpl_vars['curplayer']['website']; ?>
"><?php echo $this->_tpl_vars['curplayer']['website']; ?>
</a></td>
  </tr>
</table>


</div>

<hr size="1" noshade />
<h2>Available Players</h2>


<?php $this->assign('players', $this->_tpl_vars['cbplayer']->get_players()); ?>

<div class="templates_container">
<?php $_from = $this->_tpl_vars['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['player']):
?>
<?php if ($this->_tpl_vars['player_file'] != $this->_tpl_vars['player']['file'] && $this->_tpl_vars['player_dir'] != $this->_tpl_vars['player']['folder']): ?>

	<div class="template_box" align="center">
    	<img src="<?php echo $this->_tpl_vars['cbplayer']->get_preview_thumb($this->_tpl_vars['player']['folder']); ?>
" class="preview_thumb" >
<div align="center" style="" class="tpl_title">
        	<?php echo $this->_tpl_vars['player']['name']; ?>
 <br /><em>by <strong><a href="<?php echo $this->_tpl_vars['player']['author_page']; ?>
"><?php echo $this->_tpl_vars['player']['author']; ?>
</a></strong></em><br />
        <a href="manage_players.php?set=yes&folder=<?php echo $this->_tpl_vars['player']['folder']; ?>
&file=<?php echo $this->_tpl_vars['player']['file']; ?>
">Activate This Player</a><br />
</div>
    </div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</div>

<?php endif; ?>