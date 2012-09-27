<?php session_start(); ?> 
<object classid="clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921" codebase="http://downloads.videolan.org/pub/videolan/vlc/latest/win32/axvlc.cab" width="400" height="300" id="vlc" events="True">
 <param name="Src" value="<?php echo $_SESSION['cam_address'];?>"></param>
 <param name="ShowDisplay" value="True" ></param>
 <param name="AutoLoop" value="no"></param>
 <param name="AutoPlay" value="yes"></param>
 <embed type="application/x-google-vlc-plugin" name="vlcfirefox" autoplay="yes" loop="no" width="400" height="300" target="<?php echo $_SESSION['cam_address'];?>"></embed>
 </object>