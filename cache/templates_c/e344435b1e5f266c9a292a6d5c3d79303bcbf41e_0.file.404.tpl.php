<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:32:16
  from '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f62e0ac2677_29117342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e344435b1e5f266c9a292a6d5c3d79303bcbf41e' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/404.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_630f62e0ac2677_29117342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="ui container" id="error-404">
    <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['404_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</p>
        <div class="ui buttons">
            <button class="ui primary button" onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
            <div class="or"></div>
            <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
        </div>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</p>
    </div>
</div>
</body>

</html><?php }
}
