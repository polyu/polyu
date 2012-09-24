<?php /* Smarty version 2.6.18, created on 2012-09-24 16:21:58
         compiled from /home/wwwroot/styles/cbv2new/layout/blocks/quicklist/block.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/blocks/quicklist/block.html', 3, false),)), $this); ?>
<div  class="quicklist_box">
<div class="quicklist_box_head">
<a href="javascript:void(0)" onClick="quick_show_hide_toggle('#quicklist_cont')"><?php echo smarty_lang(array('code' => 'show_hide'), $this);?>
</a> - <?php echo smarty_lang(array('code' => 'quicklists'), $this);?>
(<?php echo $this->_tpl_vars['cbvid']->total_quicklist(); ?>
) - <a href="javascript:void(0)" onClick="clear_quicklist()" ><?php echo smarty_lang(array('code' => 'remove'), $this);?>
</a></div>
<div id="quicklist_cont" style="display:none">


<?php $this->assign('quicklist', $this->_tpl_vars['cbvid']->get_quicklist()); ?>

<?php if ($this->_tpl_vars['quicklist']): ?>

<div id="my_quicklist" class="my_quicklist">
<!-- Getting Playlist Items-->
<?php $this->assign('bg', 'fff'); ?>
<?php $_from = $this->_tpl_vars['quicklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vid']):
?>
    <?php $this->assign('item', $this->_tpl_vars['cbvid']->get_video_details($this->_tpl_vars['vid'])); ?>
    
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/quicklist/video_block.html", 'smarty_include_vars' => array('video' => $this->_tpl_vars['item'],'bg' => $this->_tpl_vars['bg'],'show_delete' => 'yes','unique_id' => 'quicklist_')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <?php if ($this->_tpl_vars['bg'] == 'fff'): ?>
    <?php $this->assign('bg', 'EFF5F8'); ?>
    <?php else: ?>
    <?php $this->assign('bg', 'fff'); ?>
    <?php endif; ?>
    
<?php endforeach; endif; unset($_from); ?>
<div class="clearfix"></div>
</div>
<?php endif; ?>
</div></div>