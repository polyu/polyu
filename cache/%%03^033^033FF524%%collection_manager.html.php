<?php /* Smarty version 2.6.18, created on 2012-09-10 11:06:16
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/collection_manager.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_form_val', '/home/wwwroot/admin_area/styles/cbv2/layout/collection_manager.html', 8, false),array('modifier', 'niceTime', '/home/wwwroot/admin_area/styles/cbv2/layout/collection_manager.html', 123, false),array('function', 'cycle', '/home/wwwroot/admin_area/styles/cbv2/layout/collection_manager.html', 105, false),)), $this); ?>
<h2>Collection Manager</h2>
<img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="sarch_button" onclick="toggle_search('searchdiv')" />
<div class="search_box" id="searchdiv" <?php if ($_COOKIE['show_searchdiv_search'] != 'show'): ?> style="display:none"<?php endif; ?>>
<form action="collection_manager.php" method="get" name="search_collections">
<table width="400" border="0" cellpadding="2" cellspacing="2">
<tr>
      <td width="106" align="right"><label for="title">Collection name</label></td>
      <td width="280"><input name="title" type="text" class="input" id="title" value="<?php echo ((is_array($_tmp='title')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right"><label for="collectionid">Collection id</label></td>
      <td><input name="collectionid" type="text" class="input" id="collectionid" value="<?php echo ((is_array($_tmp='collectionid')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" //></td>
    </tr>
    <tr>
      <td align="right"><label for="tags">Collection tags</label></td>
      <td><input name="tags" type="text" class="input" id="tags" value="<?php echo ((is_array($_tmp='tags')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" /></td>
    </tr>
    <tr>
      <td align="right">Userid</td>
      <td><input name="userid" type="text" class="input" id="userid" value="<?php echo ((is_array($_tmp='userid')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" /></td>
    </tr>
    <tr>
      <td align="right">Active</td>
      <td><label for="active"></label>
        <select name="active" id="active" class="input">
          <option value="" ></option>
          <option value="yes" <?php if ($_GET['active'] == 'yes'): ?> selected="selected"<?php endif; ?>>Yes</option>
          <option value="no" <?php if ($_GET['active'] == 'no'): ?> selected="selected"<?php endif; ?>>No</option>
        </select></td>
    </tr>
    <tr>
      <td align="right">Broadcast</td>
      <td><label for="broadcast"></label>
        <select name="broadcast" id="broadcast" class="input">
          <option value="" ></option>
          <option value="public" <?php if ($_GET['broadcast'] == 'public'): ?> selected="selected"<?php endif; ?>>Public</option>
          <option value="private" <?php if ($_GET['broadcast'] == 'private'): ?> selected="selected"<?php endif; ?>>Private</option>
        </select></td>
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
      <td align="right">Type</td>
      <td>
      <select name="collection_type" id="collection_type">
      	<option value="" ></option>
        <?php $_from = $this->_tpl_vars['cbcollection']->types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['name']):
?>
        	<option value="<?php echo $this->_tpl_vars['type']; ?>
" <?php if ($_GET['collection_type'] == $this->_tpl_vars['type']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>
      </td>
    </tr>  
    <tr>
      <td align="right">Order</td>
      <td>
      <select name="order" id="order">
      	<option value="" ></option>
        <option value="collection_id" <?php if ($_GET['order'] == 'collection_id'): ?>selected="selected"<?php endif; ?>>ID</option>
        <option value="total_objects" <?php if ($_GET['order'] == 'total_objects'): ?>selected="selected"<?php endif; ?>>Total Items</option>
		<option value="collection_name" <?php if ($_GET['order'] == 'collection_name'): ?>selected="selected"<?php endif; ?>>Name</option>        
        <option value="views" <?php if ($_GET['order'] == 'views'): ?>selected="selected"<?php endif; ?>>Views</option>
      </select>
      </td>
    </tr>
</table>
<br />
  <input type="submit" name="search" id="search" value="Search Form" class="button"/>
</form>
</div>

<form name="video_manage" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input type="submit" name="make_unfeatured_selected" value="Make Unfeatured"  class="button"/>
            <input type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected collection(s)')"/>
    
    </td>
    </tr>
</table>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="75" class="head">Collection ID</td>
    <td class="head">Details</td>
    <td width="50" class="right_head">&nbsp;</td>
  </tr>
</table>

<?php if ($this->_tpl_vars['c']): ?>
<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['c']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <li class="clearfix myAdminList" style="background:#<?php echo smarty_function_cycle(array('values' => 'FFFFFF,EEEEEE'), $this);?>
" 
        OnMouseOver="$('#vid_opt-<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
').show()"
        OnMouseOut="$('#vid_opt-<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
').hide()">
        <div class="moveL PhotoCheckBox">
            <div align="center"><input name="check_collection[]" type="checkbox" id="check_collection" value="<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
" /></div>
        </div>
        <div class="moveL PhotoID"><?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
</div>
        <div class="moveL clearfix PhotoDetails" style="width:88%; min-height:inherit;">
        	<div class="moveL AdminPhotoThumb">
            	<img src="<?php echo $this->_tpl_vars['cbcollection']->get_thumb($this->_tpl_vars['c'][$this->_sections['list']['index']],'small','TRUE'); ?>
" style="padding:2px; border:1px solid #ccc" />
            </div>
            <div class="moveL">
            	<a style="font-size:12px;" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/admin_area/edit_collection.php?collection=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
"><?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_name']; ?>
</a> (<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['total_objects']; ?>
 <?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['type']; ?>
)
            	<div style="height:4px;"></div>
                <span class="vdo_sets">
                    Featured:<strong><?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['featured']; ?>
 </strong> &#8226;
                    Active:<strong><?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['active']; ?>
</strong>  &#8226;
                    Type:<strong><?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['type']; ?>
</strong>  &#8226;
                    Uploaded:<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['c'][$this->_sections['list']['index']]['date_added'])) ? $this->_run_mod_handler('niceTime', true, $_tmp) : niceTime($_tmp)); ?>
</strong>  &#8226;
                    User:<strong><a href="view_user.php?uid=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['userid']; ?>
"><?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['username']; ?>
</a></strong>
                </span>
                    <div id="vid_opt-<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
" style="display:none" class="AdminPhotoActions">              
                    <a href="edit_collection.php?collection=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
">Edit</a> | 
                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/view_collection.php?cid=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
" target="_blank">View</a> <?php if ($this->_tpl_vars['c'][$this->_sections['list']['index']]['featured'] == yes): ?> | 
                    <a href="?make_unfeature=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
">Make Unfeatured</a> <?php endif; ?> 
                    <?php if ($this->_tpl_vars['c'][$this->_sections['list']['index']]['featured'] == no): ?> | 
                    <a href="?make_feature=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
">Make Featured</a> <?php endif; ?>
                    <?php if ($this->_tpl_vars['c'][$this->_sections['list']['index']]['active'] == yes): ?>  | 
                    <a href="?deactivate=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
">Deactivate</a> <?php else: ?> | 
                    <a href="?activate=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
">Activate</a> <?php endif; ?>  |  
                    <a href="?delete_collection=<?php echo $this->_tpl_vars['c'][$this->_sections['list']['index']]['collection_id']; ?>
">Delete</a>
                </div>
            </div>
        </div>
    </li>
<?php endfor; endif; ?>    
<?php else: ?>
	<div align="center"><strong><em>No Photo Found</em></strong></div>
<?php endif; ?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input type="submit" name="make_unfeatured_selected" value="Make Unfeatured"  class="button"/>
            <input type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected collection(s)')"/>
    
    </td>
    </tr>
</table>	
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/pagination.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>