<?php /* Smarty version 2.6.18, created on 2012-09-10 11:03:45
         compiled from /home/wwwroot/styles/cbv2new/layout/user_videos.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/user_videos.html', 1, false),array('modifier', 'date_format', '/home/wwwroot/styles/cbv2new/layout/user_videos.html', 28, false),)), $this); ?>
<?php echo smarty_lang(array('code' => 'channel','assign' => 'object_type'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/global_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/view_channel/channel_global.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="container" class="container clearfix" style="background-color:none">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div style="height:10px;"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/message.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="channel_inner_box " id="result_cont" style="display:none; background:#eee;"></div>
    <div class="moveL clearfix channelBox" style="width:270px; padding:0px 5px;display:none;">
    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/view_channel/channel_left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div> <!-- this is left side -->
	 <div class="moveL clearfix" style="width:700px; padding:0px 5px; ">
     	<div id="channelDetailsBox" class="clearfix channelBox" style="border:1px solid #ccc; padding:0px 6px 6px;">
         <h2><?php echo $this->_tpl_vars['the_title']; ?>
</h2>
        	<?php unset($this->_sections['v_list']);
$this->_sections['v_list']['name'] = 'v_list';
$this->_sections['v_list']['loop'] = is_array($_loop=$this->_tpl_vars['videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['v_list']['show'] = true;
$this->_sections['v_list']['max'] = $this->_sections['v_list']['loop'];
$this->_sections['v_list']['step'] = 1;
$this->_sections['v_list']['start'] = $this->_sections['v_list']['step'] > 0 ? 0 : $this->_sections['v_list']['loop']-1;
if ($this->_sections['v_list']['show']) {
    $this->_sections['v_list']['total'] = $this->_sections['v_list']['loop'];
    if ($this->_sections['v_list']['total'] == 0)
        $this->_sections['v_list']['show'] = false;
} else
    $this->_sections['v_list']['total'] = 0;
if ($this->_sections['v_list']['show']):

            for ($this->_sections['v_list']['index'] = $this->_sections['v_list']['start'], $this->_sections['v_list']['iteration'] = 1;
                 $this->_sections['v_list']['iteration'] <= $this->_sections['v_list']['total'];
                 $this->_sections['v_list']['index'] += $this->_sections['v_list']['step'], $this->_sections['v_list']['iteration']++):
$this->_sections['v_list']['rownum'] = $this->_sections['v_list']['iteration'];
$this->_sections['v_list']['index_prev'] = $this->_sections['v_list']['index'] - $this->_sections['v_list']['step'];
$this->_sections['v_list']['index_next'] = $this->_sections['v_list']['index'] + $this->_sections['v_list']['step'];
$this->_sections['v_list']['first']      = ($this->_sections['v_list']['iteration'] == 1);
$this->_sections['v_list']['last']       = ($this->_sections['v_list']['iteration'] == $this->_sections['v_list']['total']);
?>
       		 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/video.html", 'smarty_include_vars' => array('video' => $this->_tpl_vars['videos'][$this->_sections['v_list']['index']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    		<?php endfor; endif; ?>
            
            <div class="clearfix"></div>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/pagination.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>       
        </div>
</div>

<div class="clear" style="height:10px"></div>
<div id="footer" class="clearfix" style="margin-top:0px;">
    <div class="footer">
        &copy; <?php echo $this->_tpl_vars['title']; ?>
 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

    </div>
</div


</body>
</html>