<?php /* Smarty version 2.6.18, created on 2012-09-24 14:39:37
         compiled from /home/wwwroot/styles/cbv2new/layout/watch_video.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 2, false),array('function', 'get_videos', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 7, false),array('function', 'ANCHOR', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 11, false),array('function', 'FlashPlayer', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 30, false),array('function', 'show_video_rating', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 37, false),array('function', 'show_share_form', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 56, false),array('function', 'show_flag_form', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 57, false),array('function', 'show_playlist_form', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 59, false),array('function', 'AD', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 141, false),array('function', 'videoLink', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 145, false),array('modifier', 'sprintf', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 79, false),array('modifier', 'nicetime', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 79, false),array('modifier', 'number_format', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 83, false),array('modifier', 'SetTime', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 84, false),array('modifier', 'description', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 92, false),array('modifier', 'truncate', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 92, false),array('modifier', 'tags', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 102, false),array('modifier', 'categories', '/home/wwwroot/styles/cbv2new/layout/watch_video.html', 103, false),)), $this); ?>
<!-- Defining object type-->
<?php echo smarty_lang(array('code' => 'video','assign' => 'object_type'), $this);?>


<!-- Getting Related videos -->
<div style="display:none">
<?php $this->assign('videos_items_columns', config(videos_items_columns)); ?>
<?php echo get_videos(array('nonuser' => $this->_tpl_vars['vdo']['userid'],'exclude' => $this->_tpl_vars['vdo']['videoid'],'limit' => $this->_tpl_vars['videos_items_columns'],'order' => 'date_added ASC','assign' => 'related_vids','show_related' => true,'title' => $this->_tpl_vars['vdo']['title'],'tags' => $this->_tpl_vars['vdo']['tags']), $this);?>

</div>
<div class="vid_top_container">
    <div class="video_title"><?php echo $this->_tpl_vars['vdo']['title']; ?>
</div>
    <?php if ($this->_tpl_vars['userquery']->perm_check('admin_access') == 'yes'): ?><div><?php echo ANCHOR(array('place' => 'watch_admin_options','data' => $this->_tpl_vars['vdo']), $this);?>
</div><?php endif; ?>

    <!-- START before_watch_player plugin -->
        <?php echo ANCHOR(array('place' => 'before_watch_player','data' => $this->_tpl_vars['vdo']), $this);?>

    <!-- END before_watch_player plugin anchor -->
    
    <?php if (has_hq ( $this->_tpl_vars['vdo'] )): ?>
    <span id="hq" class="hq_button_cont">
    <a href="javascript:void(0)" onclick="hq_toggle('#normal_player_cont','#hd_player_cont'); $('#hq_button').toggleClass('hq_button_sel')">
    	<img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="hq_button" border="0" id="hq_button" />
    </a>
    </span>
    <?php endif; ?>
</div>


<div class="watch_left" style="width:100%;">
<!-- Player -->
<div class="player_container" id="normal_player_cont">
    <?php echo flashPlayer(array('vdetails' => $this->_tpl_vars['vdo']), $this);?>

</div>


<!-- Actions -->
<div class="video_actions_cont clearfix">
    <div class="rating_container" style="display:none;">
    <?php echo show_video_rating(array('rating' => $this->_tpl_vars['vdo']['rating'],'ratings' => $this->_tpl_vars['vdo']['rated_by'],'total' => '10','id' => $this->_tpl_vars['vdo']['videoid'],'type' => 'video'), $this);?>

    </div>
    <div class="actions clearfix" style="display:none;">
    <ul>
    
      
      <li><a href="javascript:void(0)" onclick="slide_up_watch_video('#share_form');$('#share_form').slideToggle();"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="share_this" /><?php echo smarty_lang(array('code' => 'share_embed'), $this);?>
</a></li>
      <li><a href="javascript:void(0)" onclick="slide_up_watch_video('#playlist_form');$('#playlist_form').slideToggle();"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="add_to_play" /><?php echo smarty_lang(array('code' => 'add_to_playlist'), $this);?>
</a></li>
      
      <li><a href="javascript:void(0)" onclick="slide_up_watch_video('#flag_item');$('#flag_item').slideToggle();"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" class="report_this" /><?php echo smarty_lang(array('code' => 'report_this'), $this);?>
</a></li>
    </ul>

    </div>

</div>
<!-- Actions End-->

<!-- Action Result Container-->
<div class="video_action_result_boxes">
	<?php echo show_share_form(array('id' => $this->_tpl_vars['vdo']['videoid'],'type' => 'Video'), $this);?>

    <?php echo show_flag_form(array('id' => $this->_tpl_vars['vdo']['videoid'],'type' => 'Video'), $this);?>

    <div class="action_box" style="display:none" id="video_action_result_cont"></div>
    <?php echo show_playlist_form(array('id' => $this->_tpl_vars['vdo']['videoid'],'type' => 'Video'), $this);?>

</div>
<!-- Action Result Container End-->

<!-- Video Stats-->
<div class="video_details clearfix">
<div  class="action_box"  id="video_detail_result_cont" style="margin-top:0px; margin-bottom:5px; display:none"></div>

	<div class="vd_user_container" align="center" style="display:none;">
   		<a href="<?php echo $this->_tpl_vars['userquery']->profile_link($this->_tpl_vars['vdo']); ?>
"><img src="<?php echo $this->_tpl_vars['userquery']->getUserThumb($this->_tpl_vars['vdo']); ?>
" alt="<?php echo $this->_tpl_vars['vdo']['username']; ?>
" class="account_thumb" /></a>
        <ul>
        	
        	<li><a href="<?php echo $this->_tpl_vars['userquery']->get_user_videos_link($this->_tpl_vars['vdo']); ?>
"><?php echo smarty_lang(array('code' => 'grp_view_vdos'), $this);?>
</a></li>
        </ul>
        <div align="center" style="display:none;"><span class="small_button non_button" onclick="subscriber('<?php echo $this->_tpl_vars['vdo']['userid']; ?>
','subscribe_user','video_detail_result_cont')"><?php echo smarty_lang(array('code' => 'subscribe'), $this);?>
</span></div>
    </div>
    
    <div class="vd_details" style="width:100%;">
    <div class="uploading_detail">
    <?php echo smarty_lang(array('code' => 'uploaded_by_s','assign' => 'uploaded_by_s'), $this);?>

    	<a href="#	"><?php echo ((is_array($_tmp=$this->_tpl_vars['uploaded_by_s'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['vdo']['username']) : sprintf($_tmp, $this->_tpl_vars['vdo']['username'])); ?>
 &#8212; <?php echo ((is_array($_tmp=$this->_tpl_vars['vdo']['date_added'])) ? $this->_run_mod_handler('nicetime', true, $_tmp) : nicetime($_tmp)); ?>
</a>
    </div>
    <div class="vd_stats">
        <ul>
          <li><?php echo smarty_lang(array('code' => 'views'), $this);?>
 : <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['vdo']['views'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</strong></li>
          <li><?php echo smarty_lang(array('code' => 'duration'), $this);?>
 : <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['vdo']['duration'])) ? $this->_run_mod_handler('SetTime', true, $_tmp) : SetTime($_tmp)); ?>
</strong></li>
         
        </ul>
    <div class="clearfix"></div>    
    </div>
    
    	<div class="desc_cont">
    	<div class="less_desc" id="less_desc">
        	 <span class="upper_quote"></span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vdo']['description'])) ? $this->_run_mod_handler('description', true, $_tmp) : description($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200) : smarty_modifier_truncate($_tmp, 200)); ?>
<?php if (strlen ( $this->_tpl_vars['vdo']['description'] ) > 200): ?><a href="javascript:void(0)" onclick="$('#less_desc').css('display','none');$('#more_desc').css('display','block');"><?php echo smarty_lang(array('code' => 'more'), $this);?>
</a><?php endif; ?>
        </div>
        <div class="more_desc" id="more_desc" style="display:none">
        	 <span class="upper_quote"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['vdo']['description'])) ? $this->_run_mod_handler('description', true, $_tmp) : description($_tmp)); ?>
 <a href="javascript:void(0)" onclick="$('#more_desc').css('display','none');$('#less_desc').css('display','block');">Less</a>
        </div>
        
        </div>
        
        
        <div class="tags_cats">
    <div class="tags"><?php echo ((is_array($_tmp=$this->_tpl_vars['vdo']['tags'])) ? $this->_run_mod_handler('tags', true, $_tmp, 'videos') : tags($_tmp, 'videos')); ?>
</div>
    <div class="category" style="display:none;">Category : <?php echo ((is_array($_tmp=$this->_tpl_vars['vdo']['category'])) ? $this->_run_mod_handler('categories', true, $_tmp, 'video') : categories($_tmp, 'video')); ?>
</div>
    </div>
    
    </div>
    
</div>
<!-- Video Sttas-->


<!-- Video Comments -->
<div id="commentsContainer" style="display:none;">
	<h2 class="commentHead"><?php echo smarty_lang(array('code' => 'comments'), $this);?>
 (<?php echo $this->_tpl_vars['vdo']['comments_count']; ?>
)</h2>
    
    <div id="comments"></div>
    <script>
		$(document).ready(function()
		{		
			comments_voting = '<?php echo $this->_tpl_vars['vdo']['comment_voting']; ?>
';	
			getComments('<?php echo $this->_tpl_vars['type']; ?>
','<?php echo $this->_tpl_vars['vdo']['videoid']; ?>
','<?php echo $this->_tpl_vars['vdo']['last_commented']; ?>
',1,'<?php echo $this->_tpl_vars['vdo']['comments_count']; ?>
','<?php echo $this->_tpl_vars['object_type']; ?>
')
		}
		);
	</script>
    
    <?php if ($this->_tpl_vars['myquery']->is_commentable($this->_tpl_vars['vdo'],'v')): ?>
    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/comments/add_comment.html", 'smarty_include_vars' => array('id' => $this->_tpl_vars['vdo']['videoid'],'type' => 'v')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
    	<div class="disable_msg" align="center"><?php echo smarty_lang(array('code' => 'comm_disabled_for_vid'), $this);?>
</div>
    <?php endif; ?>
    <div class="clearfix"></div>
</div>
<!-- Video Comments -->
</div>



<!-- Watch Right -->

<div class="watch_right" style="display:none;">
	<div class="ads" style="display:none;"><?php echo getAd(array('place' => 'ad_300x250'), $this);?>
</div>    
    
    
    <?php if ($this->_tpl_vars['Cbucket']->configs['video_download'] == 1 && $this->_tpl_vars['cbvid']->downloadable($this->_tpl_vars['vdo'])): ?><div class="video_details" align="left">
     <label><a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['vdo'],'type' => 'download'), $this);?>
"><?php echo smarty_lang(array('code' => 'click_to_download_video'), $this);?>
</a></label>
     
</div> <?php endif; ?>
	
    <?php echo ANCHOR(array('place' => 'watch_video_right','data' => $this->_tpl_vars['vdo']), $this);?>







<!-- Playlist -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/watch_video/playlist_box.html", 'smarty_include_vars' => array('selected' => $this->_tpl_vars['vdo']['videoid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Playlist End-->





<!-- Related Videos based on category, please remove * and also above smarty function -->


<?php if ($this->_tpl_vars['related_vids']): ?>
<span class="watch_vids_head" onclick='$(this).toggleClass("watch_vids_head_closed");$("#related_vids").slideToggle("fast")'><?php echo smarty_lang(array('code' => 'related_videos'), $this);?>
</span>
<div class="watch_vids_cont" id="related_vids">
<?php unset($this->_sections['uvlist']);
$this->_sections['uvlist']['name'] = 'uvlist';
$this->_sections['uvlist']['loop'] = is_array($_loop=$this->_tpl_vars['related_vids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['uvlist']['show'] = true;
$this->_sections['uvlist']['max'] = $this->_sections['uvlist']['loop'];
$this->_sections['uvlist']['step'] = 1;
$this->_sections['uvlist']['start'] = $this->_sections['uvlist']['step'] > 0 ? 0 : $this->_sections['uvlist']['loop']-1;
if ($this->_sections['uvlist']['show']) {
    $this->_sections['uvlist']['total'] = $this->_sections['uvlist']['loop'];
    if ($this->_sections['uvlist']['total'] == 0)
        $this->_sections['uvlist']['show'] = false;
} else
    $this->_sections['uvlist']['total'] = 0;
if ($this->_sections['uvlist']['show']):

            for ($this->_sections['uvlist']['index'] = $this->_sections['uvlist']['start'], $this->_sections['uvlist']['iteration'] = 1;
                 $this->_sections['uvlist']['iteration'] <= $this->_sections['uvlist']['total'];
                 $this->_sections['uvlist']['index'] += $this->_sections['uvlist']['step'], $this->_sections['uvlist']['iteration']++):
$this->_sections['uvlist']['rownum'] = $this->_sections['uvlist']['iteration'];
$this->_sections['uvlist']['index_prev'] = $this->_sections['uvlist']['index'] - $this->_sections['uvlist']['step'];
$this->_sections['uvlist']['index_next'] = $this->_sections['uvlist']['index'] + $this->_sections['uvlist']['step'];
$this->_sections['uvlist']['first']      = ($this->_sections['uvlist']['iteration'] == 1);
$this->_sections['uvlist']['last']       = ($this->_sections['uvlist']['iteration'] == $this->_sections['uvlist']['total']);
?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/watch_video/video_box.html", 'smarty_include_vars' => array('video' => $this->_tpl_vars['related_vids'][$this->_sections['uvlist']['index']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endfor; endif; ?>
<div class="clearfix"></div>
</div>
<?php endif; ?>
<!-- Getting Related videos -->

</div>

<div class="clearfix"></div>