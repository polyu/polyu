<?php /* Smarty version 2.6.18, created on 2012-09-10 17:56:31
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/mass_uploader.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ANCHOR', '/home/wwwroot/admin_area/styles/cbv2/layout/mass_uploader.html', 28, false),)), $this); ?>
<h2>Mass Uploader</h2>
<div style="height:10px"></div>
<?php $this->assign('vid_files', $this->_tpl_vars['cbmass']->get_video_files()); ?>
<?php if ($this->_tpl_vars['vid_files']): ?>

	<form name="mass_upload" method="post" class="cbform">
	<?php $_from = $this->_tpl_vars['vid_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['mass_files'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['mass_files']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['file']):
        $this->_foreach['mass_files']['iteration']++;
?>
    
    <input type="hidden" name="mass_up[]" value="<?php echo $this->_tpl_vars['file']['title']; ?>
" />
    <?php $this->assign('requiredFields', $this->_tpl_vars['Upload']->loadRequiredFields($this->_tpl_vars['file'])); ?>
    <?php $this->assign('optionFields', $this->_tpl_vars['Upload']->loadOptionFields($this->_tpl_vars['file'])); ?>
    <?php $this->assign('locationFields', $this->_tpl_vars['Upload']->loadLocationFields($this->_tpl_vars['file'])); ?>
    <?php $this->assign('cust_fields', $this->_tpl_vars['Upload']->custom_form_fields); ?>
            
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" onclick="$('#file-<?php echo $this->_foreach['mass_files']['iteration']; ?>
').slideToggle()" style="cursor:pointer; margin-bottom:10px" class="block">
          <tr>
            <td width="50" align="center" valign="middle" class="settings_inner_title">#<?php echo $this->_foreach['mass_files']['iteration']; ?>
</td>
            <td align="left" class="settings_inner_title" ><?php echo $this->_tpl_vars['file']['file']; ?>
 - <span style="font-size:11px; color:#06c">enter details</span></td>
          </tr>
      </table>
        
       
<table width="100%" border="0" cellpadding="2" cellspacing="0" class="block" id="file-<?php echo $this->_foreach['mass_files']['iteration']; ?>
" style="display:none">
			<?php $_from = $this->_tpl_vars['requiredFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>

            <tr>
              <td width="114" align="right" valign="top"><label for="<?php echo $this->_tpl_vars['field']['id']; ?>
" class="label"><?php echo $this->_tpl_vars['field']['title']; ?>
</label></td>
              <td valign="top" style="padding-left:10px"><?php if ($this->_tpl_vars['field']['hint_1']): ?><div class="hint"><?php echo $this->_tpl_vars['field']['hint_1']; ?>
</div><br><?php endif; ?><?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_before']), $this);?>
<?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['field'],'TRUE'); ?>

            <?php if ($this->_tpl_vars['field']['hint_2']): ?><br>
            <div class="hint"><?php echo $this->_tpl_vars['field']['hint_2']; ?>
</div><?php endif; ?></td>
    </tr>
            <?php endforeach; endif; unset($_from); ?>
      </table>
      
    <?php endforeach; endif; unset($_from); ?>
    
    <div style="width:100%; margin:10px auto" align="left">
      <div style="padding:10px;border: dotted #0066cc 1px; background-color:#f5faff; " align="center"><input type="submit" name="mass_upload_video" id="mass_upload_video" value="Mass Upload Videos Now" class="button" /></div></div>
    </form>
<?php else: ?>
	
                
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"class="block">
          <tr>
            <td align="center" valign="middle" class="settings_inner_title">NO VIDEO FOUND IN MASS UPLOAD FOLDER </td>
          </tr>
      </table>

<?php endif; ?>
