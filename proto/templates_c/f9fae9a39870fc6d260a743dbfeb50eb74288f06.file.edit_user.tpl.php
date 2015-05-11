<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 13:56:27
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/users/edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100984760855507dbc9ebc72-20009075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9fae9a39870fc6d260a743dbfeb50eb74288f06' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/users/edit_user.tpl',
      1 => 1431345330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100984760855507dbc9ebc72-20009075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55507dbcbe4756_82152286',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'foo' => 0,
    'BASE_URL' => 0,
    'userInfo' => 0,
    'countries' => 0,
    'country' => 0,
    'schools' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55507dbcbe4756_82152286')) {function content_55507dbcbe4756_82152286($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




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
actions/users/edit_profile.php" method="post">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

        <div class="panel panel-info">
            <div class="panel-body">

                <label for="inputName" class="sr-only">Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"  value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['name'];?>
" required>
                </div>


                <label for="country" class="sr-only">Country</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
                    <select name="country" id="country" class="form-control" required>

                        <option value="" disabled>Select your Country</option>

                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['country']->value['code'];?>
 <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['ccode']==$_smarty_tpl->tpl_vars['country']->value['code']) {?> selected <?php }?>> <?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
 </option>
                        <?php } ?>

                    </select>
                </div>

                <label for="birthday" class="sr-only">Birth Date</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    <input type="date" name="dob"  class="form-control" placeholder="Select Date" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['birthdate'];?>
" required />
                </div>

                <div class="checkboxGender">
                    <label for="Gender" class="control-label">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="M" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['gender']=='M') {?> checked <?php }?>> Male
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="gender" value="F" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['gender']=='F') {?> checked <?php }?>> Female
                        </label>
                    </label>


                    <label for="inputPassword" class="sr-only">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="password" id="Password" class="form-control" placeholder="Password" required>
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


                <button class="btn btn-lg  btn-block" type="submit">Edit Profile</button>
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
