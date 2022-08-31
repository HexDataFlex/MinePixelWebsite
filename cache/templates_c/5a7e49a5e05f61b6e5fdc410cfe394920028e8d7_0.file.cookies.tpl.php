<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:36:52
  from '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f63f4beeb42_45782015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a7e49a5e05f61b6e5fdc410cfe394920028e8d7' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/cookies.tpl',
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
function content_630f63f4beeb42_45782015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE_HEADER']->value;?>

</h2>

<div class="ui padded segment" id="cookies">
    <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE']->value;?>


    <div class="ui divider"></div>
    <div class="ui blue button" onclick="configureCookies()"><?php echo $_smarty_tpl->tpl_vars['UPDATE_SETTINGS']->value;?>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
