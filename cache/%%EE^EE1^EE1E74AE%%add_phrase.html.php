<?php /* Smarty version 2.6.18, created on 2012-09-22 07:50:14
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/add_phrase.html */ ?>
<h2>Add New Phrase</h2>
<form name="form1" method="post" action="">

<fieldset class="fieldset">
  <legend>Adding new phrase</legend>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><strong>Phrase Code</strong></td>
      <td><label>
        <input type="text" name="name" id="name">
      </label></td>
    </tr>
    <tr>
      <td>Phrase Text</td>
      <td><label>
        <textarea name="text" id="text" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Language</td>
      <td><label>
        <select name="lang_code" id="lang_code">
        	<?php $this->assign('language', $this->_tpl_vars['lang_obj']->get_langs()); ?>
            
            <?php unset($this->_sections['l_list']);
$this->_sections['l_list']['name'] = 'l_list';
$this->_sections['l_list']['loop'] = is_array($_loop=$this->_tpl_vars['language']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l_list']['show'] = true;
$this->_sections['l_list']['max'] = $this->_sections['l_list']['loop'];
$this->_sections['l_list']['step'] = 1;
$this->_sections['l_list']['start'] = $this->_sections['l_list']['step'] > 0 ? 0 : $this->_sections['l_list']['loop']-1;
if ($this->_sections['l_list']['show']) {
    $this->_sections['l_list']['total'] = $this->_sections['l_list']['loop'];
    if ($this->_sections['l_list']['total'] == 0)
        $this->_sections['l_list']['show'] = false;
} else
    $this->_sections['l_list']['total'] = 0;
if ($this->_sections['l_list']['show']):

            for ($this->_sections['l_list']['index'] = $this->_sections['l_list']['start'], $this->_sections['l_list']['iteration'] = 1;
                 $this->_sections['l_list']['iteration'] <= $this->_sections['l_list']['total'];
                 $this->_sections['l_list']['index'] += $this->_sections['l_list']['step'], $this->_sections['l_list']['iteration']++):
$this->_sections['l_list']['rownum'] = $this->_sections['l_list']['iteration'];
$this->_sections['l_list']['index_prev'] = $this->_sections['l_list']['index'] - $this->_sections['l_list']['step'];
$this->_sections['l_list']['index_next'] = $this->_sections['l_list']['index'] + $this->_sections['l_list']['step'];
$this->_sections['l_list']['first']      = ($this->_sections['l_list']['iteration'] == 1);
$this->_sections['l_list']['last']       = ($this->_sections['l_list']['iteration'] == $this->_sections['l_list']['total']);
?>
            	
                <option value="<?php echo $this->_tpl_vars['language'][$this->_sections['l_list']['index']]['language_code']; ?>
"><?php echo $this->_tpl_vars['language'][$this->_sections['l_list']['index']]['language_name']; ?>
</option>
            <?php endfor; endif; ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
        
      </td>
      <td>&nbsp;</td>
    </tr>
  </table>
</fieldset>
<div style="margin:auto; width:99%; margin:10px"><input type="submit" name="add_phrase" id="add_phrase" value="Add Phrase" class="button"><br><br>

To display this text in your template , simple add this where you want to display your text <?php echo $this->_tpl_vars['LANG']['phrase_code']; ?>
</div>
</form>
