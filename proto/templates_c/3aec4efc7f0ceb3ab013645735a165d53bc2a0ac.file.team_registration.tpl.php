<?php /* Smarty version Smarty-3.1.15, created on 2015-04-30 16:46:02
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/registrations/team_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224268413553dde42cc0dd1-72611639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aec4efc7f0ceb3ab013645735a165d53bc2a0ac' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/registrations/team_registration.tpl',
      1 => 1430400291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224268413553dde42cc0dd1-72611639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dde42d77723_31232392',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'title' => 0,
    'ERROR_MESSAGES' => 0,
    'foo' => 0,
    'action_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dde42d77723_31232392')) {function content_553dde42d77723_31232392($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="row header">
    <div class="col-sm-2 col-md-2 col-lg-2 logo">

        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/register.png" alt="Image">

    </div>
    <div class=" col-sm-10 col-md-10 col-lg-10">

        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <h5>Complete your Team registration:</h5>

    </div>
</div>

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
actions/registrations/<?php echo $_smarty_tpl->tpl_vars['action_page']->value;?>
" method="post">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

        <div class="panel panel-info">
            <div class="panel-body">
                <form class="form-register">

                    <label for="inputName" class="sr-only">Name</label>

                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" name="teamName" id="teamName" class="form-control" placeholder="Team Name" required>

                    </div>




                    <label for="Members" class="col-xs-8 control-label">Members:</label>
                    <div class="col-xs-10">

                        <input type="email" name="participant1" id="participant1" class="form-control" placeholder="first participant email" required>


                        <label for="inputParticipant2" class="sr-only">parti2</label>


                        <input type="email" name="participant2"  id="participant2" class="form-control" placeholder="second participant email" required>


                        <label for="inputParticipant3" class="sr-only">parti3</label>


                        <input type="email" name="participant3" id="participant3" class="form-control" placeholder="third participant email" required>


                        <label for="inputparticipant4" class="sr-only">patri4</label>


                        <input type="email" name="participant4" name="participant4" id="participant4" class="form-control" placeholder="fourth participant email" required>


                        <label for="inputparticipant5" class="sr-only">parti5</label>


                        <input type="email" name= "participant5" id="participant5" class="form-control" placeholder="fifth participant email" required>

                    </div>

                    <button class="btn btn-lg  btn-block" type="submit">Sign Up</button>
                </form>
            </div>

        </div>
    </div>

</form>

<!-- jQuery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script>
<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/registrations/form_validation.js"></script>


<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/javascript/registration.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php }} ?>
