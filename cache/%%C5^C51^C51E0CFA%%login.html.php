<?php /* Smarty version 2.6.18, created on 2012-09-11 14:31:16
         compiled from /home/wwwroot/admin_area/styles/cbv2/layout/login.html */ ?>
<body>

<div class="header_grey_bar">
	<?php echo $this->_tpl_vars['title']; ?>
 &#8212; <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
">Back To Main Website</a>
	<div class="clearfix"></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['style_dir'])."/msg.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div style="height:400px; background-image:url(<?php echo $this->_tpl_vars['imageurl']; ?>
/bgs/login.png); background-repeat:repeat-x; display:none;s" align="center">
<div id="login_box">
  <form name="form1" method="post" action="">
    <table width="78%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left"><label for="username">Username</label></td>
      </tr>
      <tr>
        <td align="left">
          <input type="text" name="username" id="username" class="textfield">
        </td>
      </tr>
      <tr>
        <td align="left"><label for="password">Password</label></td>
      </tr>
      <tr>
        <td>
          <input type="password" name="password" id="password" class="textfield">
        </td>
      </tr>
      <tr>
        <td align="center"><label>
          <input type="submit" name="login" class="button" value="    Login    ">
        </label></td>
      </tr>
    </table>
  </form>
</div>
</div>

</body>
</html>