<?php /* Smarty version 2.6.18, created on 2012-09-29 12:24:51
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getThumb', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 10, false),array('function', 'videoLink', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 11, false),array('function', 'lang', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 11, false),array('modifier', 'truncate', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 10, false),array('modifier', 'date_format', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 15, false),array('modifier', 'number_format', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 16, false),array('modifier', 'lang', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/manage/account_video.html', 45, false),)), $this); ?>
<?php if ($this->_tpl_vars['control'] == '' || $this->_tpl_vars['control'] == 'view'): ?>
<?php if ($this->_tpl_vars['mode'] == ''): ?><?php $this->assign('mode', 'favorites'); ?><?php endif; ?>
<div class="account_vid_list" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
">
   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_vid[]" id="check_vid-<?php echo $this->_tpl_vars['video']['videoid']; ?>
" value="<?php echo $this->_tpl_vars['video']['videoid']; ?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <div style="padding-left:10px; float:left;width:300px">
        <img src="<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
" width="40" height="30" border="0" class="acc_usr_video_thumb" /><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
<span class="video_control"><a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['video']), $this);?>
"><?php echo smarty_lang(array('code' => 'view'), $this);?>
</a> - <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $this->_tpl_vars['video']['videoid']; ?>
','<?php echo smarty_lang(array('code' => 'remove_fav_video_confirm'), $this);?>
','?mode=<?php echo $this->_tpl_vars['mode']; ?>
&amp;vid_delete=<?php echo $this->_tpl_vars['video']['videoid']; ?>
')" id="delete_icon_a-<?php echo $this->_tpl_vars['video']['videoid']; ?>
"><?php echo smarty_lang(array('code' => 'delete'), $this);?>
</a></span>
        <div class="clearfix"></div></div>
        <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon','<?php echo $this->_tpl_vars['video']['videoid']; ?>
','<?php echo smarty_lang(array('code' => 'remove_fav_video_confirm'), $this);?>
','?mode=<?php echo $this->_tpl_vars['mode']; ?>
&amp;vid_delete=<?php echo $this->_tpl_vars['video']['videoid']; ?>
')" id="delete_icon-<?php echo $this->_tpl_vars['video']['videoid']; ?>
"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" border="0" class="delete_icon" /></a>
        </td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['views'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
 	    <td width="100" class="last_td"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['comments_count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>

 	    </tr>
 	  </table>
   </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['control'] == 'full'): ?>
<?php $this->assign('owner', $this->_tpl_vars['cbvid']->action->get_owner_by_videoid($this->_tpl_vars['video']['videoid'])); ?>
<div class="account_vid_list" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
">
   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_vid[]" id="check_vid-<?php echo $this->_tpl_vars['video']['videoid']; ?>
" value="<?php echo $this->_tpl_vars['video']['videoid']; ?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <div style="padding-left:10px; float:left;width:320px">
        <img src="<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
" width="40" height="30" border="0" class="acc_usr_video_thumb" /><div><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</div>
<span class="video_control"><a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['video']), $this);?>
">view</a> - <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/edit_video.php?vid=<?php echo $this->_tpl_vars['video']['videoid']; ?>
">edit</a> - <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $this->_tpl_vars['video']['videoid']; ?>
','<?php echo smarty_lang(array('code' => 'confirm_del_video'), $this);?>
','?mode=uploaded&amp;vid_delete=<?php echo $this->_tpl_vars['video']['videoid']; ?>
')"  id="delete_icon_a-<?php echo $this->_tpl_vars['video']['videoid']; ?>
">delete</a>  
		
       
        
        </span>
        <div class="clearfix"></div></div>
        
       </td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['views'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
 	    <td width="100"><?php echo $this->_tpl_vars['owner']; ?>
</td>
 	    <td width="100" class="last_td"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['status'])) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</td>
 	    </tr>
 	  </table>
   </div>
<?php endif; ?>


<?php if ($this->_tpl_vars['control'] == 'playlist'): ?>

<div class="account_vid_list" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
">
   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_playlist_items[]" id="check_vid-<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
" value="<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <div style="padding-left:10px; float:left;width:300px">
        <img src="<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
" width="40" height="30" border="0" class="acc_usr_video_thumb" /><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
<span class="video_control"><a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['video']), $this);?>
">view</a> - <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
','<?php echo smarty_lang(array('code' => 'remove_playlist_item_confirm'), $this);?>
','?mode=edit_playlist&pid=<?php echo $this->_tpl_vars['pid']; ?>
&amp;delete_item=<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
')" id="delete_icon_a-<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
">delete</a></span>
        <div class="clearfix"></div></div>
        <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon','<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
','<?php echo smarty_lang(array('code' => 'remove_playlist_item_confirm'), $this);?>
','?mode=edit_playlist&pid=<?php echo $this->_tpl_vars['pid']; ?>
&amp;delete_item=<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
')" id="delete_icon-<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" border="0" class="delete_icon" /></a>
        </td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['views'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
 	    <?php $this->assign('priority', $this->_tpl_vars['cbvid']->action->get_priority_by_playlist_item_id($this->_tpl_vars['video']['playlist_item_id'])); ?>
 	    <td width="100"><input type="text" onchange="updatePriority(this,<?php echo $this->_tpl_vars['video']['playlist_item_id']; ?>
)"  style="width:30px;" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['priority'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
"></td>
 	    </tr>
 	  </table>
   </div>
<?php endif; ?>


<?php if ($this->_tpl_vars['control'] == 'basic'): ?>

<div class="account_vid_list" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
">
   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_vid[]" id="check_vid-<?php echo $this->_tpl_vars['video']['videoid']; ?>
" value="<?php echo $this->_tpl_vars['video']['videoid']; ?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <div style="padding-left:10px; float:left;width:300px">
        <a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['video']), $this);?>
"><img src="<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
" width="40" height="30" border="0" class="acc_usr_video_thumb" /><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</a><br />
        <div class="clearfix"></div></div></td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['views'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
 	    <td width="100"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['comments_count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
 	    </tr>
 	  </table>
   </div>
<?php endif; ?>