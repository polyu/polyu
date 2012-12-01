<?php /* Smarty version 2.6.18, created on 2012-09-29 11:42:03
         compiled from /mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/blocks/pagination.html */ ?>
<div class="pagination" align="center"> 
<?php if ($this->_tpl_vars['pagination']): ?>
  Pages : <?php if ($this->_tpl_vars['first_link'] != ''): ?><a <?php echo $this->_tpl_vars['first_link']; ?>
>&laquo;</a><?php endif; ?>  <?php if ($this->_tpl_vars['pre_link'] != ''): ?><a <?php echo $this->_tpl_vars['pre_link']; ?>
 >&#8249;</a><?php endif; ?> <?php echo $this->_tpl_vars['pagination']; ?>
  <?php if ($this->_tpl_vars['next_link'] != ''): ?><a <?php echo $this->_tpl_vars['next_link']; ?>
>&#8250;</a><?php endif; ?> <?php if ($this->_tpl_vars['last_link'] != ''): ?><a <?php echo $this->_tpl_vars['last_link']; ?>
>&raquo;</a><?php endif; ?>
<?php endif; ?>
</div>