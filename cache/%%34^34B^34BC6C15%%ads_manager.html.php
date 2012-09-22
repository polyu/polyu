<?php /* Smarty version 2.6.18, created on 2012-09-11 12:49:38
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/ads_manager.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ad', '/home/wwwroot/admin_area/styles/cbv2/layout/ads_manager.html', 18, false),array('modifier', 'number_format', '/home/wwwroot/admin_area/styles/cbv2/layout/ads_manager.html', 146, false),array('modifier', 'date_format', '/home/wwwroot/admin_area/styles/cbv2/layout/ads_manager.html', 147, false),)), $this); ?>
<?php if ($this->_tpl_vars['ad_data']['ad_name'] != ''): ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" class="left_head">&nbsp;</td>
    <td class="head">Eid Advertisement</td>
    <td width="10" class="right_head">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><form id="form1" name="form1" method="post" action="">
    <input type="hidden" name="ad_id" value="<?php echo $this->_tpl_vars['ad_data']['ad_id']; ?>
" /> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="block">
        <tr>
          <td valign="top">&nbsp;</td>
          <td align="right">all fields are required</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['ad_data']['ad_code'])) ? $this->_run_mod_handler('ad', true, $_tmp) : ad($_tmp)); ?>
</td>
        </tr>
        <tr>
          <td width="150" valign="top"><label for="name">Advertisement Name</label>
          *</td>
          <td><input name="name" type="text" id="name" value="<?php echo $this->_tpl_vars['ad_data']['ad_name']; ?>
" size="45" />
            e.g Home Banner</td>
        </tr>
        <tr>
          <td valign="top"><label for="placement">Advertisement Placement</label></td>
          <td><select name="placement" id="placement">
         <?php $this->assign('ads_placements', $this->_tpl_vars['adsObj']->get_placements()); ?>
         <?php unset($this->_sections['a_list']);
$this->_sections['a_list']['name'] = 'a_list';
$this->_sections['a_list']['loop'] = is_array($_loop=$this->_tpl_vars['ads_placements']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a_list']['show'] = true;
$this->_sections['a_list']['max'] = $this->_sections['a_list']['loop'];
$this->_sections['a_list']['step'] = 1;
$this->_sections['a_list']['start'] = $this->_sections['a_list']['step'] > 0 ? 0 : $this->_sections['a_list']['loop']-1;
if ($this->_sections['a_list']['show']) {
    $this->_sections['a_list']['total'] = $this->_sections['a_list']['loop'];
    if ($this->_sections['a_list']['total'] == 0)
        $this->_sections['a_list']['show'] = false;
} else
    $this->_sections['a_list']['total'] = 0;
if ($this->_sections['a_list']['show']):

            for ($this->_sections['a_list']['index'] = $this->_sections['a_list']['start'], $this->_sections['a_list']['iteration'] = 1;
                 $this->_sections['a_list']['iteration'] <= $this->_sections['a_list']['total'];
                 $this->_sections['a_list']['index'] += $this->_sections['a_list']['step'], $this->_sections['a_list']['iteration']++):
$this->_sections['a_list']['rownum'] = $this->_sections['a_list']['iteration'];
$this->_sections['a_list']['index_prev'] = $this->_sections['a_list']['index'] - $this->_sections['a_list']['step'];
$this->_sections['a_list']['index_next'] = $this->_sections['a_list']['index'] + $this->_sections['a_list']['step'];
$this->_sections['a_list']['first']      = ($this->_sections['a_list']['iteration'] == 1);
$this->_sections['a_list']['last']       = ($this->_sections['a_list']['iteration'] == $this->_sections['a_list']['total']);
?>
         <?php if ($this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement_name'] != ''): ?>
            <option value="<?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement']; ?>
" <?php if ($this->_tpl_vars['ad_data']['ad_placement'] == $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement_name']; ?>
</option>
         <?php endif; ?>
		 <?php endfor; endif; ?>
		  
        
          </select>
            <a href="ads_add_placements.php">Add More Placements</a></td>
        </tr>
        <tr>
          <td valign="top"><label for="code">Advertisement Code</label></td>
          <td><textarea name="code" id="code" cols="45" rows="5"><?php echo $this->_tpl_vars['ad_data']['ad_code']; ?>
</textarea></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><label>
            <input name="status" type="radio" value="1" <?php if ($this->_tpl_vars['ad_data']['ad_status'] == '1'): ?>checked="checked" <?php endif; ?> />
            Active</label>
            <label>
              <input type="radio" name="status" value="0"<?php if ($this->_tpl_vars['ad_data']['ad_status'] == '0'): ?>checked="checked"<?php endif; ?>  />
            Inactive</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right"><input type="submit" name="update" class="button" value="Update Advertisement" onclick="return validate_ad_form(add_adv)"/></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
	<br />
<?php else: ?>
<?php if ($this->_tpl_vars['edit_ad'] != 'show'): ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" class="left_head">&nbsp;</td>
    <td class="head">Add Advertisement</td>
    <td width="10" class="right_head">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><form id="form1" name="form1" method="post" action="ads_manager.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="block">
        <tr>
          <td valign="top">&nbsp;</td>
          <td align="right">all fields are required</td>
        </tr>
        <tr>
          <td width="150" valign="top"><label for="name">Advertisement Name</label>
          *</td>
          <td><input name="name" type="text" id="name" size="45" />
            e.g Home Banner</td>
        </tr>
        <tr>
          <td valign="top"><label for="placement">Advertisement Placement</label></td>
          <td><select name="placement" id="placement">
         <?php $this->assign('ads_placements', $this->_tpl_vars['adsObj']->get_placements()); ?>
         <?php unset($this->_sections['a_list']);
$this->_sections['a_list']['name'] = 'a_list';
$this->_sections['a_list']['loop'] = is_array($_loop=$this->_tpl_vars['ads_placements']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a_list']['show'] = true;
$this->_sections['a_list']['max'] = $this->_sections['a_list']['loop'];
$this->_sections['a_list']['step'] = 1;
$this->_sections['a_list']['start'] = $this->_sections['a_list']['step'] > 0 ? 0 : $this->_sections['a_list']['loop']-1;
if ($this->_sections['a_list']['show']) {
    $this->_sections['a_list']['total'] = $this->_sections['a_list']['loop'];
    if ($this->_sections['a_list']['total'] == 0)
        $this->_sections['a_list']['show'] = false;
} else
    $this->_sections['a_list']['total'] = 0;
if ($this->_sections['a_list']['show']):

            for ($this->_sections['a_list']['index'] = $this->_sections['a_list']['start'], $this->_sections['a_list']['iteration'] = 1;
                 $this->_sections['a_list']['iteration'] <= $this->_sections['a_list']['total'];
                 $this->_sections['a_list']['index'] += $this->_sections['a_list']['step'], $this->_sections['a_list']['iteration']++):
$this->_sections['a_list']['rownum'] = $this->_sections['a_list']['iteration'];
$this->_sections['a_list']['index_prev'] = $this->_sections['a_list']['index'] - $this->_sections['a_list']['step'];
$this->_sections['a_list']['index_next'] = $this->_sections['a_list']['index'] + $this->_sections['a_list']['step'];
$this->_sections['a_list']['first']      = ($this->_sections['a_list']['iteration'] == 1);
$this->_sections['a_list']['last']       = ($this->_sections['a_list']['iteration'] == $this->_sections['a_list']['total']);
?>
         <?php if ($this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement_name'] != ''): ?>
            <option value="<?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement']; ?>
" <?php echo $this->_tpl_vars['select']; ?>
 ><?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement_name']; ?>
</option>
         <?php endif; ?>
		 <?php endfor; endif; ?>
		  
        
          </select>
            <a href="ads_add_placements.php">Add More Placements</a></td>
        </tr>
        <tr>
          <td valign="top"><label for="code">Advertisement Code</label></td>
          <td><textarea name="code" id="code" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><label>
            <input name="status" type="radio" value="1" checked="checked" />
            Active</label>
            <label>
              <input type="radio" name="status" value="0" />
            Inactive</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right"><input type="submit" name="add" class="button" value="Add Advertisement" onclick="return validate_ad_form(add_adv)"/></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
 <?php endif; ?>
<br />
<h2>Advertisement Manager</h2>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" >
  <tr>
    <td colspan="5" class="tr_head">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="block_head"> 
      <tr>
        <td width="50" align="left" class="left_head">AID</td>
        <td width="150" class="head" align="left"><div class="head_sep_left" style="width:130px">Advertisment name</div></td>
        <td class="head"><div class="head_sep_left" style="width:150px">Advertisment</div></td>
        <td width="120" align="left" class="head"><div class="head_sep_left" style="width:100px">Impressions</div></td>
        <td width="120" align="left" class="head"><div class="head_sep_left" style="width:100px">Date Added</div> </td>
        <td width="270" align="left" class="head"><div class="head_sep_left" style="width:220px">Placement</div></td>
        <td width="200" class="right_head"><div class="head_sep_left" style="width:100px">Actions</div></td>
      </tr>
     </table>
     <div class="block"> 
     <table width="100%" border="0" cellspacing="0" cellpadding="0" > 
      <?php $this->assign('ads', $this->_tpl_vars['adsObj']->get_advertisements()); ?>
      <?php if ($this->_tpl_vars['ads']): ?>
      <?php $_from = $this->_tpl_vars['ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad']):
?>
      <tr>
        <td width="50" align="left"><div><?php echo $this->_tpl_vars['ad']['ad_id']; ?>
</div></td>
        <td width="150" align="left"><div style="padding-left:10px"><?php echo $this->_tpl_vars['ad']['ad_name']; ?>
</div></td>
        <td align="left"><div style="padding-left:10px"><?php echo $this->_tpl_vars['ad']['ad_codes']; ?>
<a href="ads_manager.php?ad_id=<?php echo $this->_tpl_vars['ad']['ad_id']; ?>
">View Advertisment</a></div></td>
        <td width="120" align="left"><div style="padding-left:10px"><?php echo ((is_array($_tmp=$this->_tpl_vars['ad']['ad_impressions'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</div></td>
        <td width="120" align="left"><div style="padding-left:10px"><?php echo ((is_array($_tmp=$this->_tpl_vars['ad']['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</div></td>       
        <td width="270" align="left"><div style="padding-left:10px"><?php echo $this->_tpl_vars['adsObj']->get_placement_name($this->_tpl_vars['ad']['ad_placement']); ?>
</div></td>
        <td width="200" align="left"><div style="padding-left:10px"><a href="ads_manager.php?ad_id=<?php echo $this->_tpl_vars['ad']['ad_id']; ?>
">Edit</a> | 
<a href="ads_manager.php?delete=<?php echo $this->_tpl_vars['ad']['ad_id']; ?>
">Delete</a> | <?php if ($this->_tpl_vars['ad']['ad_status'] != 1): ?><a href="?activate=<?php echo $this->_tpl_vars['ad']['ad_id']; ?>
">Activate</a><?php else: ?><a href="?deactivate=<?php echo $this->_tpl_vars['ad']['ad_id']; ?>
">Deactivate</a><?php endif; ?></div></td>        
      </tr>
      <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
    </table></div></td>
  </tr>
   <?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
 	 <?php $this->assign('bgcolor', "#EEEEEE"); ?>
 <?php else: ?>
	 <?php $this->assign('bgcolor', ""); ?>
 <?php endif; ?>

</table>
<?php endif; ?>