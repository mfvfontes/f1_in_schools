<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 13:20:58
         compiled from "/opt/lbaw/lbaw1426/public_html/proto/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41357716255507f2b0cccc6-62939808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e393754bea1f30bc899cdd226004155d3fc956' => 
    array (
      0 => '/opt/lbaw/lbaw1426/public_html/proto/templates/search.tpl',
      1 => 1431343248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41357716255507f2b0cccc6-62939808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55507f2b1f19d7_30749860',
  'variables' => 
  array (
    'fields' => 0,
    'field' => 0,
    'BASE_URL' => 0,
    'jsPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55507f2b1f19d7_30749860')) {function content_55507f2b1f19d7_30749860($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
    <form>
        <label for="search_input">Search:</label>
        <input type="text" id="search_input">
    </form>
</div>


<div class="row">
    <table class="table table-hover">
        <thead>
        <tr>

            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                <th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th>
            <?php } ?>

        </tr>
        </thead>
        <tbody id="tableBody">

        </tbody>
    </table>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src= <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/search/<?php echo $_smarty_tpl->tpl_vars['jsPage']->value;?>
></script>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
