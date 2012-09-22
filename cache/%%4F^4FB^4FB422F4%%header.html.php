<?php /* Smarty version 2.6.18, created on 2012-09-22 08:44:11
         compiled from /home/wwwroot/styles/cbv2new/layout/header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cbtitle', '/home/wwwroot/styles/cbv2new/layout/header.html', 8, false),array('function', 'ANCHOR', '/home/wwwroot/styles/cbv2new/layout/header.html', 10, false),array('function', 'link', '/home/wwwroot/styles/cbv2new/layout/header.html', 15, false),array('function', 'lang', '/home/wwwroot/styles/cbv2new/layout/header.html', 19, false),array('function', 'cbMenu', '/home/wwwroot/styles/cbv2new/layout/header.html', 52, false),array('modifier', 'sprintf', '/home/wwwroot/styles/cbv2new/layout/header.html', 28, false),array('modifier', 'get_form_val', '/home/wwwroot/styles/cbv2new/layout/header.html', 86, false),array('modifier', 'capitalize', '/home/wwwroot/styles/cbv2new/layout/header.html', 90, false),)), $this); ?>
<div class="topHead">
<div id="container" class="container clearfix">
<!-- Loading Quicklist Box -->
<div id="quicklist_box"></div>

<div id="header">
	<div>
    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/dot.gif" alt="<?php echo cbtitle(array(), $this);?>
" name="logo_icon" width="250" height="60" border="0" id="logo_icon" title="<?php echo cbtitle(array(), $this);?>
"  class="logo"></a>
</div> <!--LOGO END-->
<?php echo ANCHOR(array('place' => 'mature_content'), $this);?>

    <div class="login_con clearfix" style="display:none;">
        <div class="user_login clearfix">
        <?php if (! $this->_tpl_vars['userquery']->login_check('',true)): ?>
        	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/forgot.php" class="forget" title="Forget Username/Password, Click Here"></a>
            <form action="<?php echo cblink(array('name' => 'login'), $this);?>
" method="post" name="login" style="margin:0px; padding:0px;" <?php echo ANCHOR(array('place' => 'cb_login_form_tag'), $this);?>
>
                <input type="text" value="Username" id="cb_head_username" name="username" onfocus="if(this.defaultValue == this.value) this.value = ''" onblur="if(this.value == '') this.value = this.defaultValue"  />
                <input type="password" value="Password" id="cb_head_password" name="password" onfocus="if(this.defaultValue == this.value) this.value = ''" onblur="if(this.value == '') this.value = this.defaultValue"  />                
                <input type="submit" value="Login" id="login_head_bttn" name="login" <?php echo ANCHOR(array('place' => 'login_head_bttn'), $this);?>
 />
                <input type="checkbox" name="rememberme" id="rememberme"  /> <span class="remember"><?php echo smarty_lang(array('code' => 'remember_me'), $this);?>
</span>
                <?php echo ANCHOR(array('place' => 'login_form'), $this);?>

			</form> 
        <?php else: ?>
        	<div class="avatar">
            	<div style="width:40px; height:40px; background:#EEE; margin:0px; padding:0px;"><img src="<?php echo $this->_tpl_vars['userquery']->getUserThumb($this->_tpl_vars['userquery']->udetails,'small'); ?>
" class="mid_user_thumb" style="max-height:40px; max-width:40px" /></div>
            </div>
            <div class="txt">
            <?php echo smarty_lang(array('code' => 'howdy_user','assign' => 'howdyuser'), $this);?>

            <?php echo ((is_array($_tmp=$this->_tpl_vars['howdyuser'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['userquery']->username) : sprintf($_tmp, $this->_tpl_vars['userquery']->username)); ?>

      		| <a href="<?php echo cblink(array('name' => 'logout'), $this);?>
"><?php echo smarty_lang(array('code' => 'logout'), $this);?>
</a></div>
            <div class="links"><a href="<?php echo cblink(array('name' => 'inbox'), $this);?>
"><?php echo smarty_lang(array('code' => 'messages'), $this);?>
 (<?php echo $this->_tpl_vars['cbpm']->get_new_messages(); ?>
)</a> | <a href="<?php echo cblink(array('name' => 'notifications'), $this);?>
"><?php echo smarty_lang(array('code' => 'notifications'), $this);?>
 (<?php echo $this->_tpl_vars['cbpm']->get_new_messages('','notification'); ?>
)</a> | <a href="<?php echo cblink(array('name' => 'my_account'), $this);?>
"><?php echo smarty_lang(array('code' => 'account'), $this);?>
</a></div>
        <?php endif; ?> 
        </div> <!--USER_LOGIN CLASS END-->
      
         <div id="user_login">
            <a href="javascript:void(0)">
            <?php if (! $this->_tpl_vars['userquery']->login_check('',true)): ?>
            	Login
            <?php else: ?>
            	My Info
            <?php endif; ?>    
            </a>
        </div> <!--USER_LOGIN ID END--><div class="updatedUpload">
   	 <a href="<?php echo cblink(array('name' => 'upload'), $this);?>
">Upload video</a> | <a href="<?php echo cblink(array('name' => 'photo_upload'), $this);?>
">Upload Photo</a>       
    </div>
    </div> <!--LOGIN_CON END-->
    
        
</div> <!--HEADER ID END-->
</div>
<div class="top_tabs clearfix" style="display:none;">
    <ul>
    	<?php echo cbMenu(array('echo' => 'yes'), $this);?>

    </ul>
	
</div> <!--TOP_TABS END-->

<div class="navi">
        <ul>
        <?php if (! $this->_tpl_vars['userquery']->login_check('',true)): ?>
        <?php echo smarty_lang(array('code' => 'after_meny_guest_msg','assign' => 'guestmsg'), $this);?>

        <?php echo cblink(array('name' => 'login','assign' => 'loginlink'), $this);?>

        	<li><?php echo ((is_array($_tmp=$this->_tpl_vars['guestmsg'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['loginlink'], $this->_tpl_vars['loginlink']) : sprintf($_tmp, $this->_tpl_vars['loginlink'], $this->_tpl_vars['loginlink'])); ?>
</li>
        <?php else: ?>
        				
        <li><a href="<?php echo cblink(array('name' => 'index '), $this);?>
"><?php echo smarty_lang(array('code' => 'menu_home'), $this);?>
</a></li>
         <li><a href="<?php echo cblink(array('name' => 'videos'), $this);?>
"><?php echo smarty_lang(array('code' => 'videos'), $this);?>
</a></li>
          <li><a href="search_result.php"><?php echo smarty_lang(array('code' => 'search'), $this);?>
</a></li>
         <?php if ($this->_tpl_vars['userquery']->perm_check('allow_video_upload',true)): ?>
        	<li><a href="<?php echo cblink(array('name' => 'my_account'), $this);?>
"><?php echo smarty_lang(array('code' => 'com_my_account'), $this);?>
</a></li>          	
        	
        	<li><a href="<?php echo cblink(array('name' => 'my_videos'), $this);?>
"><?php echo smarty_lang(array('code' => 'com_my_videos'), $this);?>
</a></li>
        	
        	<li><a href="<?php echo cblink(array('name' => 'my_playlists'), $this);?>
"><?php echo smarty_lang(array('code' => 'playlists'), $this);?>
</a></li>
<li><a href="<?php echo cblink(array('name' => 'upload'), $this);?>
">Upload video</a></li>
						<?php endif; ?>
						<?php if (has_access ( 'admin_access' , true )): ?>
							<li><a href="manage_cameras.php">Camera</a></li>
							<li><a href="admin_area">Admin</a></li>
						<?php endif; ?>
        	<li><a href="<?php echo cblink(array('name' => 'logout'), $this);?>
"><?php echo smarty_lang(array('code' => 'logout'), $this);?>
</a></li>
          
         </ul>
<div class="search_con" style="display:none;">
    <div class="s_bg">	
        <form action="<?php echo cblink(array('name' => 'search_result'), $this);?>
" method="get" name="search" id="search" style="margin:0px; padding:0px;">               
            <input name="query" id="query" type="text" class="searchbar" value="<?php echo ((is_array($_tmp='query')) ? $this->_run_mod_handler('get_form_val', true, $_tmp, true) : get_form_val($_tmp, true)); ?>
" />
            <input type="hidden" name="type" id="searchType" value="<?php echo $_GET['type']; ?>
" />                      
            <div class="moveL">
            	<div id="selectedSearch" class="clearfix" onclick="$('#searchSelectWrapper').toggle();">
                	<span id="selectedText""><?php echo ((is_array($_tmp=$_GET['type'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</span>
                </div>
                <div id="searchSelectWrapper">
                <ul>
                    <?php $_from = $this->_tpl_vars['Cbucket']->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['SearchTypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['SearchTypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['stypes'] => $this->_tpl_vars['t']):
        $this->_foreach['SearchTypes']['iteration']++;
?>
                        <li<?php if ($_GET['type'] == $this->_tpl_vars['stypes'] && @THIS_PAGE == 'search_result'): ?> class="selected"<?php endif; ?>>
                        <a id="<?php echo $this->_tpl_vars['stypes']; ?>
" href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['stypes'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>    
                </div>
            </div>                                
            <input name="submit" type="submit" class="searchbutton" value="Search" />
        </form>
    </div> <!--S_BG END-->    
</div> <!--SEARCH_CON END-->
<?php endif; ?>   
    </div></div>
    
    
    <?php echo ANCHOR(array('place' => 'anything'), $this);?>
