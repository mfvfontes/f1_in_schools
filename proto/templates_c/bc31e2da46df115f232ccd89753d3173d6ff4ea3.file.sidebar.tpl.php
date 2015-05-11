<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 13:33:15
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705744824553cef8a44ba62-28631500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc31e2da46df115f232ccd89753d3173d6ff4ea3' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/common/sidebar.tpl',
      1 => 1431343982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705744824553cef8a44ba62-28631500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553cef8a459367_05541821',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
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


        <?php if (!is_null($_SESSION['name'])) {?>

            <li>
                Welcome <?php echo $_SESSION['name'];?>

            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php">Log Out</a>
            </li>

            <li class="divider"></li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/users.php">Users</a>
            </li>
            <li>
                <a href="#">Profile</a>
            </li>
            <li>
                <a href="#">Team</a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/edit_profile.php">Edit Profile</a>

            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/edit_password.php">Change Password</a>
            </li>
            <li>
                <a href="#">Insert Photo</a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="#">Contacts </a>
            </li>

        <?php } else { ?>
            <li id="login">
                <form role="form" id="log_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                    <label for="email" class="sr-only">Name</label>
                    <div class="input-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <label for="logpassword" class="sr-only">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" id="logpassword" class="form-control" placeholder="Password" required>
                    </div>

                    <button class="btn btn-default btn-xs" type="submit">Log In</button>
                </form>

            </li>

        <?php }?>


    </ul>

</div><?php }} ?>
