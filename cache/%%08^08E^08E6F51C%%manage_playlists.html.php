<?php /* Smarty version 2.6.18, created on 2012-09-25 10:13:45
         compiled from /home/wwwroot/styles/cbv2new/layout/manage_playlists.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/manage_playlists.html', 7, false),array('function', 'videoLink', '/home/wwwroot/styles/cbv2new/layout/manage_playlists.html', 102, false),array('modifier', 'truncate', '/home/wwwroot/styles/cbv2new/layout/manage_playlists.html', 60, false),array('modifier', 'date_format', '/home/wwwroot/styles/cbv2new/layout/manage_playlists.html', 65, false),array('modifier', 'number_format', '/home/wwwroot/styles/cbv2new/layout/manage_playlists.html', 66, false),)), $this); ?>
<div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/manage/account_left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div class="account_box">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/manage/account_head.html", 'smarty_include_vars' => array('user' => $this->_tpl_vars['user'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
 <?php if ($this->_tpl_vars['mode'] == 'manage_playlist'): ?>
  <h2><?php echo smarty_lang(array('code' => 'manage_playlists'), $this);?>
</h2>
  
  <!-- ADD NEW PLAYLIST -->
    <div class="account_form">
    <form method="post" name="edit_profile">
    <fieldset class="fieldset">
    <legend><?php echo smarty_lang(array('code' => 'add_new_playlist'), $this);?>
</legend>
    
    <div class="account_field_block clearfix">
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'playlist_name'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="name" type="text" id="name" style="margin-bottom:10px"></div>
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'des_title'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="describe" type="text" id="describe" style="margin-bottom:10px"></div>
    
    </div>
	
    <div align="right"><button name="add_playlist" id="button" value="submit" class="cb_button_2"><?php echo smarty_lang(array('code' => 'add_new_playlist'), $this);?>
</button></div>

    </fieldset>
    </form>
    </div>
  <!-- Add new playlist -->
  
  
  <!-- Getting List of Playlist -->
  <form name="manage_playlists" method="post">
  
  <input type="submit" class="cb_button_2" value="<?php echo smarty_lang(array('code' => 'delete_selected'), $this);?>
" style="margin-bottom:10px" name="delete_playlists"/>
  
  <div class="account_table">
   
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
 	      </td>
 	    <td><?php echo smarty_lang(array('code' => 'title'), $this);?>
</td>
 	    <td width="130"><?php echo smarty_lang(array('code' => 'owner'), $this);?>
</td>
 	    <td width="130"><?php echo smarty_lang(array('code' => 'des_title'), $this);?>
</td>
 	    <td width="130"><?php echo smarty_lang(array('code' => 'date_added'), $this);?>
</td>
 	    <td width="130" class="last_td"><?php echo smarty_lang(array('code' => 'total_items'), $this);?>
</td>
        
 	    </tr>
 	  </table>
      
  </div>
  <?php $this->assign('bg', 'fff'); ?>
  <?php unset($this->_sections['plist']);
$this->_sections['plist']['name'] = 'plist';
$this->_sections['plist']['loop'] = is_array($_loop=$this->_tpl_vars['playlists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['plist']['show'] = true;
$this->_sections['plist']['max'] = $this->_sections['plist']['loop'];
$this->_sections['plist']['step'] = 1;
$this->_sections['plist']['start'] = $this->_sections['plist']['step'] > 0 ? 0 : $this->_sections['plist']['loop']-1;
if ($this->_sections['plist']['show']) {
    $this->_sections['plist']['total'] = $this->_sections['plist']['loop'];
    if ($this->_sections['plist']['total'] == 0)
        $this->_sections['plist']['show'] = false;
} else
    $this->_sections['plist']['total'] = 0;
if ($this->_sections['plist']['show']):

            for ($this->_sections['plist']['index'] = $this->_sections['plist']['start'], $this->_sections['plist']['iteration'] = 1;
                 $this->_sections['plist']['iteration'] <= $this->_sections['plist']['total'];
                 $this->_sections['plist']['index'] += $this->_sections['plist']['step'], $this->_sections['plist']['iteration']++):
$this->_sections['plist']['rownum'] = $this->_sections['plist']['iteration'];
$this->_sections['plist']['index_prev'] = $this->_sections['plist']['index'] - $this->_sections['plist']['step'];
$this->_sections['plist']['index_next'] = $this->_sections['plist']['index'] + $this->_sections['plist']['step'];
$this->_sections['plist']['first']      = ($this->_sections['plist']['iteration'] == 1);
$this->_sections['plist']['last']       = ($this->_sections['plist']['iteration'] == $this->_sections['plist']['total']);
?>   
    <div class="account_vid_list" style="background-color:#<?php echo $this->_tpl_vars['bg']; ?>
">
   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_playlist[]" id="check_playlist-<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
" value="<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <?php echo ((is_array($_tmp=$this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
<span class="video_control"><a href="?mode=edit_playlist&amp;pid=<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
"><?php echo smarty_lang(array('code' => 'view'), $this);?>
</a> - <a href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
','<?php echo smarty_lang(array('code' => 'remove_playlist_confirm'), $this);?>
','?mode=manage_playlist&amp;delete_pl=<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
')" id="delete_icon_a-<?php echo $this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']; ?>
"><?php echo smarty_lang(array('code' => 'delete'), $this);?>
</a></span></td>
 	      <?php $this->assign('owner', $this->_tpl_vars['cbvid']->action->get_owner_by_playlistid($this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id'])); ?>
 	      <td width="130"><?php echo $this->_tpl_vars['owner']; ?>
</td>
 	     <td width="130"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_describe'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</td>
 	    <td width="130"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
 	    <td width="130"><?php echo ((is_array($_tmp=$this->_tpl_vars['cbvid']->action->count_playlist_items($this->_tpl_vars['playlists'][$this->_sections['plist']['index']]['playlist_id']))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
 	    </tr>
 	  </table>
   </div>
   <?php if ($this->_tpl_vars['bg'] == 'fff'): ?>
    <?php $this->assign('bg', 'EFF5F8'); ?>
    <?php else: ?>
    <?php $this->assign('bg', 'fff'); ?>
    <?php endif; ?>
  <?php endfor; endif; ?>
  </form>
  <!-- Getting List of Playlist -->
 <?php endif; ?>
 
 <?php if ($this->_tpl_vars['mode'] == 'edit_playlist'): ?>
 <h2><?php echo smarty_lang(array('code' => 'edit_playlist'), $this);?>
</h2>
 <div class="account_form">
    <form method="post" name="edit_profile">
    <fieldset class="fieldset">
    <legend><?php echo smarty_lang(array('code' => 'edit_playlist'), $this);?>
</legend>
    
    <div class="account_field_block clearfix">
    <div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'playlist_name'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="name" type="text" id="name" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['playlist']['playlist_name']; ?>
"></div>
			<div class="account_field_label" align="right"><strong><label for="old_pass"><?php echo smarty_lang(array('code' => 'des_title'), $this);?>
</label></strong></div>
    <div class="account_field"><input name="describe" type="text" id="describe" style="margin-bottom:10px" value="<?php echo $this->_tpl_vars['playlist']['playlist_describe']; ?>
"></div>
    </div>
	
    <div align="right"><button name="edit_playlist" id="button" value="submit" class="cb_button_2"><?php echo smarty_lang(array('code' => 'edit_playlist'), $this);?>
</button></div>

    </fieldset>
    </form>
 </div>
 
 <?php if ($this->_tpl_vars['items']): ?>
 <div align="right"><span class="play_now"><a href="#" onclick="OpenAdjustDialog()">ADJUST LIST</a></span></div>
 <div align="right"><span class="play_now"><a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['items'][0]), $this);?>
" ><?php echo smarty_lang(array('code' => 'play_now'), $this);?>
</a></span></div>
 <?php endif; ?>
  <form name="edit_playlist" method="post">
  <input type="submit" class="cb_button_2" value="<?php echo smarty_lang(array('code' => 'delete_selected'), $this);?>
" style="margin-bottom:10px" name="delete_playlist_item"/>
 <div class="account_table">
   
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
 	      </td>
 	    <td><?php echo smarty_lang(array('code' => 'title'), $this);?>
</td>
 	    <td width="100"><?php echo smarty_lang(array('code' => 'date_added'), $this);?>
</td>
 	    <td width="100"><?php echo smarty_lang(array('code' => 'views'), $this);?>
</td>
        <td width="100">Priority</td>
 	    </tr>
 	  </table>
      
  </div>     
    <?php $this->assign('bg', 'fff'); ?>
    <?php unset($this->_sections['plist']);
$this->_sections['plist']['name'] = 'plist';
$this->_sections['plist']['loop'] = is_array($_loop=$this->_tpl_vars['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['plist']['show'] = true;
$this->_sections['plist']['max'] = $this->_sections['plist']['loop'];
$this->_sections['plist']['step'] = 1;
$this->_sections['plist']['start'] = $this->_sections['plist']['step'] > 0 ? 0 : $this->_sections['plist']['loop']-1;
if ($this->_sections['plist']['show']) {
    $this->_sections['plist']['total'] = $this->_sections['plist']['loop'];
    if ($this->_sections['plist']['total'] == 0)
        $this->_sections['plist']['show'] = false;
} else
    $this->_sections['plist']['total'] = 0;
if ($this->_sections['plist']['show']):

            for ($this->_sections['plist']['index'] = $this->_sections['plist']['start'], $this->_sections['plist']['iteration'] = 1;
                 $this->_sections['plist']['iteration'] <= $this->_sections['plist']['total'];
                 $this->_sections['plist']['index'] += $this->_sections['plist']['step'], $this->_sections['plist']['iteration']++):
$this->_sections['plist']['rownum'] = $this->_sections['plist']['iteration'];
$this->_sections['plist']['index_prev'] = $this->_sections['plist']['index'] - $this->_sections['plist']['step'];
$this->_sections['plist']['index_next'] = $this->_sections['plist']['index'] + $this->_sections['plist']['step'];
$this->_sections['plist']['first']      = ($this->_sections['plist']['iteration'] == 1);
$this->_sections['plist']['last']       = ($this->_sections['plist']['iteration'] == $this->_sections['plist']['total']);
?>
    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/manage/account_video.html", 'smarty_include_vars' => array('video' => $this->_tpl_vars['items'][$this->_sections['plist']['index']],'bg' => $this->_tpl_vars['bg'],'control' => 'playlist','pid' => $this->_tpl_vars['playlist']['playlist_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['bg'] == 'fff'): ?>
    <?php $this->assign('bg', 'EFF5F8'); ?>
    <?php else: ?>
    <?php $this->assign('bg', 'fff'); ?>
    <?php endif; ?>
    
    <?php endfor; else: ?>
    <div align="center" style="padding:5px"><strong><em><?php echo smarty_lang(array('code' => 'no_video_in_playlist'), $this);?>
</em></strong></div>
    <?php endif; ?>
</form>
 <?php endif; ?>
 </div>
</div>
<script>
<?php $this->assign('playlist_detail', $this->_tpl_vars['cbvid']->action->gen_playlist($this->_tpl_vars['playlist']['playlist_id'])); ?>
var playlist_detail=<?php echo $this->_tpl_vars['playlist_detail']; ?>

<?php echo '
//script for adjustlist
function OpenAdjustDialog()
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
						updatePriorityGUI(i+1,(playlist_var[result[i]][\'itemid\']));
					}
					
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