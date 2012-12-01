<?php /* Smarty version 2.6.18, created on 2012-11-30 16:52:16
         compiled from /mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/blocks/comments.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/blocks/comments.html', 24, false),)), $this); ?>
<?php $this->assign('bgcolor', 'F2F2F2'); ?>
<?php if ($this->_tpl_vars['comments']): ?>
<table width="99%" border="0" cellpadding="2" cellspacing="1" style="color:#fff">
  <tr>
    <td width="35" height="30" bgcolor="#0066cc">CID</td>
    <td width="35" height="30" bgcolor="#0066cc">UID</td> 
    <td width="100" height="30" bgcolor="#0066cc">Username</td>
    <td width="150" height="30" bgcolor="#0066cc">Email</td>
    <td height="30" bgcolor="#0066cc">Comment</td>
    <td width="200" height="30" bgcolor="#0066cc" >Date</td>
    <td width="70" height="30" bgcolor="#0066cc">Votes</td>
    <td width="100" height="30" bgcolor="#0066cc">&nbsp;</td>
  </tr>
</table>
<div>
<?php $_from = $this->_tpl_vars['comments']['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
	<table width="99%" border="0" cellpadding="2" cellspacing="1" >
          <tr style="background-color:#<?php echo $this->_tpl_vars['bgcolor']; ?>
">
            <td width="35" align="left"><?php echo $this->_tpl_vars['comment']['comment_id']; ?>
</td>
            <td width="35" align="left"><?php echo $this->_tpl_vars['comment']['userid']; ?>
</td>
            <td width="100" align="left"><?php if ($this->_tpl_vars['comment']['anonym_name']): ?><?php echo $this->_tpl_vars['comment']['anonym_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comment']['username']; ?>
<?php endif; ?></td>
            <td  width="150" align="left"><?php if ($this->_tpl_vars['comment']['anonym_email']): ?><?php echo $this->_tpl_vars['comment']['anonym_email']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comment']['email']; ?>
<?php endif; ?></td>
            <td ><div class="edit_comment" id="<?php echo $this->_tpl_vars['comment']['comment_id']; ?>
"><?php echo $this->_tpl_vars['comment']['comment']; ?>
</div></td>
            <td width="200" align="left" ><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
            <td width="70" align="left" ><?php echo $this->_tpl_vars['comment']['vote']; ?>
</td>
            <td width="100" ><a href="?<?php echo $this->_tpl_vars['link']; ?>
&amp;delete_comment=<?php echo $this->_tpl_vars['comment']['comment_id']; ?>
">Delete</a></td>
    </tr>
        
   	<?php if ($this->_tpl_vars['bgcolor'] == 'F2F2F2'): ?>
        	<?php $this->assign('bgcolor', 'FFF'); ?>
       	<?php elseif ($this->_tpl_vars['bgcolor'] == 'FFF'): ?>
        	<?php $this->assign('bgcolor', 'F2F2F2'); ?>
        <?php endif; ?>
        	
<?php endforeach; endif; unset($_from); ?>
</table>
</div>
<?php else: ?>
<div align="center"><em>No User Comments</em></div>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
$(document).ready(function() {
 $(\'.edit_comment\').editable(baseurl+\'/actions/edit_comment.php\', { 
 indicator : \'<img src="\'+baseurl+\'/images/icons/progIndicator.gif">\',
 tooltip   : \'Click to edit...\',
});
</script>
'; ?>