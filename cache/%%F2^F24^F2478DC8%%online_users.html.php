<?php /* Smarty version 2.6.18, created on 2012-09-11 14:19:06
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/online_users.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_browser_details', '/home/wwwroot/admin_area/styles/cbv2/layout/online_users.html', 19, false),array('modifier', 'truncate', '/home/wwwroot/admin_area/styles/cbv2/layout/online_users.html', 24, false),array('modifier', 'niceTime', '/home/wwwroot/admin_area/styles/cbv2/layout/online_users.html', 27, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['total']; ?>
 users are online</h2>
<div style="height:10px"></div>

<div style="padding:3px; background-color:#09c; font-weight:bold; color:#fff">
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td width="150">User</td>
    <td>Browsing</td>
    <td width="150">Access time</td>
    <td width="100">IP</td>
    </tr>
</table>
</div>


<?php if ($this->_tpl_vars['online_users']): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="browsingUsers">
<?php $_from = $this->_tpl_vars['online_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['agent'])) ? $this->_run_mod_handler('get_browser_details', true, $_tmp, 'theBrowser') : get_browser_details($_tmp, 'theBrowser')); ?>


    
      <tr >
        <td width="150"><?php if ($this->_tpl_vars['user']['username']): ?><a href="view_user?uid=<?php echo $this->_tpl_vars['user']['userid']; ?>
"><?php echo $this->_tpl_vars['user']['username']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['user']['session_string']; ?>
<?php endif; ?> <img class="tipsy_tip browser <?php echo $this->_tpl_vars['theBrowser']['bname']; ?>
" src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" title="<?php echo $this->_tpl_vars['theBrowser']['name']; ?>
 <?php echo $this->_tpl_vars['theBrowser']['version']; ?>
 on <?php echo $this->_tpl_vars['theBrowser']['platform']; ?>
" /></td>
        <td><a href="<?php echo $this->_tpl_vars['user']['current_page']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['current_page'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '..', false, true) : smarty_modifier_truncate($_tmp, 40, '..', false, true)); ?>
</a>
        
        <?php if ($this->_tpl_vars['user']['referer']): ?> <sub class="tipsy_tip" title="<?php echo $this->_tpl_vars['user']['referer']; ?>
"><a href="<?php echo $this->_tpl_vars['user']['referer']; ?>
" target="_blank" style="color:#030">view referer</a></sub><?php endif; ?></td>
        <td width="150"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['session_date'])) ? $this->_run_mod_handler('niceTime', true, $_tmp) : niceTime($_tmp)); ?>
<br><a href="<?php echo $this->_tpl_vars['queryString']; ?>
kick=<?php echo $this->_tpl_vars['user']['session_id']; ?>
" class="kick" title="This will make user force logout">KICK</a></td>
        <td width="100"><?php echo $this->_tpl_vars['user']['ip']; ?>
</td>
      </tr>
  
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>