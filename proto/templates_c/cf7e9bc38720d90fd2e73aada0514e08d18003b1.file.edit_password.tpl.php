<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 13:57:18
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/users/edit_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33920209855508813ba9c58-33075037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf7e9bc38720d90fd2e73aada0514e08d18003b1' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/users/edit_password.tpl',
      1 => 1431345282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33920209855508813ba9c58-33075037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55508813d2d7b5_52892188',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'foo' => 0,
    'BASE_URL' => 0,
    'schools' => 0,
    'school' => 0,
    'email' => 0,
    'rType' => 0,
    'rID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55508813d2d7b5_52892188')) {function content_55508813d2d7b5_52892188($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php if (!is_null($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-danger">
            <div class="panel-heading">
                Errors in the form are listed below
            </div>
            <div class="panel-body">
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }?>


<form role="form" id="reg_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit_password.php" method="post">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

        <div class="panel panel-info">
            <div class="panel-body">

                    <label for="inputPassword" class="sr-only">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="oldPassword" id="oldPassword" class="form-control" placeholder="Old Password" required>
                    </div>


                <label for="inputPassword" class="sr-only">Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>



                <label for="inputPassword" class="sr-only">Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re-enter Password" required>
                </div>

                </div>



                <?php if (!is_null($_smarty_tpl->tpl_vars['schools']->value)) {?>
                    <label for="school" class="sr-only">Country</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <select id="schoolSelect" class="form-control" name="schoolID">
                            <option value=""></option>
                            <?php  $_smarty_tpl->tpl_vars['school'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['school']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['school']->key => $_smarty_tpl->tpl_vars['school']->value) {
$_smarty_tpl->tpl_vars['school']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['school']->value['schoolid'];?>
"><?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                <?php }?>

                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['rType']->value;?>
" name="rType">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['rID']->value;?>
" name="rID">

                <button class="btn btn-lg  btn-block" type="submit"> Change Password</button>
            </div>

        </div>
    </div>

</form>


<!-- jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/registrations/form_validation.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/searchable/jquery.searchabledropdown-1.0.8.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/searchable/jquery.searchabledropdown-1.0.8.src.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#schoolSelect").searchable();
    });
</script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/registration.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<?php }} ?>
