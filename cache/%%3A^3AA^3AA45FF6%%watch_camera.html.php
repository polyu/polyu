<?php /* Smarty version 2.6.18, created on 2012-09-24 15:41:18
         compiled from /home/wwwroot/styles/cbv2new/layout/watch_camera.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'description', '/home/wwwroot/styles/cbv2new/layout/watch_camera.html', 18, false),array('modifier', 'truncate', '/home/wwwroot/styles/cbv2new/layout/watch_camera.html', 18, false),array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/watch_camera.html', 18, false),)), $this); ?>
<div class="vid_top_container">
    <div class="video_title"><?php echo $this->_tpl_vars['camera']['cam_name']; ?>
</div>
</div>
<div class="player_container" id="normal_player_cont">
   <iframe src="<?php echo $this->_tpl_vars['camera']['cam_address']; ?>
" style="width:100%;height:350px;border:0px;"></iframe>
</div>
<div class="video_details clearfix">
	<div class="vd_details" style="width:100%;">
	    <div class="uploading_detail">
	    
	    	<a href="#	">Created on <?php echo $this->_tpl_vars['camera']['date_added']; ?>
</a>
	       
	    </div>
	   
	</div>
	<div class="desc_cont">
    	<div class="less_desc" id="less_desc">
        	 <span class="upper_quote"></span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['camera']['cam_describe'])) ? $this->_run_mod_handler('description', true, $_tmp) : description($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200) : smarty_modifier_truncate($_tmp, 200)); ?>
<?php if (strlen ( $this->_tpl_vars['playlist_playlist_describe'] ) > 200): ?><a href="javascript:void(0)" onclick="$('#less_desc').css('display','none');$('#more_desc').css('display','block');"><?php echo smarty_lang(array('code' => 'more'), $this);?>
</a><?php endif; ?>
        </div> 
        <div class="more_desc" id="more_desc" style="display:none">
        	 <span class="upper_quote"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['camera']['cam_describe'])) ? $this->_run_mod_handler('description', true, $_tmp) : description($_tmp)); ?>
 <a href="javascript:void(0)" onclick="$('#more_desc').css('display','none');$('#less_desc').css('display','block');">Less</a>
        </div>
    </div>
</div>
