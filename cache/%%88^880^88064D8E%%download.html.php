<?php /* Smarty version 2.6.18, created on 2012-09-10 16:06:45
         compiled from /home/wwwroot/styles/cbv2new/layout/download.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/download.html', 17, false),array('function', 'videoLink', '/home/wwwroot/styles/cbv2new/layout/download.html', 22, false),array('modifier', 'sprintf', '/home/wwwroot/styles/cbv2new/layout/download.html', 19, false),)), $this); ?>

<script>
var download_file = '<?php echo $this->_tpl_vars['vdo']['download_file']; ?>
';
<?php echo '
/*	$(document).ready
	(function()
	  {
		setTimeout("location.href=\'"+download_file+"\'",3000);				   
	  }
	)
*/	
'; ?>

</script>

<div style="width:98%; margin:auto">

<?php echo smarty_lang(array('code' => 'downloading_string','assign' => 'downloadingstring'), $this);?>


<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['downloadingstring'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['vdo']['title']) : sprintf($_tmp, $this->_tpl_vars['vdo']['title'])); ?>
</h2>

<?php echo smarty_lang(array('code' => 'download_redirect_msg','assign' => 'redirectmsg'), $this);?>

<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['vdo'],'assign' => 'vidlink'), $this);?>

<?php $this->assign('downloadfile', $this->_tpl_vars['vdo']['download_file']); ?>

<p><?php echo ((is_array($_tmp=$this->_tpl_vars['redirectmsg'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['downloadfile'], $this->_tpl_vars['vidlink']) : sprintf($_tmp, $this->_tpl_vars['downloadfile'], $this->_tpl_vars['vidlink'])); ?>
</p></div>