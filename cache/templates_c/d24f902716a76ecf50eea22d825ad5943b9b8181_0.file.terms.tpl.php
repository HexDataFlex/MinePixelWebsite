<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:36:48
  from '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f63f02ee7b2_75159613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24f902716a76ecf50eea22d825ad5943b9b8181' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/terms.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_630f63f02ee7b2_75159613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['TERMS']->value;?>

</h2>

<div class="ui padded segment" id="terms">
    <?php echo $_smarty_tpl->tpl_vars['SITE_TERMS']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
