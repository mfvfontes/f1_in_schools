<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 00:43:07
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:568212664553a4b1e9e50f1-19129071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a1e2767dd412d92465c2eb879d286618f1986cb' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/common/header.tpl',
      1 => 1430913218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568212664553a4b1e9e50f1-19129071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553a4b1e9fb040_22914678',
  'variables' => 
  array (
    'title' => 0,
    'BASE_URL' => 0,
    'title_image' => 0,
    'subtitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a4b1e9fb040_22914678')) {function content_553a4b1e9fb040_22914678($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta charset="UTF-8">
  <meta name=description content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/sidebar.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

  <!--
  Perform sidebar operations here
  -->

  <?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">


      <div class="row header">
        <div class="col-sm-2 col-md-2 col-lg-2 logo">

          <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/<?php echo $_smarty_tpl->tpl_vars['title_image']->value;?>
" alt="Image">

        </div>
        <div class=" col-sm-10 col-md-10 col-lg-10">

          <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
          <?php if ($_smarty_tpl->tpl_vars['subtitle']->value!=null) {?>
            <h5><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</h5>
          <?php }?>


        </div>
      </div>
<?php }} ?>
