<?php /* Smarty version Smarty-3.1.18, created on 2015-08-05 04:09:12
         compiled from ".\..\content\themes\default\message_bad.html" */ ?>
<?php /*%%SmartyHeaderCode:2186155bf620fdecb53-12991825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56db49b8da6528f8f0e1217cf54d5c1fd1fa2a89' => 
    array (
      0 => '.\\..\\content\\themes\\default\\message_bad.html',
      1 => 1438747750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2186155bf620fdecb53-12991825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55bf620fe9bd85_55782324',
  'variables' => 
  array (
    'tit2' => 0,
    'tit' => 0,
    'head' => 0,
    'message' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf620fe9bd85_55782324')) {function content_55bf620fe9bd85_55782324($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title> <?php echo $_smarty_tpl->tpl_vars['tit2']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
  <link rel="stylesheet" href="./../content/themes/default/bootstrap/css/bootstrap.css" /> 
  <link rel="stylesheet" href="./../content/themes/default/bootstrap/css/style_v.css" /> 
 </head> 
 <body>
   <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
  <script type="text/javascript" src="./../content/themes/default/bootstrap/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="./../content/themes/default/js/ZeroClipboard.js"></script> 
  <style type="text/css">
 body {
	background-image: url(./../content/themes/default/images/bg1.png);
	background-repeat: repeat-x;
	background-color: #9cd9f2;
	margin-top:36px;
font-family: '微软雅黑';
}
.xiaoguo{box-shadow: 0px 0px 30px #888888;}
body, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, textarea, p, blockquote, th, td { padding: 0; margin: 0; }
</style> 
  <div id="con"> 
   <br /> 
   <br /> 
   <br /> 
   <br /> 
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
    <div class="header"> 
     <div class="wrap"> 
      <div class="logo"> 
       <a href="../index.php"><img src="./../content/themes/default/images/logo_small.jpg" /></a> 
      </div> 
      <ul class="sub_nav"> 
       <li class="boxico"><a href="help.php" target="_self"><img src="./../content/themes/default/images/bzpic.png" /></a></li> 
      </ul> 
     </div> 
    </div> 
   </nav> 
 
  <div align="center">
<br /><br /><br /><br /><br /><br />
  <table width="560" border="0">
    <tr>
      <td><div class="xiaoguo">
        <div class="alert alert-danger" role="alert"><img src="./../content/themes/default/images/no.png" width="78" height="78" /><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div></div>
      
      </td>
    </tr>
  </table>

  <br /><br /><br /><br /><br /><br />
  <div class="ffft"> 
   <div align="right"> 
    <br /> Copyright &copy; 2012-2014 <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
 Powerd by 树洞外链 <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 
   </div> 
  </div> 
 
 </body>
</html><?php }} ?>