<?php /* Smarty version 2.6.18, created on 2012-09-29 11:40:39
         compiled from /mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/user_levels.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'form_val', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/user_levels.html', 45, false),)), $this); ?>
<link href="../theme/stylesheet.css" rel="stylesheet" type="text/css">
<h2>User Levels</h2>
<?php if ($this->_tpl_vars['view'] == 'view'): ?>

<a href="?mode=add">Add New Level</a>

<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr class="tr_head">
    <td width="20">ID</td>
    <td width="200">Name</td>
    <td width="50">Active</td>
    <td width="50">Users</td>
    <td>Actions</td>
  </tr>
  <?php $this->assign('levels', $this->_tpl_vars['userquery']->get_levels()); ?>
  <?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['levels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
  <tr class="td_body">
    <td><?php echo $this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_id']; ?>
</td>
    <td><?php echo $this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_name']; ?>
</td>
    <td><?php echo $this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_active']; ?>
</td>
    <td><?php echo $this->_tpl_vars['userquery']->get_level_users($this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_id'],true); ?>
</td>
    <td><a href="?mode=edit&lid=<?php echo $this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_id']; ?>
">Edit</a><?php if ($this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_is_default'] != yes): ?> | <a href="?action=delete&lid=<?php echo $this->_tpl_vars['levels'][$this->_sections['l']['index']]['user_level_id']; ?>
">Remove</a><?php endif; ?></td>
  </tr>
  <?php endfor; else: ?>
  <tr class="td_body">
    <td colspan="5" align="center">No Levels Were Found</td>
  </tr>
  <?php endif; ?>
</table>

<?php elseif ($this->_tpl_vars['view'] == 'edit'): ?>

<form action="" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px">
<tr>
<td width="30" class="left_head">&nbsp;</td>
<td align="left" class="head">Edit Level Permissions</td>
<td width="30" class="right_head">&nbsp;</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" >
<tr bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
" class="item_listing">
<td style="padding:5px 0px 5px 10px"><strong>Level Name</strong></td>
<td style="padding:5px 0px 5px 10px" width="250"><span class="tips">
  <input name="level_name" type="text" id="level_name2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['level_details']['user_level_name'])) ? $this->_run_mod_handler('form_val', true, $_tmp) : form_val($_tmp)); ?>
" />
</span></td>
</tr>
</table>


<?php $this->assign('types', $this->_tpl_vars['userquery']->get_level_types()); ?>
<?php unset($this->_sections['t']);
$this->_sections['t']['name'] = 't';
$this->_sections['t']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['t']['show'] = true;
$this->_sections['t']['max'] = $this->_sections['t']['loop'];
$this->_sections['t']['step'] = 1;
$this->_sections['t']['start'] = $this->_sections['t']['step'] > 0 ? 0 : $this->_sections['t']['loop']-1;
if ($this->_sections['t']['show']) {
    $this->_sections['t']['total'] = $this->_sections['t']['loop'];
    if ($this->_sections['t']['total'] == 0)
        $this->_sections['t']['show'] = false;
} else
    $this->_sections['t']['total'] = 0;
if ($this->_sections['t']['show']):

            for ($this->_sections['t']['index'] = $this->_sections['t']['start'], $this->_sections['t']['iteration'] = 1;
                 $this->_sections['t']['iteration'] <= $this->_sections['t']['total'];
                 $this->_sections['t']['index'] += $this->_sections['t']['step'], $this->_sections['t']['iteration']++):
$this->_sections['t']['rownum'] = $this->_sections['t']['iteration'];
$this->_sections['t']['index_prev'] = $this->_sections['t']['index'] - $this->_sections['t']['step'];
$this->_sections['t']['index_next'] = $this->_sections['t']['index'] + $this->_sections['t']['step'];
$this->_sections['t']['first']      = ($this->_sections['t']['iteration'] == 1);
$this->_sections['t']['last']       = ($this->_sections['t']['iteration'] == $this->_sections['t']['total']);
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px">
<tr>
<td width="30" class="left_head">&nbsp;</td>
<td align="left" class="head"><?php echo $this->_tpl_vars['types'][$this->_sections['t']['index']]['user_permission_type_name']; ?>
</td>
<td width="30" class="right_head">&nbsp;</td>
</tr>
</table>
<?php $this->assign('perms', $this->_tpl_vars['userquery']->get_permissions($this->_tpl_vars['types'][$this->_sections['t']['index']]['user_permission_type_id'])); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" >
<?php $this->assign('bgcolor', ""); ?>
<?php $_from = $this->_tpl_vars['perms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
<?php if ($this->_tpl_vars['perm']['permission_id'] != ""): ?>


<tr bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
" class="item_listing">
<td style="padding:5px 0px 5px 10px"><strong><?php echo $this->_tpl_vars['perm']['permission_name']; ?>
</strong><br />
<em><?php echo $this->_tpl_vars['perm']['permission_desc']; ?>
</em></td>
<td style="padding:5px 0px 5px 10px" width="250">
<?php $this->assign('perm_code', $this->_tpl_vars['perm']['permission_code']); ?>
<label>
<input type="radio" name="<?php echo $this->_tpl_vars['perm']['permission_code']; ?>
" value="yes" id="<?php echo $this->_tpl_vars['perm']['permission_id']; ?>
_yes" <?php if ($this->_tpl_vars['level_perms'][$this->_tpl_vars['perm_code']] == 'yes'): ?> checked="checked"<?php endif; ?>/>
Yes</label>
<label>
<input type="radio" name="<?php echo $this->_tpl_vars['perm']['permission_code']; ?>
" value="no" id="<?php echo $this->_tpl_vars['perm']['permission_id']; ?>
_no" <?php if ($this->_tpl_vars['level_perms'][$this->_tpl_vars['perm_code']] == no): ?> checked="checked"<?php endif; ?>/>
No</label>


</td>
</tr>
<?php else: ?>
<tr><td><div style="width:100%; margin:auto" align="center"><em>No Permission Found</em></div></td></tr>
<?php endif; ?>


<?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
<?php $this->assign('bgcolor', "#EEEEEE"); ?>
<?php else: ?>
<?php $this->assign('bgcolor', ""); ?>
<?php endif; ?>

<?php endforeach; else: ?>
<tr><td><div style="width:100%; margin:auto" align="center"><em>No Permission Found</em></div></td></tr>
<?php endif; unset($_from); ?>
</table>


<?php endfor; endif; ?>



<?php if ($this->_tpl_vars['Cbucket']->plugins_perms): ?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px">
<tr>
<td width="30" class="left_head">&nbsp;</td>
<td align="left" class="head">Plugins Permissions</td>
<td width="30" class="right_head">&nbsp;</td>
</tr>
</table>


<?php $this->assign('perms', $this->_tpl_vars['Cbucket']->plugins_perms); ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" >
<?php $this->assign('bgcolor', ""); ?>
<?php $_from = $this->_tpl_vars['perms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>



<tr bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
" class="item_listing">
<td style="padding:5px 0px 5px 10px"><strong><?php echo $this->_tpl_vars['perm']['plugin_name']; ?>
</strong><br />
<em><?php echo $this->_tpl_vars['perm']['plugin_desc']; ?>
</em></td>
<td style="padding:5px 0px 5px 10px" width="250">

<label>
<?php $this->assign('perm_plugin_code', $this->_tpl_vars['perm']['plugin_code']); ?>

<input type="radio" name="plugin_perm[<?php echo $this->_tpl_vars['perm']['plugin_code']; ?>
]" value="yes" id="<?php echo $this->_tpl_vars['plugin_perms']['plugin_code']; ?>
_yes" <?php if ($this->_tpl_vars['plugin_perms'][$this->_tpl_vars['perm_plugin_code']] != 'no'): ?> checked="checked"<?php endif; ?>/>
Yes</label>
<label>
<input type="radio" name="plugin_perm[<?php echo $this->_tpl_vars['perm']['plugin_code']; ?>
]" value="no" id="<?php echo $this->_tpl_vars['plugin_perms']['plugin_code']; ?>
_no" <?php if ($this->_tpl_vars['plugin_perms'][$this->_tpl_vars['perm_plugin_code']] == no): ?> checked="checked"<?php endif; ?>/>
No</label>


</td>
</tr>



<?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
<?php $this->assign('bgcolor', "#EEEEEE"); ?>
<?php else: ?>
<?php $this->assign('bgcolor', ""); ?>
<?php endif; ?>

<?php endforeach; else: ?>
<tr><td><div style="width:100%; margin:auto" align="center"><em>No Permission Found</em></div></td></tr>
<?php endif; unset($_from); ?>
</table>






<?php endif; ?>


<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
	<td><label for="button"></label>
	  <input type="submit" name="update_level_perms" id="button" value="Update" /></td>
</tr>
</table>
</form>
<?php elseif ($this->_tpl_vars['view'] == 'add'): ?>
<form action="" method="post">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="30" class="left_head">&nbsp;</td>
<td align="left" class="head">User Level Details</td>
<td width="30" class="right_head">&nbsp;</td>
</tr>
</table>

<table width="98%" border="0" cellpadding="0" cellspacing="0" align="center" >
<tr bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
" class="item_listing">
<td style="padding:5px 0px 5px 10px"><strong>Level Name</strong></td>
<td style="padding:5px 0px 5px 10px" width="250"><span class="tips">
  <input name="level_name" type="text" id="level_name2" value="<?php echo ((is_array($_tmp=$_POST['level_name'])) ? $this->_run_mod_handler('form_val', true, $_tmp) : form_val($_tmp)); ?>
" />
</span></td>
</tr>
</table>
<?php $this->assign('types', $this->_tpl_vars['userquery']->get_level_types()); ?>
<?php unset($this->_sections['t']);
$this->_sections['t']['name'] = 't';
$this->_sections['t']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['t']['show'] = true;
$this->_sections['t']['max'] = $this->_sections['t']['loop'];
$this->_sections['t']['step'] = 1;
$this->_sections['t']['start'] = $this->_sections['t']['step'] > 0 ? 0 : $this->_sections['t']['loop']-1;
if ($this->_sections['t']['show']) {
    $this->_sections['t']['total'] = $this->_sections['t']['loop'];
    if ($this->_sections['t']['total'] == 0)
        $this->_sections['t']['show'] = false;
} else
    $this->_sections['t']['total'] = 0;
if ($this->_sections['t']['show']):

            for ($this->_sections['t']['index'] = $this->_sections['t']['start'], $this->_sections['t']['iteration'] = 1;
                 $this->_sections['t']['iteration'] <= $this->_sections['t']['total'];
                 $this->_sections['t']['index'] += $this->_sections['t']['step'], $this->_sections['t']['iteration']++):
$this->_sections['t']['rownum'] = $this->_sections['t']['iteration'];
$this->_sections['t']['index_prev'] = $this->_sections['t']['index'] - $this->_sections['t']['step'];
$this->_sections['t']['index_next'] = $this->_sections['t']['index'] + $this->_sections['t']['step'];
$this->_sections['t']['first']      = ($this->_sections['t']['iteration'] == 1);
$this->_sections['t']['last']       = ($this->_sections['t']['iteration'] == $this->_sections['t']['total']);
?>
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td width="30" class="left_head">&nbsp;</td>
    <td align="left" class="head"><?php echo $this->_tpl_vars['types'][$this->_sections['t']['index']]['user_permission_type_name']; ?>
</td>
    <td width="30" class="right_head">&nbsp;</td>
    </tr>
    </table>
    <?php $this->assign('perms', $this->_tpl_vars['userquery']->get_permissions($this->_tpl_vars['types'][$this->_sections['t']['index']]['user_permission_type_id'])); ?>
    <table width="98%" border="0" cellpadding="0" cellspacing="0" align="center" >
    <?php $this->assign('bgcolor', ""); ?>
    <?php $_from = $this->_tpl_vars['perms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
        <?php if ($this->_tpl_vars['perm']['permission_id'] != ""): ?>
        
        
        <tr bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
" class="item_listing">
        <td style="padding:5px 0px 5px 10px"><strong><?php echo $this->_tpl_vars['perm']['permission_name']; ?>
</strong><br />
        <em><?php echo $this->_tpl_vars['perm']['permission_desc']; ?>
</em></td>
        <td style="padding:5px 0px 5px 10px" width="250">
        <label><input type="radio" name="<?php echo $this->_tpl_vars['perm']['permission_code']; ?>
" value="yes" id="<?php echo $this->_tpl_vars['perm']['permission_id']; ?>
_yes" />Yes</label>
        <label><input type="radio" name="<?php echo $this->_tpl_vars['perm']['permission_code']; ?>
" value="no" id="<?php echo $this->_tpl_vars['perm']['permission_id']; ?>
_no" />No</label>
        </td>
        </tr>
        <?php else: ?>
        <tr><td><div style="width:100%; margin:auto" align="center"><em>No Permission Found</em></div></td></tr>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
        <?php $this->assign('bgcolor', "#EEEEEE"); ?>
        <?php else: ?>
        <?php $this->assign('bgcolor', ""); ?>
        <?php endif; ?>
    
    <?php endforeach; else: ?>
    <tr><td><div style="width:100%; margin:auto" align="center"><em>No Permission Found</em></div></td></tr>
    <?php endif; unset($_from); ?>
    </table>

<?php endfor; endif; ?>
<input type="submit" name="add_new_level" id="button" value="Add Level" />
</form>
<?php endif; ?>


