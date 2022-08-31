<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:33:58
  from '/srv/http/MinePixelWebsite/custom/panel_templates/Default/integrations/minecraft/minecraft.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f6346b821d1_58509532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13abf82c569a84714b674fee286a7fe2ab6e609d' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/panel_templates/Default/integrations/minecraft/minecraft.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_630f6346b821d1_58509532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main content -->
        <div id="content">

            <!-- Topbar -->
            <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form id="enableMinecraft" action="" method="post">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <div class="form-group custom-control custom-switch">
                                <input type="hidden" name="enable_minecraft" value="0">
                                <input id="inputEnableMinecraft" name="enable_minecraft" type="checkbox" class="custom-control-input js-check-change" value="1" <?php if ($_smarty_tpl->tpl_vars['MINECRAFT_ENABLED']->value == 1) {?> checked<?php }?> />
                                <label for="inputEnableMinecraft" class="custom-control-label">
                                    <?php echo $_smarty_tpl->tpl_vars['ENABLE_MINECRAFT_INTEGRATION']->value;?>

                                </label>
                            </div>
                        </form>

                        <?php if ($_smarty_tpl->tpl_vars['MINECRAFT_ENABLED']->value == 1) {?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['AUTHME_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['AUTHME']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['ACCOUNT_VERIFICATION']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ACCOUNT_VERIFICATION_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ACCOUNT_VERIFICATION']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['SERVERS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVERS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SERVERS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['QUERY_ERRORS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['QUERY_ERRORS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['QUERY_ERRORS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['BANNERS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BANNERS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BANNERS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['PLACEHOLDERS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </table>
                            </div>
                        <?php }?>

                    </div>
                </div>

                <!-- Spacing -->
                <div style="height:1rem;"></div>

                <!-- End Page Content -->
            </div>

            <!-- End Main Content -->
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- End Content Wrapper -->
    </div>

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
