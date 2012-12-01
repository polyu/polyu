<?php /* Smarty version 2.6.18, created on 2012-09-29 11:38:22
         compiled from /mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', '/mnt/array1/www/htdocs/wwwroot/styles/cbv2new/layout/index.html', 8, false),)), $this); ?>

<div class="content_con clearfix" style="width:100%;">
	<!--FEATURE_CON--> 

    <?php if (isSectionEnabled ( 'videos' )): ?>
    <div class="tabs">
        <ul>
            <li class="selected"><a href="javascript:void(0)" id="most_watched" onclick="get_video('show_playlist','#index_vid_container')"><?php echo smarty_lang(array('code' => 'video_playlists'), $this);?>
</a></li>
            			      <li><a href="javascript:void(0)" id="most_watched" onclick="get_video('most_viewed','#index_vid_container')"><?php echo smarty_lang(array('code' => 'com_vidz'), $this);?>
</a></li>
       </ul>    	
    </div> <!--TABS END-->
    <div class="main_vids clearfix">
    	<div id="style_change">
			<div id="grid" onclick="ToggleView(this);" title="Change To Grid Style"></div> 
			<div id="list" onclick="ToggleView(this);" title="Change to List Style"></div>
			<?php echo smarty_lang(array('code' => 'change_style_of_listing'), $this);?>
 
		</div> <!--STYLE_CHANGE END-->
             
       <div id="index_vid_container">
       
       </div>
        

    </div> <!--MAIN_VIDS END-->
    
    <?php endif; ?>
   
</div> <!--CONTENT_CON END-->

<div class="side_con">

	
    
</div> 