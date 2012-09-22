<?php /* Smarty version 2.6.18, created on 2012-09-11 12:49:32
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/group_category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'post_form_val', '/home/wwwroot/admin_area/styles/cbv2/layout/group_category.html', 21, false),)), $this); ?>
<span class="page_title">Group Categories</span>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200" align="left" valign="middle" class="left_head" style="text-indent:10px">Manage Group Categories</td>
    <td class="head">&nbsp;</td>
    <td width="100" class="right_head">&nbsp;</td>
  </tr>
</table>


<?php if ($this->_tpl_vars['edit_category'] != 'show'): ?>
<form action="group_category.php" method="post" enctype="multipart/form-data" name="add_category" id="Add Category">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="block">
  <tr>
      <td class="td_body">&nbsp;</td>
      <td align="right" class="td_body">* are required fields</td>
    </tr>
    <tr>
      <td valign="top" class="td_body">Category Name*</td>
      <td class="td_body"><label>
        <input name="name" type="text" id="name" value="<?php echo ((is_array($_tmp='name')) ? $this->_run_mod_handler('post_form_val', true, $_tmp) : post_form_val($_tmp)); ?>
" size="45" />
      </label></td>
    </tr>
    <tr>
      <td valign="top" class="td_body">Category Description*</td>
      <td class="td_body"><textarea name="desc" id="desc" cols="33" rows="5"><?php echo ((is_array($_tmp='desc')) ? $this->_run_mod_handler('post_form_val', true, $_tmp) : post_form_val($_tmp)); ?>
</textarea></td>
    </tr>
    <tr>
      <td valign="top" class="td_body">Make Default Category</td>
      <td class="td_body"><p>
        <label>
          <input type="radio" name="default" value="yes" id="default_0" />
          Yes</label>
        <label>
          <input name="default" type="radio" id="default_1" value="no" checked="checked" />
          No</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td class="td_body">Category Thumb</td>
      <td align="left" class="td_body"><label for="cat_thumb"></label>
      <input type="file" name="cat_thumb" id="cat_thumb" /></td>
    </tr>
    <tr>
      <td class="td_body">&nbsp;</td>
      <td align="right" class="td_body"><input type="submit" name="add_cateogry" id="button" value="Add Category" onclick="return validate_category_form(add_category)" class="button"/></td>
    </tr>
</table>
</form>
<?php endif; ?>
<?php if ($this->_tpl_vars['edit_category'] == 'show'): ?>
<form action="" method="post" enctype="multipart/form-data" name="edit_category" id="Edit Category">
<input name="cid" value="<?php echo $this->_tpl_vars['cat_details']['category_id']; ?>
" type="hidden" />
<input name="cur_name" value="<?php echo $this->_tpl_vars['cat_details']['category_name']; ?>
" type="hidden" />
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    
    <tr>
      <td class="td_body">&nbsp;</td>
      <td align="right" class="td_body">* are required fields</td>
    </tr>
    <tr>
      <td valign="top" class="td_body">Category Name*</td>
      <td class="td_body"><label>
        <input name="name" type="text" id="name" value="<?php echo $this->_tpl_vars['cat_details']['category_name']; ?>
" size="45" />
      </label></td>
    </tr>
    <tr>
      <td valign="top" class="td_body">Category Description*</td>
      <td class="td_body"><textarea name="desc" id="desc" cols="33" rows="5"><?php echo $this->_tpl_vars['cat_details']['category_desc']; ?>
</textarea></td>
    </tr>
     <tr>
      <td valign="top" class="td_body">Make Default Category</td>
      <td class="td_body"><p>
        <label>
          <input type="radio" name="default" value="yes" id="default_0" <?php if ($this->_tpl_vars['cat_details']['isdefault'] == 'yes'): ?> checked="checked"<?php endif; ?> />
          Yes</label>
        <label>
          <input name="default" type="radio" id="default_1" value="no" <?php if ($this->_tpl_vars['cat_details']['isdefault'] == 'no'): ?> checked="checked"<?php endif; ?> />
          No</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td class="td_body">Category Thumb</td>
      <td class="td_body"><label>
        <input type="file" name="cat_thumb" id="cat_thumb" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="right" class="tr_head"><label>
        <input type="submit" name="update_category" id="button" value="Update Category" onclick="return validate_category_form(edit_category)" class="button"/>
      </label></td>
    </tr>
  </table>
</form>
<?php endif; ?>


<div style="margin:10px 0px 10px 0px">
<span class="page_title">Category List</span>
</div>

<?php if ($this->_tpl_vars['total'] != 0): ?>
<form name="category" action="?update_order" method="post">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td width="250" class="left_head" style="text-indent:10px">Category Name</td>
    <td width="50" align="left" class="head">Order</td>
    <td width="250" class="head">Description</td>
    <td width="100" class="head">Default</td>
    <td width="150" class="head">Action</td>
    <td width="20" align="left" class="right_head">&nbsp;</td>
  </tr>
<?php $this->assign('bgcolor', ""); ?>
<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['category']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<script type="text/javascript">
cat_div = "#thumbs_<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
";
<?php echo '
   $(function() { '; ?>

		$("#thumbs_<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
").tooltip(<?php echo '{showURL: false,delay: 0});
	});
  '; ?>

</script>
  <tr bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
" class="item_listing">
    <td style="text-indent:10px"><?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_name']; ?>
 - <a id="thumbs_<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
"  title="<img src='<?php echo $this->_tpl_vars['cbgroup']->get_category_thumb($this->_tpl_vars['category'][$this->_sections['list']['index']]); ?>
'  />" href="javascript:void(0)">View Thumb</a></td>
    <td >
    <input name="category_order_<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
" type="text" id="order" style="border:1px solid #999; padding:2px; width:30px" value="<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_order']; ?>
" size="5" maxlength="5" /></td>
  
    <td><?php if ($this->_tpl_vars['category'][$this->_sections['list']['index']]['category_desc']): ?><?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_desc']; ?>
<?php else: ?><em>N/A</em><?php endif; ?></td>
    <td><?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['isdefault']; ?>
</td>
    <td>
      <li><a href="?category=<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
">Edit</a></li>
      <li><a href="javascript:Confirm_Delete('?delete_category=<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
')">Delete</a></li>
     <?php if ($this->_tpl_vars['category'][$this->_sections['list']['index']]['isdefault'] != 'yes'): ?><li><a href="?make_default=<?php echo $this->_tpl_vars['category'][$this->_sections['list']['index']]['category_id']; ?>
">Make Default</a></li><?php endif; ?>
    </td>
    <td>&nbsp;</td>
  </tr>
 <?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
 	 <?php $this->assign('bgcolor', "#EEEEEE"); ?>
 <?php else: ?>
	 <?php $this->assign('bgcolor', ""); ?>
 <?php endif; ?>
 
<?php endfor; endif; ?>

</table>


<div><input type="submit" value="Update" name="update_order" class="button" style="margin-top:10px" /></div>
</form>
<?php else: ?>
No Category Has Been Created Yet
<?php endif; ?>
<br />
<br />

