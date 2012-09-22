<?php /* Smarty version 2.6.18, created on 2012-09-11 12:49:40
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/ads_add_placements.html */ ?>
<?php if ($this->_tpl_vars['Cbucket']->show_page == true): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js']; ?>
/popup_image.js"></script>

<!-- Adding Placement Form -->
<form name="AddPlacement" id="AddPlacement" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" class="left_head">&nbsp;</td>
    <td class="head">Add Placement </td>
    <td width="10" class="right_head">&nbsp;</td>
  </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">

  <tr>
    <td colspan="3" class="td_body">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="td_body"><strong><label for="placement_name">Placement Name</label> </strong></td>
  </tr>
  <tr>
    <td colspan="3" class="td_body"><input name="placement_name" id="placement_name" value="" /></td>
  </tr>
  <tr>
    <td colspan="3" class="td_body"><strong><label for="placement_code">Placement Code</label>     </strong></td>
  </tr>
  <tr>
    <td colspan="3" class="td_body"><input name="placement_code" value="" id="placement_code"/></td>
  </tr>
  <tr>
    <td colspan="3" class="td_body">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="td_body">
      <label>
      <input type="submit" name="AddPlacement" value="Submit" id="button"/>
    </label></td>
  </tr>
</table>
</form>
<em><strong><br />
<br />

<!-- Adding Placement Form -->
 <span class="tr_head">Note: if you delete any placement, all ads under it will be deleted</span>
<!-- Listing Placements Stars -->
<br />
<br />

</strong></em>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" class="left_head"><div  style="width:30px; padding-left:5px">ID</div></td>
    <td class="head" ><div class="head_sep_left" style="width:150px">PlacementName</div></td>
    <td width="20%" class="head"><div class="head_sep_left" style="width:150px">PlacementCode</div></td>
    <td width="15%" class="head"><div class="head_sep_left" style="width:150px">TotalAds</div></td>
    <td width="15%" class="right_head" ><div class="head_sep_left" style="width:100px">Action</div></td>
  </tr>
</table>
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
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="<?php echo $this->_tpl_vars['bgcolor']; ?>
">
              <tr>
                <td width="30" align="center"><div style="padding-left:15px"><?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement_id']; ?>
</div></td>
                <td ><div style="padding-left:15px"><?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement_name']; ?>
</div></td>
                <td width="20%"><div style="padding-left:15px"><strong><?php echo '{AD place='; ?>
<?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement']; ?>
<?php echo '}'; ?>
</strong></div></td>
                <td width="15%"><div style="padding-left:15px"><?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['total_ads']; ?>
</div></td>
                <td width="15%"><div style="padding-left:15px"><?php if ($this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['disable'] == no): ?><a href="?remove=<?php echo $this->_tpl_vars['ads_placements'][$this->_sections['a_list']['index']]['placement']; ?>
">Remove</a><?php else: ?>Default Placement<?php endif; ?></div></td>
              </tr>
</table>
            <?php if ($this->_tpl_vars['bgcolor'] == ""): ?>
 	 <?php $this->assign('bgcolor', "#EEEEEE"); ?>
 <?php else: ?>
	 <?php $this->assign('bgcolor', ""); ?>
 <?php endif; ?>
<?php endif; ?>
<?php endfor; endif; ?>
<!-- Listing Placements End -->   
<?php endif; ?>