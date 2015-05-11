<?php /* Smarty version Smarty-3.1.15, created on 2015-05-04 20:23:09
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/registrations/email_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112292247155477782d24c13-98548310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a409ae4cde3a831a302985461571ef2a07a1ae94' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/registrations/email_list.tpl',
      1 => 1430763779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112292247155477782d24c13-98548310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55477782dde5e4_28358732',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'action_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55477782dde5e4_28358732')) {function content_55477782dde5e4_28358732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form role="form" id="reg_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/registrations/<?php echo $_smarty_tpl->tpl_vars['action_page']->value;?>
" method="post">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]"> <!-- foi alterado aqui de email[] para email1 por causa do javascript -->
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">  <!-- foi alterado aqui de email[] para email2 por causa do javascript -->
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">  <!-- foi alterado aqui de email[] para email3 por causa do javascript -->
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
    	<input type="submit" value="Register">
    </div>
</form>

<!--
<div class="row" id="zero" style="display: none">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <input type="email" class="form-control" id="email" ">
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>
-->

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
