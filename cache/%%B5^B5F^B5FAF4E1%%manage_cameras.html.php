<?php /* Smarty version 2.6.18, created on 2012-09-29 12:25:07
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/manage_cameras.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/manage_cameras.html', 7, false),array('modifier', 'truncate', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/manage_cameras.html', 63, false),array('modifier', 'date_format', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/manage_cameras.html', 67, false),)), $this); ?>
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
 
 <?php if ($this->_tpl_vars['mode'] == 'manage_cameras'): ?>
  <h2><?php echo smarty_lang(array('code' => 'manage_cameras'), $this);?>
</h2>
  
  <!-- ADD NEW camera -->
    <div class="account_form">
    <form method="post" name="edit_profile">
    <fieldset class="fieldset">
    <legend><?php echo smarty_lang(array('code' => 'add_new_camera'), $this);?>
</legend>
    
    <div class="account_field_block clearfix">
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'cam_name'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="name" type="text" id="name" style="margin-bottom:10px"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'des_title'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="describe" type="text" id="describe" style="margin-bottom:10px"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'cam_address'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="address" type="text" id="address" style="margin-bottom:10px"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'videouser'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="videouser" type="text" id="videouser" style="margin-bottom:10px"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'videopass'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="videopass" type="password" id="videopass" style="margin-bottom:10px"></div>
    </div>
	
    <div align="right"><button name="add_camera" id="button" value="submit" class="cb_button_2"><?php echo smarty_lang(array('code' => 'add_new_camera'), $this);?>
</button></div>

    </fieldset>
    </form>
    </div>
  <!-- Add new camera -->
  
  
  <!-- Getting List of camera -->
  <form name="manage_cameras" method="post">
  
  <input type="submit" class="cb_button_2" value="<?php echo smarty_lang(array('code' => 'delete_selected'), $this);?>
" style="margin-bottom:10px" name="delete_cameras"/>
  
  <div class="account_table">
   
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
 	      </td>
 	    <td><?php echo smarty_lang(array('code' => 'title'), $this);?>
</td>
 	    <td width="130"><?php echo smarty_lang(array('code' => 'des_title'), $this);?>
</td>
 	    <td width="130"><?php echo smarty_lang(array('code' => 'cam_address'), $this);?>
</td>
 	    <td width="130"><?php echo smarty_lang(array('code' => 'date_added'), $this);?>
</td>
 	    </tr>
 	  </table>
      
  </div>
  <?php $this->assign('bg', 'fff'); ?>
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
    <div class="account_vid_list" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
">
   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_camera[]" id="check_camera-<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
" value="<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
		<span class="video_control"><a href="watch_camera.php?cam_id=<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
"><?php echo smarty_lang(array('code' => 'view'), $this);?>
</a> - <a href="?mode=edit_camera&amp;pid=<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
"><?php echo smarty_lang(array('code' => 'edit'), $this);?>
</a> - <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
','<?php echo smarty_lang(array('code' => 'remove_camera_confirm'), $this);?>
','?mode=manage_camera&amp;delete_camera=<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
')" id="delete_icon_a-<?php echo $this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_id']; ?>
"><?php echo smarty_lang(array('code' => 'delete'), $this);?>
</a></span></td>
 	     <td width="130"><?php echo ((is_array($_tmp=$this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_describe'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</td>
 	     <td width="130"><?php echo ((is_array($_tmp=$this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['cam_address'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</td>
 	    <td width="130"><?php echo ((is_array($_tmp=$this->_tpl_vars['cameras'][$this->_sections['plist']['index']]['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
 	    </tr>
 	  </table>
   </div>
   <?php if ($this->_tpl_vars['bg'] == 'fff'): ?>
    <?php $this->assign('bg', 'EFF5F8'); ?>
    <?php else: ?>
    <?php $this->assign('bg', 'fff'); ?>
    <?php endif; ?>
  <?php endfor; endif; ?>
  </form>
  <!-- Getting List of camera -->
 <?php endif; ?>
 
 <?php if ($this->_tpl_vars['mode'] == 'edit_camera'): ?>
 <h2><?php echo smarty_lang(array('code' => 'edit_camera'), $this);?>
</h2>
 <div class="account_form">
    <form method="post" name="edit_profile">
    <fieldset class="fieldset">
    <legend><?php echo smarty_lang(array('code' => 'edit_camera'), $this);?>
</legend>
    
    <div class="account_field_block clearfix">
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'cam_name'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="name" type="text" id="name" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['camera']['cam_name']; ?>
"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'des_title'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="describe" type="text" id="describe" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['camera']['cam_describe']; ?>
"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'cam_address'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="address" type="text" id="address" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['camera']['cam_address']; ?>
"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'videouser'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="videouser" type="text" id="videouser" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['camera']['videouser']; ?>
"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'videopass'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="videopass" type="password" id="videopass" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['camera']['videopass']; ?>
"></div>
    </div>
	
    <div align="right"><button name="edit_camera" id="button" value="submit" class="cb_button_2"><?php echo smarty_lang(array('code' => 'edit_camera'), $this);?>
</button></div>

    </fieldset>
    </form>
 </div>
	

 <?php endif; ?>
 </div>
</div>