<?php /* Smarty version 2.6.18, created on 2012-09-10 10:44:56
         compiled from /home/wwwroot/styles/cbv2new/layout/blocks/view_channel/channel_global.html */ ?>
<div 
	<?php if ($this->_tpl_vars['userquery']->getUserBg($this->_tpl_vars['u'],true)): ?>
    style="background-position:center;background-image:
    	<?php if ($this->_tpl_vars['userquery']->getUserBg($this->_tpl_vars['u'])): ?>
        	url('<?php echo $this->_tpl_vars['userquery']->getUserBg($this->_tpl_vars['u']); ?>
');background-repeat: <?php echo $this->_tpl_vars['u']['background_repeat']; ?>
;
        <?php endif; ?>
        <?php if ($this->_tpl_vars['u']['background_color'] != ''): ?>
        	background-color:<?php echo $this->_tpl_vars['u']['background_color']; ?>
<?php endif; ?>; 
        <?php if ($this->_tpl_vars['u']['background_attachement'] == 'yes'): ?>
        	background-attachment:fixed
        <?php endif; ?>"
    <?php endif; ?>>