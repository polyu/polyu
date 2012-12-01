<?php /* Smarty version 2.6.18, created on 2012-11-30 19:31:29
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getname', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html', 26, false),array('modifier', 'getext', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html', 27, false),array('modifier', 'get_thumb_num', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html', 27, false),array('function', 'lang', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html', 27, false),array('function', 'videoLink', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html', 44, false),array('function', 'ANCHOR', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/edit_video.html', 79, false),)), $this); ?>
<?php $this->assign('video_fields', $this->_tpl_vars['Upload']->load_video_fields($this->_tpl_vars['v'])); ?>
<?php $this->assign('playlists', $this->_tpl_vars['cbvid']->action->get_playlists()); ?>
<?php $this->assign('cameras', $this->_tpl_vars['cbvid']->action->get_cameras()); ?>
<?php $this->assign('currentcamera', $this->_tpl_vars['cbvid']->action->get_camera_by_video($this->_tpl_vars['v']['videoid'])); ?>

<div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/manage/account_left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
 <div class="account_box">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/manage/account_head.html", 'smarty_include_vars' => array('user' => $this->_tpl_vars['user'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
 
 <!-- EDITING <?php echo $this->_tpl_vars['v']['title']; ?>
 -->
 <h2>Edit Video</h2> 
 
 
 <div class="account_form">
 <form method="post" name="edit_video">
  
 <fieldset class="fieldset">
    <legend>Thumbs</legend>
 <?php $this->assign('vidthumbs', get_thumb(($this->_tpl_vars['v']),1,TRUE,false,true,false)); ?>
 <?php $_from = $this->_tpl_vars['vidthumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vid_thumb']):
?>
    	<div style="width:140px; float:left" align="center">
    	<label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['vid_thumb']; ?>
" border="1" style="margin:4px" /><br />
        <input type="radio" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
.<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getext', true, $_tmp) : getext($_tmp)); ?>
" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
" name="default_thumb" <?php if ($this->_tpl_vars['v']['default_thumb'] == ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('get_thumb_num', true, $_tmp) : get_thumb_num($_tmp))): ?> checked="checked"<?php endif; ?> /><?php echo smarty_lang(array('code' => 'default'), $this);?>
</label><br />
 </div>
 <?php endforeach; endif; unset($_from); ?>
 </fieldset>

 
  

 <?php $_from = $this->_tpl_vars['video_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>
 <?php if ($this->_tpl_vars['field_group']['group_id'] == 'required_fields'): ?>
 <fieldset class="fieldset">
 <legend><?php echo $this->_tpl_vars['field_group']['group_name']; ?>
</legend>
 
 <?php if ($this->_tpl_vars['field_group']['group_id'] == 'required_fields'): ?>
 
 <div class="account_field_block">
 <div class="account_field_label" align="right"><strong><label for="videoLink"><?php echo smarty_lang(array('code' => 'video_link'), $this);?>
</label></strong></div>
 <div class="account_field"><textarea onclick="this.select()"  ><?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['v']), $this);?>
</textarea></div>
 <div class="clearfix"></div>
 </div>
 
 <div class="account_field_block">
 <div class="account_field_label" align="right"><strong><label for="playlist_id"><?php echo smarty_lang(array('code' => 'playlists'), $this);?>
</label></strong></div>
 <div class="account_field">
 <select id="playlist_id" name="playlist_id">
 	<option value="-1" selected="selected">Click here to modify.</option>
<?php unset($this->_sections['plist']);
$this->_sections['plist']['name'] = 'plist';
$this->_sections['plist']['loop'] = is_array($_loop=$this->_tpl_vars['playlists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['plist']['show'] = true;
$this->_sections['plist']['max'] = $this->_sections['plist']['loop'];
$this->_sections['plist']['step'] = 1;
$this->_sections['plist']['start'] = $this->_sections['plist']['step'] > 0 ? 0 : $this->_sections['plist']['loop']-1;
if ($this->_sections['plist']['show']) {
    $this->_sections['plist']['total'] = $this->_sections['plist']['loop'];
    if ($this->_sections['plist']['total'] == 0)
        $this->_sections['plist']['show'] = false;
} else
    $this->_sections['plist']['total'] = 0;
if ($this->_sections['plist']['show']):

            for ($this->_sections['plist']['index'] = $this->_sections['plist']['start'], $this->_sections['plist']['iteration'] = 1;
                 $this->_sections['plist']['iteration'] <= $this->_sections['plist']['total'];
                 $this->_sections['plist']['index'] += $this->_sections['plist']['step'], $this->_sections['plist']['iteration']++):
$this->_sections['plist']['rownum'] = $this->_sections['plist']['iteration'];
$this->_sections['plist']['index_prev'] = $this->_sections['plist']['index'] - $this->_sections['plist']['step'];
$this->_sections['plist']['index_next'] = $this->_sections['plist']['index'] + $this->_sections['plist']['step'];
$this->_sections['plist']['first']      = ($this->_sections['plist']['iteration'] == 1);
$this->_sections['plist']['last']       = ($this->_sections['plist']['iteration'] == $this->_sections['plist']['total']);
?>
<option value="<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
"> <?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_name']; ?>
</option>
<?php endfor; endif; ?>
	</select>
	</div>
 <div class="clearfix"></div>
 </div>
 
 <div class="account_field_block">
 <div class="account_field_label" align="right"><strong><label for="playlist_id"><?php echo smarty_lang(array('code' => 'Camera'), $this);?>
</label></strong></div>
 <div class="account_field">
 <select id="camera_id" name="camera_id">
 	
 	<option value="-1">None</option>
<?php unset($this->_sections['plist']);
$this->_sections['plist']['name'] = 'plist';
$this->_sections['plist']['loop'] = is_array($_loop=$this->_tpl_vars['cameras']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['plist']['show'] = true;
$this->_sections['plist']['max'] = $this->_sections['plist']['loop'];
$this->_sections['plist']['step'] = 1;
$this->_sections['plist']['start'] = $this->_sections['plist']['step'] > 0 ? 0 : $this->_sections['plist']['loop']-1;
if ($this->_sections['plist']['show']) {
    $this->_sections['plist']['total'] = $this->_sections['plist']['loop'];
    if ($this->_sections['plist']['total'] == 0)
        $this->_sections['plist']['show'] = false;
} else
    $this->_sections['plist']['total'] = 0;
if ($this->_sections['plist']['show']):

            for ($this->_sections['plist']['index'] = $this->_sections['plist']['start'], $this->_sections['plist']['iteration'] = 1;
                 $this->_sections['plist']['iteration'] <= $this->_sections['plist']['total'];
                 $this->_sections['plist']['index'] += $this->_sections['plist']['step'], $this->_sections['plist']['iteration']++):
$this->_sections['plist']['rownum'] = $this->_sections['plist']['iteration'];
$this->_sections['plist']['index_prev'] = $this->_sections['plist']['index'] - $this->_sections['plist']['step'];
$this->_sections['plist']['index_next'] = $this->_sections['plist']['index'] + $this->_sections['plist']['step'];
$this->_sections['plist']['first']      = ($this->_sections['plist']['iteration'] == 1);
$this->_sections['plist']['last']       = ($this->_sections['plist']['iteration'] == $this->_sections['plist']['total']);
?>
<option value="<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
" <?php if ($this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_name'] == $this->_tpl_vars['currentcamera']): ?>selected="selected"<?php endif; ?>> <?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_name']; ?>
</option>
<?php endfor; endif; ?>
	</select>
	</div>
 <div class="clearfix"></div>
 </div>
 <?php endif; ?>
 <?php $_from = $this->_tpl_vars['field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
  
 <div class="account_field_block" <?php if ($this->_tpl_vars['field']['title'] == 'Video Category'): ?> style="display:none"<?php endif; ?>>
 <div class="account_field_label" align="right"><strong><label for="<?php echo $this->_tpl_vars['field']['id']; ?>
"><?php echo $this->_tpl_vars['field']['title']; ?>
</label></strong></div>
 <div class="account_field"><?php echo $this->_tpl_vars['field']['hint_1']; ?>
<?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_before']), $this);?>
<?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['field']); ?>
<?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_after']), $this);?>

 <br>
 <?php echo $this->_tpl_vars['field']['hint_2']; ?>
</div>
 <div class="clearfix"></div>
 </div>

  
 <?php endforeach; endif; unset($_from); ?>

 </fieldset>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>

 
 <div align="right"><button name="update_video" id="button" value="submit" class="cb_button"><?php echo smarty_lang(array('code' => 'update_video'), $this);?>
</button></div>

 </form> 
 </div>
 
 
 <!-- ENDING EDITING <?php echo $this->_tpl_vars['v']['title']; ?>
 -->
 
 
 </div>
 <div class="clearfix"></div>
</div>