<?php /* Smarty version 2.6.18, created on 2012-09-25 10:18:42
         compiled from /home/wwwroot/styles/cbv2new/layout/contact.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/contact.html', 1, false),array('function', 'load_captcha', '/home/wwwroot/styles/cbv2new/layout/contact.html', 22, false),array('modifier', 'capitalize', '/home/wwwroot/styles/cbv2new/layout/contact.html', 8, false),)), $this); ?>
<div style="margin:auto; width:98%"><h2><?php echo smarty_lang(array('code' => 'contact_us'), $this);?>
</h2>

<p><?php echo smarty_lang(array('code' => 'contact_us_msg'), $this);?>
</p>
<form id="form1" name="form1" method="post" action="" class="contact_form">
  <label for="name"><?php echo smarty_lang(array('code' => 'name'), $this);?>
</label>
  <input type="text" name="name" id="name" />
  <div style="height:10px;"></div>
  <label for="email"><?php echo smarty_lang(array('code' => ((is_array($_tmp='email')) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp))), $this);?>
</label>
  <input type="text" name="email" id="email" />
  <div style="height:10px;"></div>
  <label for="reason"><?php echo smarty_lang(array('code' => 'pelase_enter_reason'), $this);?>
</label>
  <input type="text" name="reason" id="reason" />
  <div style="height:10px;"></div>
  <label for="message"><?php echo smarty_lang(array('code' => 'message'), $this);?>
</label>
  <textarea name="message" id="message" cols="45" rows="5"></textarea>
  <div style="height:10px;"></div>
  
<?php $this->assign('captcha', get_captcha()); ?>
<?php if ($this->_tpl_vars['captcha']): ?> 
    <?php if ($this->_tpl_vars['captcha']['show_field']): ?>
        <label for="verification_code">Verification Code</label>
            <?php echo load_captcha(array('captcha' => $this->_tpl_vars['captcha'],'load' => 'field','field_params' => ' id="verification_code" '), $this);?>

    <?php endif; ?>
   <div align="right" style="width:480px">&nbsp;<?php echo load_captcha(array('captcha' => $this->_tpl_vars['captcha'],'load' => 'function'), $this);?>
</div>
<?php endif; ?>

 <div align="right" style="width:480px; padding-top:10px"> <input type="submit" name="contact" id="button" value="Contact Us" class="cb_button" /> </div>           
</form>
<p>&nbsp;</p>
</div>