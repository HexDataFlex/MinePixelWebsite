<?php
/* Smarty version 4.2.0, created on 2022-08-31 15:40:39
  from '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f64d7ab5cc6_21517152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce37ead47d025cfd5e291d9eb3e69377ac3788b' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/register.tpl',
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
function content_630f64d7ab5cc6_21517152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['OAUTH_FLOW']->value) {?>
    <div class="sub header"><?php echo $_smarty_tpl->tpl_vars['OAUTH_MESSAGE_CONTINUE']->value;?>
</div>
    <?php }?>
</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value))) {?>
<div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
        <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
        <ul class="list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php }?>

<div class="ui padded segment" id="register">
    <div class="ui stackable grid">
        <div class="ui centered row">
            <div class="ui sixteen wide tablet ten wide computer column">
                <form class="ui form" action="" method="post" id="form-register">

                    <?php $_smarty_tpl->_assignInScope('counter', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'field', false, 'field_key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                            required<?php }?>>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 2) {?>
                        <textarea name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
"
                            tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
"></textarea>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 3) {?>
                        <input type="date" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                            tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 4) {?>
                        <input type="password" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                            required<?php }?>>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 5) {?>
                        <select class="ui fluid dropdown" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['value'] == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 6) {?>
                        <input type="number" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 7) {?>
                        <input type="email" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                            required<?php }?>>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 8) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <div class="field">
                            <div class="ui radio checkbox" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['value'] == $_smarty_tpl->tpl_vars['option']->value['value']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                <label><?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</label>
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 9) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if (is_array($_smarty_tpl->tpl_vars['field']->value['value']) && in_array($_smarty_tpl->tpl_vars['option']->value['value'],$_smarty_tpl->tpl_vars['field']->value['value'])) {?>checked<?php }?>
                                    tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                <label><?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</label>
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                    <div class="field">
                        <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                    </div>
                    <?php }?>
                    <div class="inline field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="t_and_c" id="t_and_c" value="1" tabindex="7">
                            <label for="t_and_c"><?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>
</label>
                        </div>
                    </div>
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <input id="timezone" type="hidden" name="timezone" value="">
                    <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
" tabindex="8">
                </form>
                <?php if ($_smarty_tpl->tpl_vars['OAUTH_AVAILABLE']->value && !$_smarty_tpl->tpl_vars['OAUTH_FLOW']->value) {?>
                <div class="ui horizontal divider"><?php echo $_smarty_tpl->tpl_vars['OR']->value;?>
</div>
                <div class="ui equal width grid">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'meta', false, 'name');
$_smarty_tpl->tpl_vars['meta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['meta']->value) {
$_smarty_tpl->tpl_vars['meta']->do_else = false;
?>
                    <div class="column">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['meta']->value['url'];?>
" class="ui fluid button left floated">
                            <?php if ($_smarty_tpl->tpl_vars['meta']->value['icon']) {?>
                            <i class="<?php echo $_smarty_tpl->tpl_vars['meta']->value['icon'];?>
 fa-lg"></i>
                            <?php }?>
                            <?php echo ucfirst($_smarty_tpl->tpl_vars['name']->value);?>

                        </a>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['OAUTH_FLOW']->value) {?>
                <div class="ui horizontal divider"><?php echo $_smarty_tpl->tpl_vars['ALREADY_REGISTERED']->value;?>
</div>
                <div class="ui center aligned">
                    <a class="ui large positive button" href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LOG_IN']->value;?>
</a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
