<?php /* Smarty version 2.6.18, created on 2012-09-11 12:49:29
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/groups_manager.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_form_val', '/home/wwwroot/admin_area/styles/cbv2/layout/groups_manager.html', 8, false),array('modifier', 'get_username', '/home/wwwroot/admin_area/styles/cbv2/layout/groups_manager.html', 102, false),array('modifier', 'number_format', '/home/wwwroot/admin_area/styles/cbv2/layout/groups_manager.html', 105, false),array('function', 'group_link', '/home/wwwroot/admin_area/styles/cbv2/layout/groups_manager.html', 111, false),)), $this); ?>
<span class="page_title">Groups Manager</span>

<img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="sarch_button" onclick="toggle_search('groupsearchdiv')" />
<div class="search_box" id="groupsearchdiv" <?php if ($_COOKIE['show_groupsearchdiv_search'] != 'show'): ?> style="display:none"<?php endif; ?>>  <form id="group_search" name="group_search" method="get" action="groups_manager.php" class="video_search">
  <table width="400" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="106" align="right"><label for="title">Group title</label></td>
      <td width="280"><input name="title" type="text" class="input" id="title" value="<?php echo ((is_array($_tmp='title')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right"><label for="groupid">Group id</label></td>
      <td><input name="group_id" type="text" class="input" id="groupid" value="<?php echo ((is_array($_tmp='group_id')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right"><label for="tags">Group tags</label></td>
      <td><input name="tags" type="text" class="input" id="tags" value="<?php echo ((is_array($_tmp='tags')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" /></td>
    </tr>
    <tr>
      <td align="right">Featured</td>
      <td><label for="featured"></label>
        <select name="featured" id="featured" class="input">
          <option value="" ></option>
          <option value="yes" <?php if ($_GET['featured'] == 'yes'): ?> selected="selected"<?php endif; ?>>Yes</option>
          <option value="no" <?php if ($_GET['featured'] == 'no'): ?> selected="selected"<?php endif; ?>>No</option>
        </select></td>
    </tr>
    <tr>
      <td align="right">Active</td>
      <td><select name="active" id="active" class="input">
      <option value="" ></option>
        <option value="yes" <?php if ($_GET['active'] == 'yes'): ?> selected="selected"<?php endif; ?>>Yes</option>
        <option value="no" <?php if ($_GET['active'] == 'no'): ?> selected="selected"<?php endif; ?>>No</option>
      </select></td>
    </tr>
  
    <tr>
      <td align="right">Userid</td>
      <td><input name="userid" type="text" class="input" id="userid" value="<?php echo ((is_array($_tmp='userid')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" /></td>
    </tr>
    <tr>
      <td align="right" valign="top">Category</td>
      <td>
     <?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['cat_array']); ?>
 
</td>
    </tr>
  </table>
  <br />
  <input type="submit" name="search" id="search" value="Search Form" class="button"/>
</form>
</div>




<form name="group_manage" method="post">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input type="submit" name="make_unfeatured_selected" value="Make Unfeatured"  class="button"/>
            <input type="submit" name="delete_selected" value="Delete"  class="button"  onclick="return confirm_it('Are you sure you want to delete selected Groups(s)')"/>
    
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
</strong>
    </span>
    
    <br />
    <div id="vid_opt-<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
" style="display:none" class="vid_opts">
   	 
      <a href="<?php echo group_link(array('details' => $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]), $this);?>
" target="_blank">View</a> | 
      <a href="edit_group.php?group_id=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Edit</a>
      <?php if ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['featured'] == yes): ?>
       | <a href="?unfeature=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Make Unfeatured</a> <?php endif; ?> 
      <?php if ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['featured'] == no): ?> | 
      <a href="?feature=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Make Featured</a> <?php endif; ?>
      
      <?php if ($this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['active'] == yes): ?>  | 
      <a href="?deactivate=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Deactivate</a> <?php else: ?> | 
      <a href="?activate=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Activate</a> <?php endif; ?>  | 
      <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/manage_groups.php?mode=manage_videos&gid=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Manage</a> |  
      <a href="?delete_group=<?php echo $this->_tpl_vars['groups'][$this->_sections['gp_list']['index']]['group_id']; ?>
">Delete</a>
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
            <input type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input type="submit" name="make_unfeatured_selected" value="Make Unfeatured"  class="button"/>
            <input type="submit" name="delete_selected" value="Delete"  class="button"  onclick="return confirm_it('Are you sure you want to delete selected Groups(s)')"/>
    
    </td>
    </tr>
</table>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/pagination.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>