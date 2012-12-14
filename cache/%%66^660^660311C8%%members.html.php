<?php /* Smarty version 2.6.18, created on 2012-12-01 16:07:37
         compiled from /mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/members.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_form_val', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/members.html', 8, false),array('modifier', 'get_user_level', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/members.html', 115, false),)), $this); ?>
<span class="page_title">Member Manager</span>
<img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="sarch_button" onclick="toggle_search('memsearchdiv')" />

<div class="search_box" id="memsearchdiv" <?php if ($_COOKIE['show_memsearchdiv_search'] != 'show'): ?> style="display:none"<?php endif; ?>>  <form id="user_search" name="user_search" method="get" action="members.php" class="video_search">
  <table width="400" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="106" align="right">Userid</td>
      <td width="280"><input name="userid" type="text" class="input" id="userid" value="<?php echo ((is_array($_tmp='userid')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right">Username</td>
      <td><input name="username" type="text" class="input" id="username" value="<?php echo ((is_array($_tmp='username')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right">Email</td>
      <td><input name="email" type="text" class="input" id="email" value="<?php echo ((is_array($_tmp='email')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right">Status</td>
      <td><select name="status" id="status" class="input">
          <option value="" ></option>
          <option value="Ok" <?php if ($_GET['status'] == 'Ok'): ?> selected="selected"<?php endif; ?>>OK</option>
          <option value="ToActivate" <?php if ($_GET['status'] == 'ToActivate'): ?> selected="selected"<?php endif; ?>>Inactive</option>
        </select></td>
    </tr>
    <tr>
      <td align="right">Banned</td>
      <td>
        <select name="ban" id="ban" class="input">
          <option value="" ></option>
          <option value="yes" <?php if ($_GET['ban'] == 'yes'): ?> selected="selected"<?php endif; ?>>Yes</option>
          <option value="no" <?php if ($_GET['ban'] == 'no'): ?> selected="selected"<?php endif; ?>>No</option>
        </select></td>
    </tr>
    <tr>
      <td align="right">Featured</td>
      <td><select name="featured" id="featured" class="input">
      <option value="" ></option>
        <option value="Yes" <?php if ($_GET['featured'] == 'Yes'): ?> selected="selected"<?php endif; ?>>Yes</option>
        <option value="No" <?php if ($_GET['featured'] == 'No'): ?> selected="selected"<?php endif; ?>>No</option>
      </select></td>
    </tr>
    <tr>
    <td align="right">
    Level
    </td>
    <td>
    <select name="level" id="level" class="input">
    <option value="">------</option>
        <?php $this->assign('levels', $this->_tpl_vars['userquery']->get_levels()); ?>
        <?php $_from = $this->_tpl_vars['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level']):
?>
        	<option value="<?php echo $this->_tpl_vars['level']['user_level_id']; ?>
" <?php if ($_GET['level'] == $this->_tpl_vars['level']['user_level_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['level']['user_level_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
    </td>
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
<!-- Displaying Members -->


<form name="user_manage" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input type="submit" name="ban_selected2" value="Make Unfeatured"  class="button" id="ban_selected2"/>
            <input type="submit" name="ban_selected" value="Ban Selected"  class="button" id="ban_selected"/>
            <input type="submit" name="unban_selected" value="Unban Selected"  class="button" id="unban_selected"/>
        <input type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected video(s)')"/>
    
    </td>
    </tr>
</table>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" class="head">UID</td>
    <td class="head">User Details</td>
    <td width="50" class="right_head">&nbsp;</td>
  </tr>
</table>



<?php if ($this->_tpl_vars['users']): ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?>
<tr class="video_opt_td"  bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
">
    <td width="40" align="center" valign="top" class="video_opt_td">    <input name="check_user[]" type="checkbox" id="check_user" value="<?php echo $this->_tpl_vars['u']['userid']; ?>
" /></td>
    <td width="50" align="left" valign="top" class="video_opt_td"><?php echo $this->_tpl_vars['u']['userid']; ?>
</td>
    <td valign="top"  class="video_opt_td" 
    onmouseover="$('#usr_opt-<?php echo $this->_tpl_vars['u']['userid']; ?>
').show()" 
    onmouseout="$('#usr_opt-<?php echo $this->_tpl_vars['u']['userid']; ?>
').hide()" >
    <div style="float:left; width:35px;"><img src="<?php echo $this->_tpl_vars['userquery']->getUserThumb($this->_tpl_vars['u'],'small'); ?>
" class="mid_user_thumb" /></div>
    <a href="<?php echo $this->_tpl_vars['userquery']->profile_link($this->_tpl_vars['u']); ?>
" target="_blank" style="text-indent:10px">
    <?php echo $this->_tpl_vars['u']['username']; ?>

    </a> &#8212;
    <span class="vdo_sets">Email:<strong><span style="text-transform:none"><?php echo $this->_tpl_vars['u']['email']; ?>
</span> </strong> &#8226;
    Status:<strong><?php echo $this->_tpl_vars['u']['usr_status']; ?>
</strong>  &#8226;
    Level:<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['u']['level'])) ? $this->_run_mod_handler('get_user_level', true, $_tmp) : get_user_level($_tmp)); ?>
</strong> &#8226;
    Last Active:<strong><?php echo $this->_tpl_vars['u']['last_active']; ?>
</strong> 
    </span>
    
    <br />
    <div id="usr_opt-<?php echo $this->_tpl_vars['u']['userid']; ?>
"  class="vid_opts" style="display:none">
   	 
    <a href="view_user.php?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
">View</a> or 
    <a href="view_user.php?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Edit</a> |
    <?php if ($this->_tpl_vars['u']['usr_status'] == Ok): ?>
    <a href="?deactivate=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Deactivate</a>
    <?php elseif ($this->_tpl_vars['u']['usr_status'] == ToActivate): ?>
    <a href="?activate=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Activate</a>
    <?php endif; ?>  | 
    <?php if ($this->_tpl_vars['u']['ban_status'] == yes): ?> 
    <a href="?unban=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Unban Member</a> 
    <?php endif; ?> 
    <?php if ($this->_tpl_vars['u']['ban_status'] == no): ?>       
    <a href="?ban=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Ban Member</a> 
    <?php endif; ?>|
    <?php if ($this->_tpl_vars['u']['featured'] != Yes): ?> 
    <a href="?featured=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Feature Member</a> 
    <?php endif; ?> 
    <?php if ($this->_tpl_vars['u']['featured'] == Yes): ?>       
    <a href="?unfeatured=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Unfeature Member</a> 
    <?php endif; ?>|
    <a href="login_as_user.php?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Login as user</a> | <a href="?deleteuser=<?php echo $this->_tpl_vars['u']['userid']; ?>
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
<?php endforeach; endif; unset($_from); ?>







  
</table>





<?php else: ?>
	<div align="center"><strong><em>NO USER FOUND</em></strong></div>
<?php endif; ?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return_invert.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input type="submit" name="ban_selected2" value="Make Unfeatured"  class="button" id="ban_selected2"/>
            <input type="submit" name="ban_selected" value="Ban Selected"  class="button" id="ban_selected"/>
            <input type="submit" name="unban_selected" value="Unban Selected"  class="button" id="unban_selected"/>
        <input type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected video(s)')"/>
    
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