<?php /* Smarty version 2.6.18, created on 2012-11-30 16:52:16
         compiled from /mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'videoLink', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 24, false),array('function', 'get_all_video_files', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 77, false),array('function', 'get_thumb', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 81, false),array('function', 'ANCHOR', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 152, false),array('function', 'FlashPlayer', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 185, false),array('modifier', 'get_username', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 49, false),array('modifier', 'getname', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 92, false),array('modifier', 'getext', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 93, false),array('modifier', 'get_thumb_num', '/mnt/array1/www/htdocs/wwwroot/admin_area/styles/cbv2/layout/edit_video.html', 93, false),)), $this); ?>

<?php $this->assign('custom_upload_fields', $this->_tpl_vars['Upload']->load_custom_upload_fields($this->_tpl_vars['data'],'TRUE')); ?>
<?php $this->assign('video_fields', $this->_tpl_vars['Upload']->load_video_fields($this->_tpl_vars['data'])); ?>

<?php if ($this->_tpl_vars['data']['title'] != ""): ?>


<form action="" method="post" name="Edit Member" id="Edit Member">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" valign="top">
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" class="left_head" style="padding-left:10px"><div class="head">Editing <?php echo $this->_tpl_vars['data']['title']; ?>
</div></td>
    <td width="20" align="right" class="right_head">&nbsp;</td>
  </tr>
</table>

<div style="width:98%; margin:auto; padding:10px">
<!--<button onClick="location.href='view_video.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
'" class="button">View This video</button>-->

<ul class="admin_links">
<li><a href="<?php echo videoSmartyLink(array('vdetails' => $this->_tpl_vars['data']), $this);?>
">Watch this video</a></li>
<?php if ($this->_tpl_vars['data']['active'] != 'yes'): ?>
<li><a href="edit_video.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
&amp;mode=activate">Activate</a></li>
<?php else: ?>
<li><a href="edit_video.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
&amp;mode=deactivate">Deactivate</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['data']['featured'] != 'yes'): ?>
<li><a href="edit_video.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
&amp;mode=featured">Make Featured</a></li>
<?php else: ?>
<li><a href="edit_video.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
&amp;mode=unfeature">Make Unfeatured</a></li>
<?php endif; ?>
<li><a href="javascript:void(0)" onClick="javascript:Confirm_Delete('video_manager.php?delete_video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
')">Delete This Video</a></li>
</ul>
</div>

  

<input name="admin" type="hidden" id="admin" value="true" />
<input name="videoid" type="hidden"  value="<?php echo $this->_tpl_vars['data']['videoid']; ?>
" />

<fieldset class="fieldset">
  <legend>User Information</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><strong>Useid</strong></td>
      <td><a href="view_user.php?uid=<?php echo $this->_tpl_vars['data']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['userid'])) ? $this->_run_mod_handler('get_username', true, $_tmp) : get_username($_tmp)); ?>
</a></td>
    </tr>
  </table>
</fieldset>

<fieldset class="fieldset">
  <legend>Important Details</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><strong>Video Id</strong></td>
      <td>
        <input disabled="disabled" name="videokey" type="text" id="videokey" value="<?php echo $this->_tpl_vars['data']['videoid']; ?>
" size="45" />
      </td>
    </tr>
    <tr>
      <td width="200"><strong>Video Key</strong></td>
      <td>
        <input disabled="disabled" name="flvname" type="text" id="flvname" value="<?php echo $this->_tpl_vars['data']['videokey']; ?>
" size="45" />
      </td>
    </tr>
    <tr>
      <td width="200"><strong>File Name</strong></td>
      <td>
        <input disabled="disabled" name="flvname" type="text" id="flvname" value="<?php echo $this->_tpl_vars['data']['file_name']; ?>
" size="45" />
      </td>
    </tr>
    <tr>
      <td width="200"><strong>Total Video Files</strong></td>
      <td><?php echo get_all_video_files_smarty(array('vdetails' => $this->_tpl_vars['data'],'count_only' => true), $this);?>
 - <a href="view_conversion_log.php?file_name=<?php echo $this->_tpl_vars['data']['file_name']; ?>
"><strong>View File Details and Conversion Log</strong></a></td>
    </tr>
    <tr>
      <td width="200"><strong>Total Thumbnails</strong></td>
      <td><?php echo getSmartyThumb(array('vdetails' => $this->_tpl_vars['data'],'count_only' => true), $this);?>
</td>
    </tr>

    <tr>
      <td width="200"><strong>Thumbnails<BR>
<?php if ($this->_tpl_vars['data']['embeded'] != yes): ?><a href="upload_thumbs.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
&amp;gen_more=true">Regenerate  Thumbs</a><?php endif; ?><br />
    <a href="upload_thumbs.php?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
">Manage Thumbs</a></strong></td>
      <td><?php $this->assign('vidthumbs', get_thumb(($this->_tpl_vars['data']),1,TRUE,FALSE,TRUE,FALSE)); ?>

    <?php $_from = $this->_tpl_vars['vidthumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vid_thumb']):
?>
    	<div style="width:140px; float:left" align="center">
    	<label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['vid_thumb']; ?>
" border="1" style="margin:4px;max-width:120px" /><br />
        <input type="radio" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
.<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getext', true, $_tmp) : getext($_tmp)); ?>
" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
" name="default_thumb" <?php if ($this->_tpl_vars['data']['default_thumb'] == ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('get_thumb_num', true, $_tmp) : get_thumb_num($_tmp))): ?> checked="checked"<?php endif; ?> />Default</label><br />
  <?php if (((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)) != 'processing'): ?>
  <a href="?video=<?php echo $this->_tpl_vars['data']['videoid']; ?>
&delete=<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getname', true, $_tmp) : getname($_tmp)); ?>
.<?php echo ((is_array($_tmp=$this->_tpl_vars['vid_thumb'])) ? $this->_run_mod_handler('getext', true, $_tmp) : getext($_tmp)); ?>
">Delete</a>
  <?php endif; ?>
  </div>
    <?php endforeach; endif; unset($_from); ?>
    
    </td>
    </tr>
    
    <?php $_from = $this->_tpl_vars['requiredFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
  <?php endforeach; endif; unset($_from); ?>
  
    <tr>
      <td width="200"><strong>Status</strong></td>
      <td>
        <select name="status">
          <option value="Successful" <?php if ($this->_tpl_vars['data']['status'] == 'Successful'): ?> selected <?php endif; ?>>Successfull</option>
          <option value="processing" <?php if ($this->_tpl_vars['data']['status'] == 'Processing'): ?> selected <?php endif; ?>>Processing</option>
          <option value="Failed" 	<?php if ($this->_tpl_vars['data']['status'] == 'Failed'): ?> selected <?php endif; ?>>Failed</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="200"><strong>Duration (seconds) </strong></td>
      <td>
        <label>
          <input name="duration" type="text" id="duration" value="<?php echo $this->_tpl_vars['data']['duration']; ?>
" size="5" />
        </label>
seconds</td>
    </tr>
  </table>
</fieldset>


<fieldset class="fieldset">
  <legend>Video Stats</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
    <td width="200" ><strong>Views</strong></td>
    <td><input name="views" type="text" id="views" value="<?php echo $this->_tpl_vars['data']['views']; ?>
" size="45" /></td>
  </tr>
  <tr>
    <td width="200" ><strong>Rating</strong></td>
    <td><input name="rating" type="text" id="rating" value="<?php echo $this->_tpl_vars['data']['rating']; ?>
" size="5" /> 
    of 10 </td>
  </tr>
  <tr>
    <td width="200" ><strong>RatedBy</strong></td>
    <td><input name="rated_by" type="text" id="rated_by" value="<?php echo $this->_tpl_vars['data']['rated_by']; ?>
" size="45" /></td>
  </tr>
  </table>
</fieldset>
<fieldset class="fieldset">
  <legend>Custom Upload Fields</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
      <?php $_from = $this->_tpl_vars['custom_upload_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
  <tr>
    <td width="200"><strong><?php echo $this->_tpl_vars['field']['title']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['field']['hint_1']; ?>
<?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_before']), $this);?>
<?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['field']); ?>

                    <br>
      <?php echo $this->_tpl_vars['field']['hint_2']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  </table>
</fieldset>












<div style="width:98%; margin:auto">
<input type="submit" class="button" value="Update video details" style="margin:5px 0px 15px 0px" name="update">
</div>


</td>
    <td width="50%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" class="left_head" style="padding-left:10px"><div class="head">Viewing <?php echo $this->_tpl_vars['data']['title']; ?>
</div></td>
        <td width="20" align="right" class="right_head">&nbsp;</td>
      </tr>
    </table>
    <div style="padding:5px">

        <?php echo flashPlayer(array('vdetails' => $this->_tpl_vars['data'],'width' => '100%','autoplay' => 'false'), $this);?>


    </div>
    
    <?php $_from = $this->_tpl_vars['video_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>
    <fieldset class="fieldset">
        <legend><?php echo $this->_tpl_vars['field_group']['group_name']; ?>
</legend>
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
            <?php $_from = $this->_tpl_vars['field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                <tr>
                	<td width="200"><strong><?php echo $this->_tpl_vars['field']['title']; ?>
 </strong></td>
                	<td ><?php if ($this->_tpl_vars['field']['hint_1']): ?><?php echo $this->_tpl_vars['field']['hint_1']; ?>
<br /><?php endif; ?>
                	  <?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['field']); ?>

               	    <?php if ($this->_tpl_vars['field']['hint_2']): ?><br /><?php echo $this->_tpl_vars['field']['hint_2']; ?>
<?php endif; ?></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </fieldset>
	<?php endforeach; endif; unset($_from); ?>
    
    
</td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><?php $this->assign('id', $this->_tpl_vars['data']['videoid']); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/blocks/comments.html", 'smarty_include_vars' => array('type' => 'v','id' => $this->_tpl_vars['data']['videoid'],'link' => "video=".($this->_tpl_vars['id']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
  
  
  
</table>
</form>
<?php endif; ?>