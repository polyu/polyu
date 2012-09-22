<?php /* Smarty version 2.6.18, created on 2012-09-10 14:04:34
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/view_user.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ANCHOR', '/home/wwwroot/admin_area/styles/cbv2/layout/view_user.html', 92, false),array('modifier', 'is_online', '/home/wwwroot/admin_area/styles/cbv2/layout/view_user.html', 181, false),)), $this); ?>
<span class="page_title">Edit User</span>

<?php $this->assign('signup_fields', $this->_tpl_vars['userquery']->load_signup_fields($this->_tpl_vars['u'])); ?>
<?php $this->assign('channel_profile_fields', $this->_tpl_vars['userquery']->load_user_fields($this->_tpl_vars['p'])); ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" class="cbform">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="15" align="center" valign="middle" class="left_head">&nbsp;</td>
        <td class="head">User Info</td>
        <td width="50" class="right_head">&nbsp;</td>
      </tr>
    </table></td>
    <td><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="15" align="center" valign="middle" class="left_head">&nbsp;</td>
        <td class="head">ACtions</td>
        <td width="50" class="right_head">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
<td width="50%" valign="top">

<fieldset class="fieldset">
  <legend>ClipBucket User Info</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><strong>User Id</strong></td>
      <td>
        <input disabled="disabled" name="uid" type="text" id="uid" value="<?php echo $this->_tpl_vars['u']['userid']; ?>
" />
        <input name="userid" type="hidden" id="userid" value="<?php echo $this->_tpl_vars['u']['userid']; ?>
" size="45" />
      </td>
    </tr>
    <tr>
      <td width="200"><strong>User name</strong></td>
      <td>
        <input name="username" type="text" id="username" value="<?php echo $this->_tpl_vars['u']['username']; ?>
" />
        <input name="dusername" type="hidden" id="dusername" value="<?php echo $this->_tpl_vars['u']['username']; ?>
" />
        <input name="admin_manager" type="hidden" value="yes" />
      </td>
    </tr>
    <tr>
      <td width="200"><strong>Email</strong></td>
      <td><input name="email" type="text" id="email" value="<?php echo $this->_tpl_vars['u']['email']; ?>
" /><input name="demail" type="hidden" id="demail" value="<?php echo $this->_tpl_vars['u']['email']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Change Password</strong></td>
      <td><input name="pass" type="text" id="pass" /></td>
    </tr>
    <tr>
      <td><strong>Confirm Password</strong></td>
      <td><input name="cpass" type="text" id="cpass" /></td>
    </tr>
    <tr>
      <td><strong>User Level</strong></td>
      <td><label for="level"></label>
        <select name="level" id="level">
        <?php $this->assign('levels', $this->_tpl_vars['userquery']->get_levels()); ?>
        <?php $_from = $this->_tpl_vars['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level']):
?>
        	<option value="<?php echo $this->_tpl_vars['level']['user_level_id']; ?>
" <?php if ($this->_tpl_vars['u']['level'] == $this->_tpl_vars['level']['user_level_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['level']['user_level_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select></td>
    </tr>
    <tr>
      <td><strong>Country</strong></td>
      <td>
        <select name="country" id="country">
        <?php $this->assign('countries', $this->_tpl_vars['Cbucket']->get_countries('iso2')); ?>
        <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['code'] => $this->_tpl_vars['country']):
?>
        <option value="<?php echo $this->_tpl_vars['code']; ?>
" <?php if ($this->_tpl_vars['u']['country'] == $this->_tpl_vars['code']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['country']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select></td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
      <td>
        <label>
          <input type="radio" name="sex" value="male" id="sex_0" <?php if ($this->_tpl_vars['u']['sex'] == male): ?> checked="checked"<?php endif; ?> />
          Male</label>
        
        <label>
          <input type="radio" name="sex" value="female" id="sex_1" <?php if ($this->_tpl_vars['u']['sex'] == female): ?> checked="checked"<?php endif; ?>/>
          Female</label>
        
      </p></td>
    </tr>
    <tr>
      <td><strong>Category</strong></td>
      <td><?php echo ANCHOR(array('place' => $this->_tpl_vars['signup_fields']['cat']['anchor_before']), $this);?>
<?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['signup_fields']['cat']); ?>
<?php echo ANCHOR(array('place' => $this->_tpl_vars['signup_fields']['cat']['anchor_after']), $this);?>
</td>
    </tr>
    
    <?php $this->assign('cust_signup', $this->_tpl_vars['userquery']->load_custom_signup_fields($this->_tpl_vars['u'],true)); ?>
    <?php if ($this->_tpl_vars['cust_signup']): ?>
    	<?php $_from = $this->_tpl_vars['cust_signup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
            <tr>
              <td ><strong><?php echo $this->_tpl_vars['field']['title']; ?>
</strong></td>
              <td><?php echo $this->_tpl_vars['field']['hint_1']; ?>
<?php echo ANCHOR(array('place' => $this->_tpl_vars['field']['anchor_before']), $this);?>
<?php echo $this->_tpl_vars['formObj']->createField($this->_tpl_vars['field']); ?>

            <br>
            <?php echo $this->_tpl_vars['field']['hint_2']; ?>
</td>
            </tr>
          <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

  </table>
</fieldset>

<?php $_from = $this->_tpl_vars['channel_profile_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
<?php endforeach; endif; unset($_from); ?>








</td>
<td width="50%" align="left" valign="top"><fieldset class="fieldset">
  <legend>User Links</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td ><ul class="admin_links">
         <li ><a href="<?php echo $this->_tpl_vars['userquery']->profile_link($this->_tpl_vars['u']); ?>
">View <?php echo $this->_tpl_vars['u']['username']; ?>
 channel</a></li>
        <li ><a href="login_as_user.php?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
">Login as user</a></li>
        <?php if ($this->_tpl_vars['u']['usr_status'] == 'Ok'): ?>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;deactivate=yes">Deactivate</a></li>
        <?php else: ?>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;activate=yes">Activate</a></li>
		<?php endif; ?>
        <?php if ($this->_tpl_vars['u']['ban_status'] == 'yes'): ?>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;unban=yes">Unban</a></li>
        <?php else: ?>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;ban=yes">Ban</a></li>
        <?php endif; ?>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;delete=yes">Delete</a></li>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;delete_vids=yes">Delete Videos</a></li>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;delete_contacts=yes">Delete Contacts</a></li>
        <li><a href="?uid=<?php echo $this->_tpl_vars['u']['userid']; ?>
&amp;delete_pm=yes">Delete Private Messages</a></li>
      </ul></td>
    </tr>
    </table>
</fieldset>


<fieldset class="fieldset">
  <legend>User Activity</legend>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="block">
    <tr>
      <td width="200"><strong>Date of birth</strong></td>
      <td><input name="dob" type="text" id="dob" value="<?php echo $this->_tpl_vars['u']['dob']; ?>
" />
        YYYY-MM-DD</td>
    </tr>
    <tr>
      <td><strong>Joined - IP</strong></td>
      <td><input name="doj" type="text" id="doj" value="<?php echo $this->_tpl_vars['u']['doj']; ?>
" /> 
        - <?php echo $this->_tpl_vars['u']['signup_ip']; ?>
</td>
    </tr>
    <tr>
      <td><strong>Last Login - Login IP</strong></td>
      <td><?php echo $this->_tpl_vars['u']['last_logged']; ?>
 - <?php echo $this->_tpl_vars['u']['ip']; ?>
</td>
    </tr>
    <tr>
      <td><strong>Last Active - Online </strong></td>
      <td><?php echo $this->_tpl_vars['u']['last_active']; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['u']['last_active'])) ? $this->_run_mod_handler('is_online', true, $_tmp) : is_online($_tmp)); ?>
</td>
    </tr>
    <tr>
      <td><strong>Profile Views</strong></td>
      <td><label for="profile_hits"></label>
        <input name="profile_hits" type="text" id="profile_hits" value="<?php echo $this->_tpl_vars['u']['profile_hits']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Videos Watched</strong></td>
      <td><input name="total_watched" type="text" id="total_watched" value="<?php echo $this->_tpl_vars['u']['total_watched']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Videos Uploaded</strong></td>
      <td><input name="total_videos" type="text" id="total_watched2" value="<?php echo $this->_tpl_vars['u']['total_videos']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Comments Made</strong></td>
      <td><input name="total_comments" type="text" id="total_watched3" value="<?php echo $this->_tpl_vars['u']['total_comments']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Profile Comments</strong></td>
      <td><input name="comments_count" type="text" id="comments_count" value="<?php echo $this->_tpl_vars['u']['comments_count']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Profile Rating</strong></td>
      <td><input name="rating" type="text" id="total_watched4" value="<?php echo $this->_tpl_vars['p']['rating']; ?>
" />
        0-10</td>
    </tr>
    <tr>
      <td><strong>Profile Rated by</strong></td>
      <td><input name="rated_by" type="text" id="total_watched5" value="<?php echo $this->_tpl_vars['p']['rated_by']; ?>
" /></td>
    </tr>
    <tr>
      <td><strong>Subscribers</strong></td>
      <td><input name="subscribers" type="text" id="total_watched6" value="<?php echo $this->_tpl_vars['u']['subscribers']; ?>
" /></td>
    </tr>
  </table>
</fieldset><fieldset class="fieldset">
  <legend>Recent Activity Log</legend>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40" align="center" valign="middle" class="left_head">ID</td>
    <td width="50" class="head_sep_left">UID</td>
    <td width="100" class="head"><div class="head_sep_left" style="width:100px">Username</div></td>
    <td width="100" class="head"><div class="head_sep_left" style="width:100px">Date</div></td>
    <td class="head"><div class="head_sep_left" style="width:100px">Detail</div></td>
    <td width="10" class="right_head">&nbsp;</td>
  </tr>
</table>

<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
<?php $this->assign('logs', $this->_tpl_vars['userquery']->get_user_action_log($this->_tpl_vars['u']['userid'],10)); ?>
<?php unset($this->_sections['log']);
$this->_sections['log']['loop'] = is_array($_loop=$this->_tpl_vars['logs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['log']['name'] = 'log';
$this->_sections['log']['show'] = true;
$this->_sections['log']['max'] = $this->_sections['log']['loop'];
$this->_sections['log']['step'] = 1;
$this->_sections['log']['start'] = $this->_sections['log']['step'] > 0 ? 0 : $this->_sections['log']['loop']-1;
if ($this->_sections['log']['show']) {
    $this->_sections['log']['total'] = $this->_sections['log']['loop'];
    if ($this->_sections['log']['total'] == 0)
        $this->_sections['log']['show'] = false;
} else
    $this->_sections['log']['total'] = 0;
if ($this->_sections['log']['show']):

            for ($this->_sections['log']['index'] = $this->_sections['log']['start'], $this->_sections['log']['iteration'] = 1;
                 $this->_sections['log']['iteration'] <= $this->_sections['log']['total'];
                 $this->_sections['log']['index'] += $this->_sections['log']['step'], $this->_sections['log']['iteration']++):
$this->_sections['log']['rownum'] = $this->_sections['log']['iteration'];
$this->_sections['log']['index_prev'] = $this->_sections['log']['index'] - $this->_sections['log']['step'];
$this->_sections['log']['index_next'] = $this->_sections['log']['index'] + $this->_sections['log']['step'];
$this->_sections['log']['first']      = ($this->_sections['log']['iteration'] == 1);
$this->_sections['log']['last']       = ($this->_sections['log']['iteration'] == $this->_sections['log']['total']);
?>

  <tr>
    <td width="40" align="center" valign="middle" class=""><?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_id']; ?>
</td>
    <td width="50" class="" style="padding-left:10px"><?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_userid']; ?>
</td>
    <td width="100" class=""><div class="" style="width:100px"><?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_username']; ?>
</div></td>
    <td width="100" class=""><div class="" style="width:100px"><?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['date_added']; ?>
</div></td>
    <td class=""><div class="">Type : <?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_type']; ?>
 &#8211;<?php if ($this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_details'] != ''): ?><?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_details']; ?>
 &#8211;<?php endif; ?> Success : <?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_success']; ?>
 &#8211 <?php echo $this->_tpl_vars['logs'][$this->_sections['log']['index']]['action_ip']; ?>
</div></td>
    </tr>
<?php endfor; else: ?>
	<!--<tr><td><em>No user action log found</em></td></tr>-->
<?php endif; ?>
</table>
  
  </fieldset><fieldset class="fieldset">
  <legend>User Avatar and Background</legend><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" align="center" valign="top"><img src="<?php echo $this->_tpl_vars['userquery']->getUserThumb($this->_tpl_vars['u']); ?>
" class="mid_user_thumb" style="max-width:95px"/><br />
      <input name="delete_avatar" type="checkbox" id="delete_avatar" value="yes" />
      <label for="delete_avatar">Delete This Image - (if user has profile pic)</label></td>
    <td valign="top"><strong>User Avatar/Profile Pic</strong><br />
      Please select image file<br />
      <label for="avatar_file"></label>
      <input type="file" name="avatar_file" id="avatar_file" />
      OR<br />
      Please Enter Image URL<br />
      <label for="avatar_url"></label>
      <input name="avatar_url" type="text" id="avatar_url" value="<?php echo $this->_tpl_vars['u']['avatar_url']; ?>
" />
      
      <input type="hidden" name="avatar_file_name" value="<?php echo $this->_tpl_vars['u']['avatar']; ?>
" />
<br />
      <input name="remove_avatar_url" type="checkbox" id="remove_avatar_url" value="yes" />
      <label for="remove_avatar_url">Remote avatar url</label>
      </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="border-bottom:1px solid #CCC">&nbsp;</td>
    </tr>
  <tr>
    <td height="125" align="center" valign="top"><?php if ($this->_tpl_vars['userquery']->getUserBg($this->_tpl_vars['u'])): ?><img src="<?php echo $this->_tpl_vars['userquery']->getUserBg($this->_tpl_vars['u']); ?>
" style="max-width:95px"/><?php else: ?>No Bg<?php endif; ?></td>
    <td valign="top"><strong>User Background Image
      </strong><br />
      Please Select Image File
      <br />
      <input type="file" name="background_file" id="background_file" />
OR<br />
Please Enter Image URL<br />
<label for="avatar_url"></label>
<input name="background_url" type="text" id="background_url" value="<?php echo $this->_tpl_vars['u']['background_url']; ?>
" />
OR<br />
Please Enter Background Color<br />
<input name="background_color" type="text" id="background_color" value="<?php echo $this->_tpl_vars['u']['background_color']; ?>
" />

<input type="hidden" name="bg_file_name" value="<?php echo $this->_tpl_vars['u']['background']; ?>
" />
<br />
Background Repeat Type (if using image as a background)<br />
<label for="background_repeat"></label>
<select name="background_repeat" id="background_repeat" >
  <option value="repeat" <?php if ($this->_tpl_vars['u']['background_repeat'] == 'repeat'): ?> selected="selected"<?php endif; ?>>repeat</option>
  <option value="repeat-x" <?php if ($this->_tpl_vars['u']['background_repeat'] == 'repeat-x'): ?> selected="selected"<?php endif; ?>>repeat-x</option>
  <option value="repeat-y" <?php if ($this->_tpl_vars['u']['background_repeat'] == 'repeat-y'): ?> selected="selected"<?php endif; ?>>repeat-y</option>
  <option value="no-repeat" <?php if ($this->_tpl_vars['u']['background_repeat'] == 'no-repeat'): ?> selected="selected"<?php endif; ?>>no-repeat</option>
</select>
<br />

<?php if ($this->_tpl_vars['userquery']->getUserBg($this->_tpl_vars['u'])): ?><input name="delete_bg" type="checkbox" id="delete_bg" value="yes" /><label for="delete_bg">Delete This Image</label><?php endif; ?></td>
  </tr>
  </table>
</fieldset>


</td>
</tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for="update_user"></label>
      <input type="submit" name="update_user" id="update_user" value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>

</table>
<br />
  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
     
    <tr>
       <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <div id="comments"></div>
    <?php $this->assign('object_type', 'channel'); ?>
    <script>
	
	$(document).ready(function()
	{
		page = baseurl+'/ajax.php';
		getComments('c','<?php echo $this->_tpl_vars['u']['userid']; ?>
','<?php echo $this->_tpl_vars['u']['last_commented']; ?>
',1,'<?php echo $this->_tpl_vars['u']['comments_count']; ?>
','<?php echo $this->_tpl_vars['object_type']; ?>
','yes')
	}
	);
    </script>
    
    
    </td>
  </tr>
  </table>
  <br />
  
</form>