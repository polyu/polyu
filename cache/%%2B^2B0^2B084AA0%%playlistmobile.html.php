<?php /* Smarty version 2.6.18, created on 2012-12-01 13:03:38
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/playlistmobile.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getThumb', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/playlistmobile.html', 3, false),)), $this); ?>
<video>
<title><?php echo $this->_tpl_vars['video']['title']; ?>
</title>
<image><?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
</image>
<id><?php echo $this->_tpl_vars['video']['videoid']; ?>
</id>
<description><?php echo $this->_tpl_vars['video']['description']; ?>
</description>
<filename><?php echo $this->_tpl_vars['video']['file_name']; ?>
</filename>
</video>
