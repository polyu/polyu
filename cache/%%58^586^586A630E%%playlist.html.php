<?php /* Smarty version 2.6.18, created on 2012-09-25 10:09:19
         compiled from /home/wwwroot/styles/cbv2new/layout/blocks/playlist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getThumb', '/home/wwwroot/styles/cbv2new/layout/blocks/playlist.html', 8, false),array('function', 'ANCHOR', '/home/wwwroot/styles/cbv2new/layout/blocks/playlist.html', 8, false),array('function', 'videoLink', '/home/wwwroot/styles/cbv2new/layout/blocks/playlist.html', 11, false),array('function', 'show_rating', '/home/wwwroot/styles/cbv2new/layout/blocks/playlist.html', 19, false),array('modifier', 'truncate', '/home/wwwroot/styles/cbv2new/layout/blocks/playlist.html', 16, false),array('modifier', 'niceTime', '/home/wwwroot/styles/cbv2new/layout/blocks/playlist.html', 25, false),)), $this); ?>
<?php if ($this->_tpl_vars['cur_class'] == ''): ?>
<?php $this->assign('cur_class', $_COOKIE['current_style']); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['display_type'] == 'normal' || $this->_tpl_vars['display_type'] == ''): ?>
<!-- Video Box-->
<div id="vid_wrap_<?php echo $this->_tpl_vars['video']['videoid']; ?>
" class="<?php if ($this->_tpl_vars['video_view']): ?><?php echo $this->_tpl_vars['video_view']; ?>
<?php else: ?>grid_view <?php if ($this->_tpl_vars['cur_class'] == 'grid_view'): ?><?php else: ?><?php echo $this->_tpl_vars['cur_class']; ?>
<?php endif; ?><?php endif; ?>">
	<div class="vid_thumb" >
    	<a href="watch_playlist.php?playlist=<?php echo $this->_tpl_vars['playlist_id']; ?>
"><img src="<?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['video']), $this);?>
" title="<?php echo $this->_tpl_vars['video']['title']; ?>
" alt="<?php echo $this->_tpl_vars['video']['title']; ?>
" <?php echo ANCHOR(array('place' => 'video_thumb','data' => $this->_tpl_vars['video']), $this);?>
 /></a>
       
        <?php if ($this->_tpl_vars['video']['broadcast'] == 'private'): ?>
        	<a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['video']), $this);?>
"><span class="private_video">&nbsp;</span></a>
        <?php endif; ?>
        <?php echo ANCHOR(array('place' => 'in_video_thumb','data' => $this->_tpl_vars['video']), $this);?>
    
    </div> <!--VID_THUMB END-->
    <div class="vid_info_wrap">
        <h2 class="title truncatedtitle"><a href="watch_playlist.php?playlist=<?php echo $this->_tpl_vars['playlist_id']; ?>
" title="<?php echo $this->_tpl_vars['playlist']['playlist_name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlist']['playlist_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</a></h2>
        <h2 class="title fulltitle" style="display:none"><a href="watch_playlist.php?playlist=<?php echo $this->_tpl_vars['playlist_id']; ?>
"><?php echo $this->_tpl_vars['playlist']['playlist_name']; ?>
</a></h2>
        <div class="list_rating" style="display:none;">
        	<?php echo show_rating(array('class' => 'rating','rating' => $this->_tpl_vars['video']['rating'],'ratings' => $this->_tpl_vars['video']['rated_by'],'total' => '10'), $this);?>

		</div>            
        <p id="desc" class="vid_info"><?php echo $this->_tpl_vars['playlist']['playlist_describe']; ?>
</p>
        <p class="vid_info"><?php echo $this->_tpl_vars['video']['views']; ?>
 View(<strong>s</strong>) </p>
         <p class="vid_info"><?php echo $this->_tpl_vars['playlist_count']; ?>
 Video(<strong>s</strong>)</p>
         <?php $this->assign('owner', $this->_tpl_vars['cbvid']->action->get_owner_by_playlistid($this->_tpl_vars['playlist_id'])); ?>
        <p class="vid_info"><span class="info_list">Modified By </span><a href="#"><?php echo $this->_tpl_vars['owner']; ?>
</a> <span class="list_up_time">(<?php echo ((is_array($_tmp=$this->_tpl_vars['video']['date_added'])) ? $this->_run_mod_handler('niceTime', true, $_tmp) : niceTime($_tmp)); ?>
)</span></p>
    </div> <!--VID_INFO_WRAP END-->
</div> <!--VID_WRAP END-->

<?php if ($this->_tpl_vars['only_once']): ?>
    <div class="clearfix"></div>
<?php endif; ?>
<!-- Video Box -->
<?php endif; ?>