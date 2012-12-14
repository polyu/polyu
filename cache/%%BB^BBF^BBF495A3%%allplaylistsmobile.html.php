<?php /* Smarty version 2.6.18, created on 2012-12-03 14:00:32
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/mobile/allplaylistsmobile.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getThumb', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/blocks/mobile/allplaylistsmobile.html', 3, false),)), $this); ?>
<playlist>
<title><?php echo $this->_tpl_vars['playlist']['playlist_name']; ?>
</title>
<image><?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
</image>
<id><?php echo $this->_tpl_vars['playlist_id']; ?>
</id>
<description><?php echo $this->_tpl_vars['playlist']['playlist_describe']; ?>
</description>
</playlist>
