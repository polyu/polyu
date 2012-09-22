<?php /* Smarty version 2.6.18, created on 2012-09-11 14:15:57
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/flagged_videos.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'flag_type', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_videos.html', 123, false),array('modifier', 'get_username', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_videos.html', 123, false),array('modifier', 'niceTime', '/home/wwwroot/admin_area/styles/cbv2/layout/flagged_videos.html', 123, false),)), $this); ?>

<?php if ($this->_tpl_vars['mode'] == 'view'): ?>
<span class="page_title">Flagged Videos Manager</span>
<!-- DIsplaying Videos -->
<form name="flagged_video" method="post" id="flagged_video">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/arrow_return.png" width="25" height="25"></td>
    <td height="50" style="padding-left:15px">
     		<input type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input type="submit" name="deactivate_selected" value="Deactivate" class="button" />
            <input type="submit" name="delete_selected" value="Delete Videos"  class="button" onclick="return confirm_it('Are you sure you want to delete these videos')"/>
            
            <input type="submit" name="delete_flags" value="Delete Flags"  class="button" onclick="return confirm_it('Are you sure you want to delete flags of selected videos')"/>
    
    </td>
    </tr>
</table>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" class="head_sep_left">VID</td>
    <td class="head"><div class="head_sep_left" style="width:250px">Details</div></td>
    <td width="50" class="right_head">&nbsp;</td>
  </tr>
</table>





<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php $this->assign('bgcolor', ""); ?>
<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td width="30" align="center" valign="top" class="video_opt_td">    <input name="check_video[]" type="checkbox" id="check_video" value="<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
" /></td>
    <td width="50" align="center" valign="top" class="video_opt_td"><?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
</td>
    <td valign="top"  class="video_opt_td" 
    onmouseover="$('#vid_opt-<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
').show()" 
    onmouseout="$('#vid_opt-<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
').hide()" >
    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/watch_video.php?v=<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videokey']; ?>
" target="_blank" style="text-indent:10px">
    <?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['title']; ?>

    </a> &#8212;
    <span class="vdo_sets">
    Active:<strong><?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['active']; ?>
</strong> &#8226;
    Status:<strong><?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['status']; ?>
</strong>  &#8226;
    Flags:<strong><?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['total_flags']; ?>
</strong>
    </span>
    
    <br />
    <div id="vid_opt-<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
" style="display:none" class="vid_opts">
   	 
      <a href="view_video.php?video=<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
">View</a> | 
      <a href="edit_video.php?video=<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
">Edit</a> |
      <a href="?mode=view_flags&vid=<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
">View Flags</a> |
      <a href="?delete_video=<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
">Delete Video</a> |
      <a href="?delete_flags=<?php echo $this->_tpl_vars['videos'][$this->_sections['list']['index']]['videoid']; ?>
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
            <input type="submit" name="delete_selected" value="Delete Videos"  class="button" onclick="return confirm_it('Are you sure you want to delete these videos')"/>
            
            <input type="submit" name="delete_flags" value="Delete Flags"  class="button" onclick="return confirm_it('Are you sure you want to delete flags of selected videos')"/>
    
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
<span class="page_title">Viewing <?php echo $this->_tpl_vars['video']['title']; ?>
 flags</span> &#8212; <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/watch_video.php?v=<?php echo $this->_tpl_vars['video']['videokey']; ?>
">View video</a> &#8226; <a href="edit_video.php?video=<?php echo $this->_tpl_vars['video']['videoid']; ?>
">Edit video</a> &#8226; <a href="?delete_flags=<?php echo $this->_tpl_vars['video']['videoid']; ?>
">Delete Flags</a> &#8226; <a href="?delete_video=<?php echo $this->_tpl_vars['video']['videoid']; ?>
">Delete Video</a>
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