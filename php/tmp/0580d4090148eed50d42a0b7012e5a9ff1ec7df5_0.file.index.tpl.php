<?php /* Smarty version 3.1.27, created on 2015-11-08 09:46:03
         compiled from "views/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1854300125563f0bcb5ed341_23767090%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0580d4090148eed50d42a0b7012e5a9ff1ec7df5' => 
    array (
      0 => 'views/index.tpl',
      1 => 1446972257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854300125563f0bcb5ed341_23767090',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563f0bcb785826_35002949',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563f0bcb785826_35002949')) {
function content_563f0bcb785826_35002949 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1854300125563f0bcb5ed341_23767090';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS Nation</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>

  	<div class="navbar navbar-default navbar-fixed-top nav-color" role="navigation">
    <div class="container">
  	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span class="menu-color">CS Nation</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown"><!--Dropdown menu for Courses begins-->
          <a href="#" class="dropdown-toggle menu-color" data-toggle="dropdown" role="button" aria-expanded="false"><span class="menu-color">Courses</span><span class="caret menu-color"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">CS Nation</a></li>
            <li><a href="#">Test1</a></li>
            <li><a href="#">Test2</a></li>
            <li class="divider"></li>
            <li><a href="#">Test3</a></li>
          </ul>
        </li> <!--Dropdown menu for Courses ends-->

    <li class="dropdown"> <!--Dropdown menu for About Us Begins-->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="menu-color">About Us</span><span class="caret menu-color"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Test1</a></li>
            <li><a href="#">Test2</a></li>
            <li><a href="#">Test3</a></li>
            <li class="divider"></li>
            <li><a href="about_us.html">Contact Us</a></li>
          </ul>
        </li>	<!--Dropdown menu for About Us ends-->
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default button-color"><span class="menu-color">Search</span></button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</div>

</body>
</html>
<?php }
}
?>