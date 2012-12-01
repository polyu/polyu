<?php /* Smarty version 2.6.18, created on 2012-09-25 10:37:11
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/email_settings.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'form_val', '/home/wwwroot/admin_area/styles/cbv2/layout/email_settings.html', 91, false),)), $this); ?>
<h2>Email Settings</h2>
<form action="" method="post" enctype="multipart/form-data" name="player_settings">
<fieldset class="fieldset" style="border:none">
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block">
<tr>
<td width="301" valign="top"><strong><label for="mail_type">Mailer</label></strong><br />
  Select Mailer Type php Mail() or SMTP</label></td>
<td width="813" valign="top">
  <select name="mail_type" id="mail_type">
    <option value="mail" <?php if ($this->_tpl_vars['row']['mail_type'] == 'mail'): ?> selected="selected"<?php endif; ?>>PHP mail()</option>
    <option value="smtp" <?php if ($this->_tpl_vars['row']['mail_type'] == 'smtp'): ?> selected="selected"<?php endif; ?>>smtp</option>
  </select></td>
</tr>
<tr>
  <td valign="top"><strong><label for="smtp_host">SMTP Host</label><br />
    </strong>If using smtp, please enter its server</td>
  <td valign="top">
    <input type="text" name="smtp_host" id="smtp_host" value="<?php echo $this->_tpl_vars['row']['smtp_host']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong><label for="smtp_port">SMTP Port</label></strong><br />
    if using smtp, Set SMTP server port</td>
  <td valign="top">
    <input type="text" name="smtp_port" id="smtp_port" value="<?php echo $this->_tpl_vars['row']['smtp_port']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong><label for="smtp_user">SMTP Username</label></strong><br />
  if using smtp, please enter SMTP username</td>
  <td valign="top">
    <input type="text" name="smtp_user" id="smtp_user" value="<?php echo $this->_tpl_vars['row']['smtp_user']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong><label for="smtp_pass">SMTP Password</label></strong><br />
    Enter SMTP password</td>
  <td valign="top">
    <input type="password" name="smtp_pass" id="smtp_pass" value="<?php echo $this->_tpl_vars['row']['smtp_pass']; ?>
" /></td>
</tr>
<tr>
  <td valign="top"><strong>SMTP Auth</strong><br /> 
    Enable SMTP Authentication
</td>
  <td valign="top"><select name="smtp_auth" id="smtp_auth">
    <option value="yes" <?php if ($this->_tpl_vars['row']['smtp_auth'] == 'yes'): ?> selected="selected"<?php endif; ?>>yes</option>
    <option value="no" <?php if ($this->_tpl_vars['row']['smtp_auth'] == 'no'): ?> selected="selected"<?php endif; ?>>no</option>
  </select></td>
</tr>
<tr>
  <td valign="top">&nbsp;</td>
  <td valign="top">&nbsp;</td>
</tr>
<tr>
  <td valign="top">&nbsp;</td>
  <td valign="top">&nbsp;</td>
</tr>
</table>
<div align="left"><input type="submit" class="button" value="Update" name="update_settings" /></div>
</fieldset>

</form>
<div style="height:10px"></div>
<h2>Email Templates Settings</h2>

<div style="height:10px"></div>

<div style="padding-right:10px">
<?php $this->assign('templates', $this->_tpl_vars['cbemail']->get_templates()); ?>

<?php if ($this->_tpl_vars['templates']): ?><form name="email_templates" method="post">
<ul class="optionsLists" >
	
    <?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['etemp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['etemp']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['template']):
        $this->_foreach['etemp']['iteration']++;
?>
    	<li <?php if ($this->_foreach['etemp']['iteration'] == '1'): ?> class="selected"<?php endif; ?>
        	onclick="
            	$('.tempselected').removeClass('selected').hide();
            	$('#template-<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
').show().addClass('tempselected');
            	
                $('.selected').removeClass('selected');
            	$(this).toggleClass('selected');
                
                "><?php echo $this->_tpl_vars['template']['email_template_name']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>

</ul>
<div class="optionsListsCont">
	<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['etemp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['etemp']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['template']):
        $this->_foreach['etemp']['iteration']++;
?>
    	<div id="template-<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
" 
        	<?php if ($this->_foreach['etemp']['iteration'] != '1'): ?> style="display:none" <?php else: ?>class="tempselected"<?php endif; ?>>
            
            <label for="subject<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
">Email Subject</label>
            <div class="templateCodeCont" style="padding:3px"><input type="text" name="subject<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
" id="subject<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
"
            	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['template']['email_template_subject'])) ? $this->_run_mod_handler('form_val', true, $_tmp) : form_val($_tmp)); ?>
" style="border:0px; background:none; width:100%" /></div>
                <br />

                
            <label for="message<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
">Email message</label>
			<div class="templateCodeCont"><textarea name="message<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
" cols="60" rows="8" id="message<?php echo $this->_tpl_vars['template']['email_template_id']; ?>
" class="templateCode"><?php echo ((is_array($_tmp=$this->_tpl_vars['template']['email_template'])) ? $this->_run_mod_handler('form_val', true, $_tmp) : form_val($_tmp)); ?>
</textarea></div></td>   
        </div>     
    <?php endforeach; endif; unset($_from); ?>
    <div align="right" style="margin-top:5px"><input type="submit" class="button" value="Save Templates" name="update" /></div>
</div></form>
<?php endif; ?>
</div>