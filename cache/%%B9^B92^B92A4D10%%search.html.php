<?php /* Smarty version 2.6.18, created on 2012-09-25 10:13:29
         compiled from /home/wwwroot/styles/cbv2new/layout/search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/search.html', 6, false),array('function', 'ANCHOR', '/home/wwwroot/styles/cbv2new/layout/search.html', 38, false),array('function', 'AD', '/home/wwwroot/styles/cbv2new/layout/search.html', 70, false),array('modifier', 'get_form_val', '/home/wwwroot/styles/cbv2new/layout/search.html', 7, false),array('modifier', 'sprintf', '/home/wwwroot/styles/cbv2new/layout/search.html', 31, false),)), $this); ?>
<div style="width:98%; margin:auto">

	<div id="simple_search" class="simple_container" style="border:none">
    	<div class="quick_search">
        <form name="search-form" method="get" action="">
            <span class='title'><?php echo $this->_tpl_vars['title']; ?>
 &#8250; <?php echo smarty_lang(array('code' => 'search'), $this);?>
 &#8211;</span>
          <input type="text" name="query" value="<?php echo ((is_array($_tmp='query')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" id="query" />
            type
            <select id="SearchType" name="type">
            	<?php $_from = $this->_tpl_vars['Cbucket']->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stypes'] => $this->_tpl_vars['t']):
?>
                	<option value="<?php echo $this->_tpl_vars['stypes']; ?>
" <?php if ($_GET['type'] == $this->_tpl_vars['stypes']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['stypes']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <input type="submit" name="cbsearch" id="cbsearch" value="<?php echo smarty_lang(array('code' => 'search'), $this);?>
" class="cb_button" />
        </form>
    	</div>
    </div>
	<div class="simple_container clearfix" style="min-height:400px; overflow:visible; display:none" id="advance_search">
	<?php $_from = $this->_tpl_vars['Cbucket']->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search_type_key'] => $this->_tpl_vars['search_type']):
?>
    
      <?php if ($this->_tpl_vars['search_type']): ?>
      
		<?php $this->assign('type', $this->_tpl_vars['cbsearch']->init_search($this->_tpl_vars['search_type_key'])); ?>
        	
          <?php if ($this->_tpl_vars['type']): ?>
            <?php $this->assign('types', $this->_tpl_vars['type']->search_type); ?>
            
            <?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stype'] => $this->_tpl_vars['search']):
?>
             <div id="<?php echo $this->_tpl_vars['stype']; ?>
" class="search_type">
             <?php echo smarty_lang(array('code' => 'search_for_s','assign' => 'searchfor'), $this);?>

                <h2><?php echo ((is_array($_tmp=$this->_tpl_vars['searchfor'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['search']['title']) : sprintf($_tmp, $this->_tpl_vars['search']['title'])); ?>
</h2>
                <div>
                <form name="search-form-<?php echo $this->_tpl_vars['search']['title']; ?>
" method="get" action="">
                <input type="hidden" name="type" value="<?php echo $this->_tpl_vars['stype']; ?>
" />
                    <?php $_from = $this->_tpl_vars['search']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    	<div>
                        <label class="label"><?php echo $this->_tpl_vars['field']['title']; ?>
</label>
                        <?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_before']), $this);?>
<?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['field']); ?>
<?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_after']), $this);?>

                        </div>
                    <?php endforeach; endif; unset($_from); ?>
                    <label for="button"></label>
                    <input type="submit" name="cbsearch" id="cbsearch" value="Search" class="cb_button" />
                </form>
                </div>
              </div>
            <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
      <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
    </div>
<span class="more_button" style="margin-bottom:10px"><a href="javascript:void(0)" onClick="showAdvanceSearch('simple_search','advance_search','more_button','more_button_up');"><?php echo smarty_lang(array('code' => 'more_options'), $this);?>
</a></span>

<div>
    <div class="heading"><?php echo $this->_tpl_vars['search_type_title']; ?>
</div>
    <div style="height:10px"></div>
    
    <div style="width:810px; float:left">
    <?php if ($this->_tpl_vars['results']): ?>
        <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
        <?php $this->assign($this->_tpl_vars['template_var'], $this->_tpl_vars['result']); ?>
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['display_template']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>
    	<?php echo smarty_lang(array('code' => 'no_results_found'), $this);?>

    <?php endif; ?>
    <div class="clearfix"></div>
    
    </div>
    <div style="width:160px; float:right">
    <?php echo getAd(array('place' => 'ad_160x600'), $this);?>

    </div>
    
    <div class="clearfix"></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/pagination.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>