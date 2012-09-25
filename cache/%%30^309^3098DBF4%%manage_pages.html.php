<?php /* Smarty version 2.6.18, created on 2012-09-25 10:17:25
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/manage_pages.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'post', '/home/wwwroot/admin_area/styles/cbv2/layout/manage_pages.html', 14, false),array('modifier', 'form_val', '/home/wwwroot/admin_area/styles/cbv2/layout/manage_pages.html', 33, false),array('modifier', 'niceTime', '/home/wwwroot/admin_area/styles/cbv2/layout/manage_pages.html', 151, false),)), $this); ?>

<span class="page_title">Manage Pages</span>

<?php if ($this->_tpl_vars['mode'] == 'new'): ?>
<form method="post">
<fieldset class="fieldset cbform">
  <legend>Add New Page
  </legend><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><label for="page_name">Page Name</label></td>
    </tr>
    <tr>
      <td>
      <input name="page_name" type="text" id="page_name" value="<?php echo ((is_array($_tmp='page_name')) ? $this->_run_mod_handler('post', true, $_tmp) : post($_tmp)); ?>
"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="page_title">Page Title</label></td>
    </tr>
    <tr>
      <td><input type="text" name="page_title" id="page_title" value="<?php echo ((is_array($_tmp='page_title')) ? $this->_run_mod_handler('post', true, $_tmp) : post($_tmp)); ?>
" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="page_content">Page Content</label></td>
    </tr>
    <tr>
      <td style="background-color:#FFF">
      <textarea name="page_content" id="page_content" style="width:100%; min-height:250px"><?php echo ((is_array($_tmp=((is_array($_tmp='page_content')) ? $this->_run_mod_handler('post', true, $_tmp) : post($_tmp)))) ? $this->_run_mod_handler('form_val', true, $_tmp) : form_val($_tmp)); ?>
</textarea><script type="text/javascript">
	<?php echo 'new nicEditor({fullPanel : true,maxHeight:350}).panelInstance(\'page_content\');'; ?>

</script></td>
    </tr>
    <tr>
      <td style="background-color:#FFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" style="background-color:#FFF">
        <input type="submit" name="add_page" id="add_page" value="Create new page" class="button"/></td>
    </tr>

  </table>
</fieldset>
</form>
<?php endif; ?>





<?php if ($this->_tpl_vars['mode'] == 'edit' && $this->_tpl_vars['page']['page_name'] != ''): ?>
<form method="post">
<fieldset class="fieldset cbform">
  <legend>Add New Page
  </legend><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><label for="page_name">Page Name</label></td>
    </tr>
    <tr>
      <td>
      <input name="page_name" type="text" id="page_name" value="<?php echo $this->_tpl_vars['page']['page_name']; ?>
"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="page_title">Page Title</label></td>
    </tr>
    <tr>
      <td><input type="text" name="page_title" id="page_title" value="<?php echo $this->_tpl_vars['page']['page_title']; ?>
" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="page_content">Page Content</label></td>
    </tr>
    <tr>
      <td style="background-color:#FFF">
      <textarea name="page_content" id="page_content" style="width:100%; min-height:250px"><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['page_content'])) ? $this->_run_mod_handler('form_val', true, $_tmp) : form_val($_tmp)); ?>
</textarea><script type="text/javascript">
	<?php echo 'new nicEditor({fullPanel : true,maxHeight:350}).panelInstance(\'page_content\');'; ?>

</script></td>
    </tr>
    <tr>
      <td style="background-color:#FFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" style="background-color:#FFF">
        <input type="submit" name="update_page" id="update_page" value="Update page" class="button"/></td>
    </tr>

  </table>
</fieldset>
</form>
<?php endif; ?>




<?php if ($this->_tpl_vars['mode'] == 'manage'): ?>
<form name="page_form" action="?" method="post">
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="update_order" value="Update order" class="button" />
            <input type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected page(s)')"/>
    
    </td>
    <td align="right" style="padding-left:15px"><input type="button" value="Create New Page" class="button" onClick="window.location='?mode=new'"/></td>
    </tr>
</table>



<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" class="head_sep_left">PID</td>
    <td width="50" class="head_sep_left">Order</td>
    <td class="head"><div class="head_sep_left" style="width:250px">Details</div></td>
    <td width="50" class="right_head">&nbsp;</td>
  </tr>
</table>





<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php $this->assign('bgcolor', ""); ?>
<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['cbpages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
<tr class="video_opt_td"  bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
">
    <td width="30" align="center" valign="top" class="video_opt_td">    <input name="check_page[]" type="checkbox" id="check_video" value="<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
" /></td>
     <td width="50" align="center" valign="top" class="video_opt_td"><?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
</td>
	 <td width="50" align="center" valign="top" class="video_opt_td"><input type="text" style="border: 1px solid rgb(153, 153, 153); padding: 2px; width: 30px;" value="<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_order']; ?>
" name="page_ord_<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
"/></td>
    <td valign="top"  class="video_opt_td" 
    onmouseover="$('#vid_opt-<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
').show()" 
    onmouseout="$('#vid_opt-<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
').hide()"  style="padding-left:10px">
    <a href="<?php echo $this->_tpl_vars['cbpage']->page_link($this->_tpl_vars['cbpages'][$this->_sections['list']['index']]); ?>
" target="_blank" style="text-indent:10px">
    <?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_name']; ?>

    </a> &#8212;
    <span class="vdo_sets">
    Active:<strong><?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['active']; ?>
 </strong> &#8226;
    Added:<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['date_added'])) ? $this->_run_mod_handler('niceTime', true, $_tmp) : niceTime($_tmp)); ?>
 </strong>
    <?php if ($this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['delete_able'] == 'no'): ?> &#8226; <strong>UNDELETE-ABLE</strong><?php endif; ?>
     &#8226; Display  in footer:<strong><?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['display']; ?>
 </strong>
    </span>
    
    <br />
    <div id="vid_opt-<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
" style="display:none" class="vid_opts">
   	 
      <a href="<?php echo $this->_tpl_vars['cbpage']->page_link($this->_tpl_vars['cbpages'][$this->_sections['list']['index']]); ?>
">View</a> | 
      <a href="?mode=edit&pid=<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
">Edit</a>
      <?php if ($this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['active'] == yes): ?>  | 
      <a href="?deactivate=<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
">Deactivate</a> <?php else: ?> | 
      <a href="?activate=<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
">Activate</a> <?php endif; ?>  | 
      <a href="?delete=<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
">Delete</a> |
      
      <?php if ($this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['display'] != 'yes'): ?>
      	<a href="?display=<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
">Display in footer</a>
      <?php else: ?>
      	<a href="?hide=<?php echo $this->_tpl_vars['cbpages'][$this->_sections['list']['index']]['page_id']; ?>
">Hide in footer</a>
      <?php endif; ?>
    </div>
    </td>
    <td width="50" valign="top" class="video_opt_td">&nbsp;</td>
  </tr>
    <?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
    <?php $this->assign('bgcolor', "#EEEEEE"); ?>
    <?php else: ?>
    <?php $this->assign('bgcolor', ""); ?>
    <?php endif; ?>
        
<?php endfor; endif; ?>
</table>

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return_invert.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     <input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="update_order" value="Update order" class="button" />
            <input type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected page(s)')"/>
    
    </td>
  </tr>
</table>
</form>
<?php endif; ?>