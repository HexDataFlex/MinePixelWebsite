<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:28:14
  from '/srv/http/MinePixelWebsite/custom/panel_templates/Default/includes/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f61ee0f6410_68365481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c5b89349134a441438e507db4c1e9aa28fbb483' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/panel_templates/Default/includes/update.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630f61ee0f6410_68365481 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
        <div class="alert bg-danger text-white">
    <?php } else { ?>
        <div class="alert bg-primary text-white alert-dismissible" id="updateAlert">
        <button type="button" class="close" id="closeUpdate" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
<br />
    <a href="<?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE']->value;?>
</a>
    <hr style="border-color: rgba(0,0,0,.1)" /> <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>

    <br /><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>

    </div>
<?php }
}
}
