<?php
/* Smarty version 3.1.30, created on 2024-05-26 17:12:22
  from "D:\Programs Science\xamp\htdocs\php_07_routing\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66535156ce6018_81128363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7146730d184c9126dd525a54179cea69479c866' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\php_07_routing\\app\\views\\LoginView.tpl',
      1 => 1716736188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66535156ce6018_81128363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50912788766535156ce57a5_94852356', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_50912788766535156ce57a5_94852356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin" style="width: 300px;">
        <legend style="text-align: center; font-size: 24px; margin-bottom: 20px;">Logowanie do systemu</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login" style="margin-bottom: 10px;">Login:</label>
                <input id="id_login" type="text" name="login" class="pure-input-1" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass" style="margin-bottom: 10px;">Hasło:</label>
                <input id="id_pass" type="password" name="pass" class="pure-input-1" />
            </div>
            <div class="pure-controls" style="text-align: center;">
                <button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
            </div>
        </fieldset>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
