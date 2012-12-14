<?php /* Smarty version 2.6.18, created on 2012-12-01 17:37:16
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'FlashPlayer', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html', 5, false),array('function', 'lang', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html', 16, false),array('modifier', 'nicetime', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html', 11, false),array('modifier', 'number_format', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html', 16, false),array('modifier', 'description', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html', 23, false),array('modifier', 'truncate', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/watch_playlist.html', 23, false),)), $this); ?>
<div class="vid_top_container">
    <div class="video_title"><?php echo $this->_tpl_vars['playlist']['playlist_name']; ?>
</div>
</div>
<div class="player_container" id="normal_player_cont">
    <?php echo flashPlayer(array('playlist_detail' => $this->_tpl_vars['playlist_detail']), $this);?>

</div>
<div class="video_details clearfix">
	<div class="vd_details" style="width:100%;">
	    <div class="uploading_detail">
	    <?php $this->assign('owner', $this->_tpl_vars['cbvid']->action->get_owner_by_playlistid($this->_tpl_vars['playlist']['playlist_id'])); ?>
	    	<a href="#	">Created by <?php echo $this->_tpl_vars['owner']; ?>
 &#8212; <?php echo ((is_array($_tmp=$this->_tpl_vars['playlist']['date_added'])) ? $this->_run_mod_handler('nicetime', true, $_tmp) : nicetime($_tmp)); ?>
</a>
	        <a href="#" style="float:right;" onclick="OpenTempAdjustDialog()">Adjust the playlist</a>
	    </div>
	    <div class="vd_stats">
	        <ul>
	          <li><?php echo smarty_lang(array('code' => 'videos'), $this);?>
 : <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</strong></li>
	        </ul>
	    <div class="clearfix"></div>    
	    </div>
	</div>
	<div class="desc_cont">
    	<div class="less_desc" id="less_desc">
        	 <span class="upper_quote"></span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['playlist']['playlist_describe'])) ? $this->_run_mod_handler('description', true, $_tmp) : description($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200) : smarty_modifier_truncate($_tmp, 200)); ?>
<?php if (strlen ( $this->_tpl_vars['playlist_playlist_describe'] ) > 200): ?><a href="javascript:void(0)" onclick="$('#less_desc').css('display','none');$('#more_desc').css('display','block');"><?php echo smarty_lang(array('code' => 'more'), $this);?>
</a><?php endif; ?>
        </div> 
        <div class="more_desc" id="more_desc" style="display:none">
        	 <span class="upper_quote"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['playlist']['playlist_describe'])) ? $this->_run_mod_handler('description', true, $_tmp) : description($_tmp)); ?>
 <a href="javascript:void(0)" onclick="$('#more_desc').css('display','none');$('#less_desc').css('display','block');">Less</a>
        </div>
    </div>
</div>
<script>

<?php echo '
//script for adjustlist


function OpenTempAdjustDialog()
{
	var playlist_var=playlist_detail;
	var newplaylist_var=[];
	$("#sortable").empty();
	for(i=0;i<playlist_var.length;i++)
	{
		
		$("#sortable").append(\'<li id="\' +i+ \'"class="ui-state-default" style="margin-bottom:10px;"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>\'+playlist_var[i][\'title\']+\'</li>\')
	}
	$( "#sortable" ).sortable();
	$( "#sortable" ).disableSelection();
	$( "#adjustlist" ).dialog({
	height: 500,
	width:500,
	modal: true,
	buttons: {
				"OK": function() {
					$( this ).dialog( "close" );
					result=$( "#sortable" ).sortable("toArray");
					for(i=0;i<playlist_var.length;i++)
					{
						newplaylist_var[i]=playlist_var[result[i]];
					}
				
					playlist_detail=newplaylist_var;
					jwplayer("mediaplayer").load(playlist_detail);
					
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
		}
	});
}
'; ?>

</script>
<div id="adjustlist" title="Adjust Playlist" style="display:none;">
	<ul id="sortable">
    </ul>
    
</div>