<?php
/* Smarty version 4.2.0, created on 2022-08-31 15:38:32
  from '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f6458400e27_67908498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56c884b2ff61716efc2c53682f9cc386e27cc429' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/maintenance.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_630f6458400e27_67908498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="ui container" id="maintenance">
    <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MESSAGE']->value;?>
</p>
        <div class="ui buttons">
            <button class="ui positive button" onclick="window.location.reload()"><?php echo $_smarty_tpl->tpl_vars['RETRY']->value;?>
</button>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['LOGIN']->value))) {?>
        <div class="ui divider"></div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
</a>
        <?php }?>
    </div>
</div>
</body>

</html><?php }
}
