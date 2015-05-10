<?php /* Smarty version Smarty-3.1.15, created on 2015-04-26 16:00:42
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705744824553cef8a44ba62-28631500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc31e2da46df115f232ccd89753d3173d6ff4ea3' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/common/sidebar.tpl',
      1 => 1429915463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705744824553cef8a44ba62-28631500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553cef8a459367_05541821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553cef8a459367_05541821')) {function content_553cef8a459367_05541821($_smarty_tpl) {?><!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/assets/F1_logo.png" alt="F1 in Schools Logo">
            </a>
        </li>
        <li class="divider"></li>
        <li>
            Welcome <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

        </li>
        <li class="divider"></li>
        <li>
            <a href="#">Profile</a>
        </li>
        <li>
            <a href="#">Team</a>
        </li>
        <li class="divider"> </li>
        <li>
            <a href="#">Edit Profile</a>
        </li>
        <li>
            <a href="#">Insert Photo</a>
        </li>
        <li class="divider"> </li>
        <li>
            <a href="#">Contacts </a>
        </li>
    </ul>

</div><?php }} ?>
