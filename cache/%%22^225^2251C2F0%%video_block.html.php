<?php /* Smarty version 2.6.18, created on 2012-12-03 11:11:42
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/quicklist/video_block.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'videoLink', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/quicklist/video_block.html', 3, false),array('function', 'getThumb', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/quicklist/video_block.html', 7, false),array('modifier', 'truncate', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/quicklist/video_block.html', 8, false),array('modifier', 'SetTime', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/quicklist/video_block.html', 13, false),)), $this); ?>

<?php if (! $this->_tpl_vars['videoLink']): ?>
	<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['video'],'assign' => 'videoLink'), $this);?>

<?php endif; ?>
	<div class="playlist_item" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
; <?php if ($this->_tpl_vars['selected'] == $this->_tpl_vars['video']['videoid']): ?> border:1px solid #999<?php endif; ?>"  id="<?php echo $this->_tpl_vars['unique_id']; ?>
playlist_cont_<?php echo $this->_tpl_vars['video']['videoid']; ?>
">
    	<div class="pl_num"><?php echo $this->_sections['item']['iteration']; ?>
</div>
        <div class="pl_thumb"><a href="<?php echo $this->_tpl_vars['videoLink']; ?>
"><img src="<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
" width="45" height="27" border="0" /></a></div>
        <div class="pl_details" onclick="window.location='<?php echo $this->_tpl_vars['videoLink']; ?>
'"><a href="<?php echo $this->_tpl_vars['videoLink']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</a></div>
        <?php if ($this->_tpl_vars['show_delete'] == 'yes'): ?>
        	<div class="pl_delete">
            <img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="cross_icon" onclick="remove_qucklist('#<?php echo $this->_tpl_vars['unique_id']; ?>
playlist_cont_<?php echo $this->_tpl_vars['video']['videoid']; ?>
','<?php echo $this->_tpl_vars['video']['videoid']; ?>
')" title="remove <?php echo $this->_tpl_vars['video']['title']; ?>
 from qucklist" alt="quicklist"></div>
        <?php endif; ?>
  <div class="pl_duration"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['duration'])) ? $this->_run_mod_handler('SetTime', true, $_tmp) : SetTime($_tmp)); ?>
</div>
        
<div class="clearfix"></div>
    </div>
    
    