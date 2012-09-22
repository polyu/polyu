<?php /* Smarty version 2.6.18, created on 2012-09-11 12:49:35
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/flagged_groups.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_username', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_groups.html', 52, false),array('modifier', 'number_format', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_groups.html', 55, false),array('modifier', 'flag_type', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_groups.html', 135, false),array('modifier', 'niceTime', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_groups.html', 135, false),array('function', 'group_link', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_groups.html', 62, false),)), $this); ?>

<?php if ($this->_tpl_vars['mode'] == 'view'): ?>
<span class="page_title">Flagged Groups Manager</span>
<!-- DIsplaying Videos -->
<form name="flagged_video" method="post" id="flagged_video">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="delete_selected" value="Delete Groups"  class="button" onclick="return confirm_it('Are you sure you want to delete these group(s)')"/>
            
            <input type="submit" name="delete_flags" value="Delete Flags"  class="button" onclick="return confirm_it('Are you sure you want to delete flags of selected group(s)')"/>
    
    </td>
    </tr>
</table>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" align="left" class="head">GP-ID</td>
    <td class="head">Details</td>
    <td width="50" class="right_head">&nbsp;</td>
  </tr>
</table>





<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php $this->assign('bgcolor', ""); ?>
<?php unset($this->_sections['gp_list']);
$this->_sections['gp_list']['name'] = 'gp_list';
$this->_sections['gp_list']['loop'] = is_array($_loop=$this->_tpl_vars['groups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['gp_list']['show'] = true;
$this->_sections['gp_list']['max'] = $this->_sections['gp_list']['loop'];
$this->_sections['gp_list']['step'] = 1;
$this->_sections['gp_list']['start'] = $this->_sections['gp_list']['step'] > 0 ? 0 : $this->_sections['gp_list']['loop']-1;
if ($this->_sections['gp_list']['show']) {
    $this->_sections['gp_list']['total'] = $this->_sections['gp_list']['loop'];
    if ($this->_sections['gp_list']['total'] == 0)
        $this->_sections['gp_list']['show'] = false;
} else
    $this->_sections['gp_list']['total'] = 0;
if ($this->_sections['gp_list']['show']):

            for ($this->_sections['gp_list']['index'] = $this->_sections['gp_list']['start'], $this->_sections['gp_list']['iteration'] = 1;
                 $this->_sections['gp_list']['iteration'] <= $this->_sections['gp_list']['total'];
                 $this->_sections['gp_list']['index'] += $this->_sections['gp_list']['step'], $this->_sections['gp_list']['iteration']++):
$this->_sections['gp_list']['rownum'] = $this->_sections['gp_list']['iteration'];
$this->_sections['gp_list']['index_prev'] = $this->_sections['gp_list']['index'] - $this->_sections['gp_list']['step'];
$this->_sections['gp_list']['index_next'] = $this->_sections['gp_list']['index'] + $this->_sections['gp_list']['step'];
$this->_sections['gp_list']['first']      = ($this->_sections['gp_list']['iteration'] == 1);
$this->_sections['gp_list']['last']       = ($this->_sections['gp_list']['iteration'] == $this->_sections['gp_list']['total']);
?>
<tr class="video_opt_td"  bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
">
    <td width="30" align="center" valign="top" class="video_opt_td"><input name="check_group[]" type="checkbox" id="check_group" value="<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
" /></td>
    <td width="50" align="left" valign="top" class="video_opt_td"><?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
</td>
    <td valign="top"  class="video_opt_td" 
    onmouseover="$('#vid_opt-<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
').show()" 
    onmouseout="$('#vid_opt-<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
').hide()" >
    <div style="float:left; width:45px; height:34px;" >
    	<img src="<?php echo $this->_tpl_vars['cbgroup']->get_group_thumb($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]); ?>
" border="1" class="mid_user_thumb" />
    </div>
    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/view_group.php?url=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_url']; ?>
" target="_blank" style="text-indent:10px">
    <?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_name']; ?>

    </a> &#8212;
    <span class="vdo_sets">
    Group Owner:<strong> <a href="view_user.php?uid=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['userid'])) ? $this->_run_mod_handler('get_username', true, $_tmp) : get_username($_tmp)); ?>
</a></strong> &#8226;
    Group Type:<strong> <?php if ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_privacy'] == '0'): ?>Public<?php elseif ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_privacy'] == '1'): ?>Private<?php else: ?>Invited<?php endif; ?></strong> &#8226;
    Group Status:<strong><?php if ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['active'] == 'yes'): ?> Active<?php else: ?>Inactive<?php endif; ?></strong> &#8226;
    Group Members:<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['total_members'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</strong> &#8226;
    Flags:<strong><?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['total_flags']; ?>
</strong>
    </span>
    
    <br />
    <div id="vid_opt-<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
" style="display:none" class="vid_opts">
   	 
      <a href="<?php echo group_link(array('details' => $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]), $this);?>
" target="_blank">View</a> | 
      <a href="edit_group.php?group_id=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Edit</a>
      
      
      
      <?php if ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['active'] == yes): ?>  | 
      <a href="?deactivate=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Deactivate</a> <?php else: ?> | 
      <a href="?activate=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Activate</a> <?php endif; ?>  | 
      <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/manage_groups.php?mode=manage_videos&gid=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Manage</a> |  
      <a href="?delete_group=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Delete</a> |
      <a href="?mode=view_flags&gid=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">View Flags</a> |
      <a href="?delete_flags=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Delete Flags</a>
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


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return_invert.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     <input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="delete_selected" value="Delete Groups"  class="button" onclick="return confirm_it('Are you sure you want to delete these group(s)')"/>
            
            <input type="submit" name="delete_flags" value="Delete Flags"  class="button" onclick="return confirm_it('Are you sure you want to delete flags of selected group(s)')"/>
    
    </td>
    </tr>
</table>

</form>

<!-- DIsplaying Videos Ends-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/pagination.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>


<?php if ($this->_tpl_vars['mode'] == 'view_flags'): ?>
      
<span class="page_title">Viewing <?php echo $this->_tpl_vars['group']['group_name']; ?>
 flags</span> &#8212; <a href="<?php echo group_link(array('details' => $this->_tpl_vars['group']), $this);?>
">View Group</a> &#8226; <a href="edit_group.php?group_id=<?php echo $this->_tpl_vars['group']['group_id']; ?>
">Edit Group</a> &#8226; <a href="?delete_flags=<?php echo $this->_tpl_vars['group']['group_id']; ?>
">Delete Flags</a> &#8226; <a href="?delete_group=<?php echo $this->_tpl_vars['group']['group_id']; ?>
">Delete Group</a>
<div  style="margin-bottom:10px"></div>
<!-- DIsplaying Videos -->
<form name="video_manage" method="post">


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">&nbsp;</td>
    <td class="head">Flag Details</td>
    <td width="50" class="right_head">&nbsp;</td>
  </tr>
</table>





<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php $this->assign('bgcolor', ""); ?>
<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['flags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td width="30" align="left" valign="top" class="video_opt_td"><?php echo $this->_sections['list']['iteration']; ?>
</td>
    <td align="left" valign="top" class="video_opt_td">Reported as "<?php echo ((is_array($_tmp=$this->_tpl_vars['flags'][$this->_sections['list']['index']]['flag_type'])) ? $this->_run_mod_handler('flag_type', true, $_tmp) : flag_type($_tmp)); ?>
" by <?php echo ((is_array($_tmp=$this->_tpl_vars['flags'][$this->_sections['list']['index']]['userid'])) ? $this->_run_mod_handler('get_username', true, $_tmp) : get_username($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['flags'][$this->_sections['list']['index']]['date_added'])) ? $this->_run_mod_handler('niceTime', true, $_tmp) : niceTime($_tmp)); ?>
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
</form>

<?php endif; ?>